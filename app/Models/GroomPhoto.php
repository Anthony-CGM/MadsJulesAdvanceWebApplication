<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomPhoto extends Model
{
    use HasFactory;
    protected $guarded = ['id','img_path'];
    protected $fillable = ['img_path', 'service_id'];
}
