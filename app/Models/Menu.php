<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';

    protected $fillable = [
        'title',
        'style',
        'times',
        'strength',
        'long',
        'time',
        'total',
        'impression',
        'user_id',
        'date',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}