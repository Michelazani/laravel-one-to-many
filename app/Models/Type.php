<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    // dico che lui è proprietario di molti projects
    public function portofolios(){
        // ha molti post di tipo model-portfolio-class
        $this-> hasMany(Portfolio::class);
    }
}
