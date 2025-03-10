<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_name',
        'description',
        'created_by',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_project', 'project_id', 'user_id')->withTimestamps();
    }
}
