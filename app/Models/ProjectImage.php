<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'thumbnail', 'treatment_id'];
}
