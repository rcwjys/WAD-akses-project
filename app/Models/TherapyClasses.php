<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class therapyClasses extends Model
{
    use HasFactory;

    protected $table = 'therapyClasses';

    protected $primaryKey = 'therapyClassId';

    protected $guarded = ['therapyClassId'];

    protected $fillable = ['therapyClassName'];

}
