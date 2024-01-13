<?php

namespace Tasawk\Starter\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job_title',
    ];

}
