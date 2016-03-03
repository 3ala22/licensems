<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    protected $fillable = ['lookup_name', 'lookup_id', 'value'];

    public function scopeByName($query, $lookupName)
    {
        return $query->where('lookup_name',$lookupName);
    }

    public static function get($lookupName)
    {
        return static::byName($lookupName)->get();
    }
}
