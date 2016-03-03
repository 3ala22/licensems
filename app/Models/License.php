<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class License extends Model
{
    protected $fillable = ['license_number', 'activity_type', 'issue_date', 'expiry_date', 'trade_name', 'legal_type', 'telephone', 'mobile1', 'mobile2', 'fax', 'email', 'pobox', 'address', 'street', 'floor', 'area', 'building', 'unit', 'cost', 'sponsor', 'sponsor_fees'];
    protected $dates = ['created_at', 'updated_at', 'expiry_date', 'issue_date'];

    public function activityType()
    {
        return $this->belongsTo(ActivityType::class, 'activity_type');
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('license_number',$searchTerm)
                    ->orWhere('trade_name', 'like', "%$searchTerm%");
    }

    public function getStatusAttribute($value)
    {
        return $value === 0 ? 'Expired' : 'Active';
    }

    public function setExpiryDateAttribute($value)
    {
        $today = new Carbon();
        $expiryDate = new Carbon($value);
        $this->attributes['status'] = $today->gt($expiryDate) ? false : true;
        $this->attributes['expiry_date'] = $expiryDate;
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
