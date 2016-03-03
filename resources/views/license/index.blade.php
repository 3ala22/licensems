@extends('layouts.master')

@section('content')
    <h2>Licenses</h2>

    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <form class="form" action="{{ url('license') }}" method="GET">
                <div class="input-group">
                    <input type="search" name="search" placeholder="Search License by name or number..."
                           value="{{ request('search') }}"
                           class="form-control input-lg">
                     <span class="input-group-btn">
                         <button type="submit" class="btn btn-lg btn-default">Search</button>
                      </span>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <a href="{{ url('/license/create') }}" class="btn btn-primary pull-right">Create new license</a>
        </div>
    </div>
    <br>

    @if(count($licenses) > 0)
        <table class="table table-stripped">
            <thead>
            <tr>
                <th>License Number</th>
                <th>Trade Name</th>
                <th>Activity Type</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach($licenses as $license)
                <tr>
                    <td>{{ $license->license_number }}</td>
                    <td>{{ $license->trade_name }}</td>
                    <td>{{ $license->activityType->name }}</td>
                    <td>{{ defaultDateFormat($license->expiry_date) }}</td>
                    <td>{{ $license->status }}</td>
                    <td>
                        <a href="{{ url('license/' . $license->license_number) }}">
                            edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <p class="alert alert-warning">No records found!</p>
    @endif


@stop