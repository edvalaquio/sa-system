@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style type="text/css">
        .file-field .btn-large{
            padding: 0 10px;
            border-radius: 50%;
        }
        .input-field.chips{
            margin-top: 0;
        }
    </style>
@endpush

@section('content')
<div class="toolbar">
    <div class="searchbar-container">
        <input type="text" id="search-bar" name="keyword" placeholder="Search...">
        <button class="btn-floating light-green" type="submit">
            <i class="material-icons">search</i>
        </button>
    </div>
    <a href="#" class="btn btn-success modal-trigger" id="add-button" data-target="add-modal">
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
<div id="add-modal" class="modal">
    <div class="modal-content">
        <h4>Add Sent</h4>
        <a href="#" class="modal-close close-btn"><i class="material-icons">clear</i></a>

        <form>
            <div class="file-field input-field">
                <div class="btn btn-large amber accent-4">
                    <span><i class="material-icons">attach_file</i></span>
                    <input type="file" name="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="ATTACH A FILE (optional)">
                </div>
            </div>

            <div class="input-field">
                <input type="text" id="title" name="title">
                <label for="title">Title</label>
            </div>

            <div class="input-field">
                <textarea class="materialize-textarea" id="description" name="description" placeholder="OPTIONAL"></textarea>
                <label for="description">Description</label>
            </div>

            <div class="input-field">
                <input type="text" id="recipient" name="recipient">
                <label for="recipient">Recipient</label>
            </div>

            <label>Tags</label>
            <div class="chips chips-autocomplete"></div>

            <button class="btn btn-large green waves-effect waves-light" id="confirm-add" type="submit"><i class="material-icons">add</i></button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $(".modal").modal()

        $('.chips').chips()

        $('.chips-initial').chips({
            data: [{
              tag: 'Apple',
            }, {
              tag: 'Microsoft',
            }, {
              tag: 'Google',
            }],
        })

        $('.chips-placeholder').chips({
            placeholder: 'Enter a tag',
            secondaryPlaceholder: '+Tag',
        })

        $('.chips-autocomplete').chips({    
            autocompleteOptions: {
              data: {
                'Apple': null,
                'Microsoft': null,
                'Google': null
              },
              limit: Infinity,
              minLength: 1
            }
        })
    })
</script>
@endpush
