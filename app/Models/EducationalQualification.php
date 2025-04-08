<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 */
class EducationalQualification extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['start_date', 'end_date'];
}
