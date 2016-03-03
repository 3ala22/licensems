<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LicenseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "licenseNumber" => "required|numeric|unique:licenses,license_number",
            "activityType" => "required",
            "expiryDate" => "required|date",
            "cost" => "required|numeric",
            "tradeName" => "required",
            "legalType" => "required",
            "email" => "email",
            "sponsorFees" => "numeric"
        ];
    }
}
