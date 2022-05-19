<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /*Para no asignar masivamente, campos que no esten en el array los intentara guardar en la ddbb
    protected $guarded = ['id','approved','created_at','updated_at'];*/

    protected $guarded = [];

    public function getRouteKeyName(){
        return 'url';
    }
}
