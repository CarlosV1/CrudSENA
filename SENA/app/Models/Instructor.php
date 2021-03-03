<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Instructor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table ='instructor';
    protected $primaryKey ='id';
    protected $fillable =[
        'primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','num_Telefono','email','num_Documento'
   ];

   protected $hidden=[
       'password'
       ];
}
