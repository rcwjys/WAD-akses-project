<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassMedicine extends Model
{
    use HasFactory;

    protected $table = 'therapyclasses';

    protected $primaryKey = 'TherapyClassId';

    protected $guarded = ['TherapyClassId'];

    protected $fillable = ['therapyClassName', 'therapyClassId'];

}
