<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    public function machines(){
        return $this->hasmany(Machine::class,'id');
    }
   

    protected $fillable = [
        'id',
        'code',
        'libelle',
        
    ];
}