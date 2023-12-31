<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineUnits extends Model
{
    use HasFactory;

    protected $table = 'medicineunits';

    protected $primaryKey = 'medicineUnitId';

    protected $guarded = 'medicineUnitId';

    protected $fillable = ['recipe'];
}
