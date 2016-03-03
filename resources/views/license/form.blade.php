@include('partials.errors')

{{ csrf_field() }}

<section>
    <h2>License Information</h2>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="license_number" class="control-label">
                    License Number:
                </label>
                <input type="text" name="licenseNumber" class="form-control" id="license_number" required
                       value="{{ old('licenseNumber') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="trade_name">Trade Name:</label>
                <input type="text" name="tradeName" class="form-control" id="trade_name" required
                       value="{{ old('tradeName') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="activity_type">
                    Activity type:
                </label>
                <select name="activityType" class="form-control" id="activity_type" required>
                    @foreach($activityTypes as $type)
                        <option value="{{$type["id"]}}">{{$type["name"]}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="legal_type">Legal Type</label>
                <select name="legalType" class="form-control" id="legal_type" required>
                    @foreach($lookup::get('legalTypes') as $type)
                        <option id="{{ $type['lookup_id'] }}">{{ $type['value'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="issue_date">Issue Date</label>
                <input type="date" name="issueDate" class="form-control" id="issue_date"
                       value="{{ old('issueDate') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiryDate" class="form-control" id="expiry_date" required
                       value="{{ old('expiryDate') }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="cost">Cost</label>
                <input type="text" name="cost" class="form-control" id="cost" value="{{ old('cost') }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">

            <div class="form-group">
                <label for="sponsor_fees">Sponsor Fees</label>
                <input type="text" name="sponsorFees" class="form-control" id="sponsor_fees"
                       value="{{ old('sponsorFees') }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="sponsor">Sponsor</label>
                <input type="text" name="sponsor" class="form-control" id="sponsor" value="{{ old('sponsor') }}">
            </div>
        </div>
    </div>


</section>

<section>
    <h2>Contact Details</h2>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" class="form-control" id="telephone"
                       value="{{ old('telephone') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" id="fax" value="{{ old('fax') }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="mobile_1">Mobile 1</label>
                <input type="text" name="mobile1" class="form-control" id="mobile_1" value="{{ old('mobile1') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="mobile_2">Mobile 2</label>
                <input type="text" name="mobile2" class="form-control" id="mobile_2" value="{{ old('mobile2') }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="po_box">P.O.Box</label>
                <input type="text" name="POBox" class="form-control" id="po_box" value="{{ old('POBox') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
        </div>
    </div>


</section>

<section>
    <h2>Address Details</h2>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="area">Area</label>
                <input type="text" name="area" class="form-control" id="area" value="{{ old('area') }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" class="form-control" id="street" value="{{ old('street') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="building">Building</label>
                <input type="text" name="building" class="form-control" id="building" value="{{ old('building') }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="text" name="floor" class="form-control" id="floor" value="{{ old('floor') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="unit">Unit</label>
                <input type="text" name="unit" class="form-control" id="unit" value="{{ old('unit') }}">
            </div>
        </div>
    </div>
</section>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>