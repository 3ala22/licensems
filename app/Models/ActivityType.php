<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    protected $fillable = ['code','category','name'];

    public function Licenses()
    {
        return $this->hasMany(License::class, 'activity_type');

    }

}
