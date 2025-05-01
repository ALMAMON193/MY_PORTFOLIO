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

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     * Get all videos for the project
     */
    public function videos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectVideo::class);
    }

    /**
     * Get all features for the project
     */
    public function features(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectFeature::class);
    }

    /**
     * Get all technologies for the project
     */
    public function technologies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectTechnology::class);
    }

    /**
     * Get all challenges for the project
     */
    public function challenges(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectChallengesAndSolution::class);
    }
}
