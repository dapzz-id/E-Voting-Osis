<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kandidat2 extends Model
{
    use HasFactory;
    protected $table = 'kandidat2s';

    protected $fillable = [
        'NIS', 'name'
    ];
}
