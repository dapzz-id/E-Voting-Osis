<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kandidat3 extends Model
{
    use HasFactory;
    protected $table = 'kandidat3s';

    protected $fillable = [
        'NIS', 'name'
    ];
}
