<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramList extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'program_lists';

    public function profile(){
        $this->belongsTo(StudentProfile::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
