<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
