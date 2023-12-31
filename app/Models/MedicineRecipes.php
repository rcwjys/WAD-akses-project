<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineRecipes extends Model
{
    use HasFactory;

    protected $table = 'medicineRecipes';

    protected $primaryKey = 'recipeId';

    protected $guarded = 'recipeId';

    protected $fillable = ['recipe'];
}
