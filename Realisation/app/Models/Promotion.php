<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $table ="promotions";
    protected $fillable=  [
        'name','token'
    ];
    public function students(){
        $this->hasMany(Student::class);
    }
}
