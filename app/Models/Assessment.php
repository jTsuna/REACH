<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'assessments';

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
