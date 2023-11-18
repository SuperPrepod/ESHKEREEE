<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Group extends Model
{
    use HasFactory;

    public $fillable=["name", 'leader'];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class,'group_id');
    }
}
