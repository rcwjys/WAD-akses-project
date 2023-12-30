<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicines';

    protected $primaryKey = 'medicineId';

    protected $guarded = ['medicineId'];

    protected $fillable = ['medicineName', 'medicineStock', 'medicineInformation', 'expiredDate', 'medicinePeriod', 'recipeId', 'medicineUnitId', 'therapyClassId', 'subTherapyClassId'];
}
