<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class License extends Model
{
    protected $fillable = ['license_number', 'activity_type', 'issue_date', 'expiry_date', 'trade_name', 'legal_type', 'telephone', 'mobile1', 'mobile2', 'fax', 'email', 'pobox', 'address', 'street', 'floor', 'area', 'building', 'unit', 'cost', 'sponsor', 'sponsor_fees'];

    public function activityType()
    {
        return $this->hasOne(ActivityType::class);
    }

    public static function hasNumber($licenseNumber)
    {
        return static::where('license_number', $licenseNumber)->first();
    }

    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }

    public function addDocument(Document $document)
    {
        $this->documents()->save($document);
    }
}
