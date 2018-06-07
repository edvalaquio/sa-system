@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="toolbar">
    <div class="input-group searchbar-container">
        <input type="text" id="search-bar" name="keyword" class="form-control" placeholder="Search...">
        <button class="btn btn-primary" type="submit">
            <i class="material-icons">search</i>
        </button>
    </div>
    <a href="#" class="btn btn-success" id="add-button">
        <i class="material-icons">add</i> Sent 
    </a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    <a href="#" class="title"><h4 class="truncate">Requires Signature from Dean</h4></a>
                    <p class="particular">Requires Signature from Dean</p>
                    <section class="additional-details">
                        <span class="type sent"><i class="material-icons">near_me</i>&nbsp;Sent,&nbsp;</span>
                        <span class="timestamp">March 2, 2018, 9:32 am</span>
                        <span class="status pending">Pending</span>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
