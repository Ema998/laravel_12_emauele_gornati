<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Articolo extends Model
{
    protected $fillable = [
        'titolo',
        'body',
        'img'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
