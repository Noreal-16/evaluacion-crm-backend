<?php
namespace App\Services;

use App\Models\Notifications;
use App\Models\NotificationsCstm;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class IndigitallClass {
 
  public function sendPushNotification($module,$record_id,$url,$username,$assigned_user_id,$token,$serverKey,$campaingId,$company_id, $debug=false){
    $enviarSugar=true;
    switch ($module) {
      case 'Ticket':
          $title="Tienes un Nuevo Ticket";
          $body="Clic aquí para gestionar tu nuevo cliente digital";
          $name=$title;
          $description="";
          $severity="warning";
          $parent_type="cbt_Tickets";
          $tipoevento=1;
          break; 
      case 'Llamadas':
          $title="Tienes una llamada por hacer";
          $body="Este es un recordatorio, tu llamada está programada para dentro de 10 min. Clic aquí para realizar tu llamada";
          $name=$title;
          $description="";
          $severity="warning";
          $parent_type="Calls";
          $tipoevento=1;
          break; 
      case 'EstaRegistrado?':
          $title="Notificaciones funcionando correctamente";
          $body="Este es una notificación automatica, para comprobar que las notificaciones push funcionan";
          $name=$title;
          $description="";
          $severity="warning";
          $parent_type="";
          $tipoevento='r'; 
          break; 
      case 'Trafico':
          $title="Tienes un nueva Negociación asignada";
          $body="Clic aquí para ver los datos del cliente que está esperando en recepción";
          $name=$title;
          $description="";
          $severity="warning";
          $parent_type="cb_Negociacion";
          $tipoevento=1;
          break; 
    }  
    if($enviarSugar){
      $data["name"]=$name;
      $data["description"]=$description;
      $data["severity"]=$severity;
      $data["parent_type"]=$parent_type;
      $data["parent_id"]=$record_id;
      $data["assigned_user_id"]=$assigned_user_id;
      $data["url"]=$url;
      $data["tipoevento"]=$tipoevento;
      $data["created_by"]=1;      

      $obj=$this->saveSugarNotification($data); 
      
      $arrayData=[ 
        'company_id'=>$company_id,
        'record_id'=>$obj->id,
      ];
      $jsonDataURL=base64_encode(json_encode($arrayData)); 
      $urlReadPush="https://push.epicentro-digital.com?d=$jsonDataURL"; 
    } 
    $sent=$this->connect($title,$body,$urlReadPush,$username,$token,$serverKey,$campaingId,$debug);
    
    return ['sent'=>$sent,'data'=>$jsonDataURL,'urlReadPush'=>$urlReadPush ];
    
  }

  private function saveSugarNotification($data)
  {
    $obj = new Notifications();
    $obj->name = $data["name"];
    $obj->date_entered = Carbon::now();
    $obj->date_modified = Carbon::now();
    $obj->created_by = $data["created_by"];
    $obj->modified_user_id = $data["created_by"];
    $obj->description = $data["description"];
    $obj->deleted =0;
    $obj->is_read =0;
    $obj->severity =$data["severity"];
    $obj->parent_type =$data["parent_type"];
    $obj->parent_id =$data["parent_id"];
    $obj->assigned_user_id =$data["assigned_user_id"];
    $obj->save();

    $objCstm = new NotificationsCstm();
    $objCstm->id_c=$obj->id;
    $objCstm->url_c=$data["url"];
    $objCstm->tipoevento_c=$data["tipoevento"];
    $objCstm->save();

    return $obj;
  }
  
  private function deviceDataGenerator($title,$body,$url,$username,$token){         
    $oDeviceList["id"]=hash_hmac("sha256",$username,$token);
    $oDeviceList["customFields"]=array(
        "titulo"=>$title,
        "cuerpo"=>$body,
        "url"=>$url
    );
    $data["idType"]="externalId";
    $data["deviceList"][]=$oDeviceList;
    return $data;
  }
  private function connect($title,$body,$url,$username,$token,$serverKey,$campaingId,$debug=false){
    $data= $this->deviceDataGenerator($title,$body,$url,$username,$token);         

    $response = Http::withHeaders(['Authorization'=> "ServerKey $serverKey"])
                        ->post("https://eu2.api.indigitall.com/v1/campaign/$campaingId/send/list",$data);
    $respIndigitall=$response->json();
    if($debug){
      return $respIndigitall;
    }
    $resp=false; 
    if ($respIndigitall) { 
        if($respIndigitall['statusCode']==200){
            if(count($respIndigitall['data']['errors'])==0){
                //Recibido correctamente
                $resp=true;
            }
        }
    }
    return $resp;
  }
}
