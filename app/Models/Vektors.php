<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class vektors extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function Transactions(){
        return $this->hasMany(Transactions::class);
    }
}