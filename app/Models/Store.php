<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
       protected $fillable=['name','address','store_id'];

       public function meniu(){
           return $this->hasMany(Meniu::class);
       }
}
