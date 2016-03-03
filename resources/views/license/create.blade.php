@inject('lookup','App\Models\Lookup')

@extends('layouts.master')


@section('content')
    <h1 class="page-header">Create new license</h1>

    <form method="POST" action="/license" class="form">
        @include('license.form')
    </form>
@endsection