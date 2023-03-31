<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        's3s_id',
        'sugar_dev',
        'sugar_prod',
        'intermedia_prod',
        'domain',
        'token_indigitall_dev',
        'token_indigitall_prod',
        'indigitall_serverkey',
        'indigitall_campaign'
    ];

    public function users()
    {
        return $this->hasMany(Users::Class);
    }

}
