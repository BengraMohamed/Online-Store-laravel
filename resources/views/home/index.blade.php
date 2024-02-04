@extends('layouts.app')
@section('title', 'B13 STORE')
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/greycar.png') }}"   class="img-fluid rounded p-4 m-4">
</div>
<div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/redcar.png') }}" class="img-fluid rounded p-4 m-4">
</div>
<div class="col-md-6 col-lg-4 mb-2 ">
    <img src="{{ asset('/img/bluecar.png') }}" class="img-fluid rounded p-4 m-4">
</div>
 
</div>
@endsection
