<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectTechnology extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'technology_name',
        'icon',
        'status',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
