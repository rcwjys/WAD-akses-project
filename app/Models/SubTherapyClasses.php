<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTherapyClasses extends Model
{
    use HasFactory;

    protected $table = 'subtherapyclasses';

    protected $primaryKey = 'subTherapyClassId';

    protected $guarded = ['subTherapyClassId'];

    protected $fillable = ['subTherapyClassName'];
}
