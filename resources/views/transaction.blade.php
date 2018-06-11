@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transaction.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <a href="#" class="title"><h4 class="truncate">Requires Signature from Dean</h4></a>
            <section class="additional-details">
                <span class="type received"><i class="material-icons">inbox</i>&nbsp;Received,&nbsp;</span>
                <span class="timestamp">March 2, 2018, 9:32 am</span>
                <span class="status pending">Pending</span>
            </section>
            <ul>
                <li class="chip">DTR</li>
                <li class="chip">Thesis</li>
            </ul>
            <p class="particular">Requires Signature from Dean. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

            <h6>Attachments:</h6>
            <ul class="files">
                <li><i class="material-icons amber-text">attach_file</i> Guidelines_for_Thesis.pdf</li>
            </ul>

            <p class="note">
                This is a note. Users can add these to inform the receiver of the document.
            </p>

            <h6>History</h6>
            <p class="note">To be worked on.</p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
