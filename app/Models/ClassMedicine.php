<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassMedicine extends Model
{
    use HasFactory;

    protected $table = 'therapyclasses';

    protected $primaryKey = 'therapyClassId';

    protected $guarded = ['therapyClassId'];

    protected $fillable = ['therapyClassName', 'created_at','updated_at'];

}
