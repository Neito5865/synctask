<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'created_by',
        'assigned_to',
        'status_id',
        'title',
        'description',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
