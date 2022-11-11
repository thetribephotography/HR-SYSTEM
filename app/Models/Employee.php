<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'lasst_name',
        'email',
        'contact_no',
        'dept_name',
        'state_name',
    ];


    public function dept(){
        return $this->belongsTo(Department::class, 'dept_name');
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_name');
    }
}
