<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounselorProfile extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'counselor_profiles';

    public function user(){
        return $this->hasOne(User::class);
    }
}
