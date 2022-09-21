<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prijava;

class Smer extends Model
{
    use HasFactory;
    public function prijava(){
        return $this->hasMany(Prijava::class);
    }
}
