<?php

namespace App\Console\Commands;

use App\Http\Controllers\EmailController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SendEmailsRecordatorio extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendmail:recordatorio {id_user : El ID del usuario para consultar los permisos y conexiones.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia los correos de recordatorio a taller 1001Carros,com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //dd($this->arguments(),$this->options(), $this->option('verbose'));

        $userId = $this->argument('id_user');
        $request = ['id_user' => $userId];
        $validator = Validator::make($request, [
            'id_user' => 'required',
        ]);
        if ($validator->fails()) {
            $this->error($validator->errors());
        }

        $user_auth = Auth::user();
        if(!$user_auth){
            $tokenData = new SendCorreoBienvenida();
            $token_app = $tokenData->findToken($userId);
            try{
                Auth::loginUsingId($token_app->tokenable_id);
                foreach (Auth::user()->tokens()->get() as $cu2_token){
                    if($cu2_token->token == $token_app->token ){
                        Auth::user()->withAccessToken($cu2_token);
                    }
                }
            }catch ( \Exception $exception){
                $this->error( print_r(['metodo'=>'SugarAuth.SugarAuth','ID'=>'KKl2waon89', 'mensaje'=>$exception],true));
                Auth::logout();
            }
        }
        $respuesta_web = EmailController::sendMailRecordatorio1001();
        if($respuesta_web->getStatusCode() == 200){
            $this->info(print_r($respuesta_web->getData(),true));
        }else{
            $this->error("Error en ejecución, por favor ver log web de servicio.");
            $this->error($respuesta_web->getStatusCode());
            $this->error(print_r($respuesta_web->getData(),true));
        }
    }
}
