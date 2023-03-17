<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public function salle(){
        return $this->belongsto(Salle::class,'salleid');
    }
   

    protected $fillable = [
        'reference',
        'marque',
        'dateAchat',
        'prix',
        'salleid',
        
    ];
}