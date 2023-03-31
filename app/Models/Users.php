<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $connection = 'sugar_dev';
    protected $table = 'users';
    protected $fillable = ['id', 'user_name'];

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->setConnection(get_connection());
    }
    public static function get_coordinadores($withEmail = true)
    {


        $users = Users::where('users.deleted', 0)
            ->join('users_cstm', 'users.id', '=', 'users_cstm.id_c')
            ->join('cb_agencias', 'users_cstm.cb_agencias_id_c', '=', 'cb_agencias.id')
            ->where('cargo_c', 8) 
            ->select('users.id', 'first_name', 'last_name', 'phone_mobile', 'user_name', 'cb_agencias.name as agencia', 'status')
            ->get();

        if ($withEmail) {
            foreach ($users as $user) {
                $emailRel = EmailAddrBeanRel::where('bean_id', $user->id)->where('primary_address', 1)->first();
                if ($emailRel) {
                    $userEmail = EmailAddreses::where('id', $emailRel->email_address_id)->first();
                    $user->email = $userEmail->email_address;
                }
            }
        }

        return $users;
    }
 
}
