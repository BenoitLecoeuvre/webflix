<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // TODO: Définir le hasMany
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}