<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradSurvey extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'grad_surveys';
}
