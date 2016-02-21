@extends('layouts.master')


@section('content')
    <h1>Create new license</h1>

    <form method="POST" class="form">
        <div class="form-group">
            <label for="license_number" class="control-label">
                License Number:
            </label>
            <input id="license_number" type="text" name="licenseNumber" class="form-control">
        </div>

        <div class="form-group">
            <label for="activity_type">
                Activity type:
            </label>
            <select name="activityType" class="form-control" id="activity_type">

            </select>
        </div>


    </form>


@endsection