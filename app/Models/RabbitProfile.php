<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RabbitProfile extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function farmRabbitProfiles(){
        return RabbitProfile::where('farm_id', Auth::user()->farm_id)->get();
    }
}
