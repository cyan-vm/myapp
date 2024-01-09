<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'profession',
        'hospital',
        'sex',
        'age',
    ];
    public function greetings()
    {
        return "Hello, I am Dr. {$this->full_name}. I work at {$this->hospital} as a {$this->profession}.";
    }
}
