<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'notes', 'status'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
}
