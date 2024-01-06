<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RabbitProfile extends Model
{
    use HasFactory;

    protected $primaryKey = 'rabbit_id';
    protected $guarded = ['_token'];
}
