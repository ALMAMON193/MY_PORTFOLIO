<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static find($id)
 * @method static findOrFail($id)
 * @property mixed $name
 * @property mixed $description
 * @property mixed $github_link
 * @property mixed $live_link
 * @property mixed $start_date
 * @property mixed $end_date
 */
class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function videos()
    {
        return $this->hasMany(ProjectVideo::class);
    }
}
