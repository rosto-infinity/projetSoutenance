<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financement extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    // Relation avec le modèle PreInscription
    
    public function preInscriptions()
    {
        return $this->hasMany(PreInscription::class, 'financement_id');
    }
}

