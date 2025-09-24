<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
class Professor extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    public function turmas(){
        return $this->hasMany(Turma::class);
    }

    //um professor tem varias turmas
}