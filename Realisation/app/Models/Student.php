<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ="students";
    protected  $fillable=  [
        'promotion_token',
        'first_name',
        'last_name',
        'email'
    ];
    public function students(){
        $this->belongsTo(Promotion::class);
    }
}
