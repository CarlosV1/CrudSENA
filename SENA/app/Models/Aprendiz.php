<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{

    protected $table ='Aprendiz';
    protected $primaryKey ='id';
    protected $fillable =[
        'primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','num_Telefono','email','num_Documento'
    ];
    use HasFactory;
}
