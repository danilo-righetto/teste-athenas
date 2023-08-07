<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'cpf', 'email', 'category'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
