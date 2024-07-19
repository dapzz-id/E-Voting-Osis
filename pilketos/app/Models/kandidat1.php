<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kandidat1 extends Model
{
    use HasFactory;
    protected $table = 'kandidat1s';

    protected $fillable = [
        'NIS', 'name'
    ];
}
