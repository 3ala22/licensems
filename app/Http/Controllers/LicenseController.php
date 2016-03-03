<?php

namespace App\Http\Controllers;

use App\Http\Requests\LicenseRequest;
use App\Models\ActivityType;

use App\Http\Requests;
use App\Models\Document;
use App\Models\License;
use App\Models\Lookup;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * LicenseController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('license.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        // get list of activity types
        $activityTypes = ActivityType::all();
        return view('license.create', compact('activityTypes'));
    }

    public function show($licenseNumber)
    {
        $license = License::hasNumber($licenseNumber);

        return view('license.show',compact('license'));

    }

    /**
     * @param LicenseRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LicenseRequest $request)
    {
        License::create([
            'license_number' => $request['licenseNumber'],
            'activity_type' => $request['activityType'],
            'issue_date' => $request['issueDate'],
            'expiry_date' => $request['expiryDate'],
            'trade_name' => $request['tradeName'],
            'legal_type' => $request['legalType'],
            'telephone' => $request['telephone'],
            'mobile1' => $request['mobile1'],
            'mobile2' => $request['mobile2'],
            'fax' => $request['fax'],
            'email' => $request['email'],
            'pobox' => $request['pobox'],
            'address' => $request['address'],
            'street' => $request['street'],
            'floor' => $request['floor'],
            'area' => $request['area'],
            'building' => $request['building'],
            'unit' => $request['unit'],
            'cost' => $request['cost'],
            'sponsor' => $request['sponsor'],
            'sponsor_fees' => $request['sponsorFees']
        ]);

        flash()->success('License Created!', 'License record has been successfully created.');

        return redirect()->back();
    }

    public function addDocument($licenseNumber, Request $request)
    {

        $this->validate($request, [
            'document' => 'required|mimes:jpg,jpeg,png,gif,bmp,doc,docx,pdf,key,ppt,pptx,pps,ppsx,odt,xls,xlsx'
        ]);

        $document = Document::fromFile($request->file('document'), "licenses/{$licenseNumber}/");

        License::hasNumber($licenseNumber)->addDocument($document);

        return "Done";

    }
}
