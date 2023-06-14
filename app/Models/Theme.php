<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name', 'image'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
