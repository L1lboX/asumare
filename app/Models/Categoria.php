<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // esto es lo que no es necesaro ponerlo
    protected $table = 'categorias';
    #protected $primaryKey = 'id';

    //esto si es necesario

    protected $fillable = ['nombre'];
    

}