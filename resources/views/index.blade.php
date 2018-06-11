
@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<section ng-app="indexApp" class="" ng-view></section>
@endsection

@push('scripts')
<script type="text/javascript" src="/bower_components/angular/angular.js"></script>
<script type="text/javascript" src="/bower_components/angular-route/angular-route.js"></script>
<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="/bower_components/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script type="text/javascript" src="/js/index.js"></script>
<script type="text/javascript" src="/js/controllers/userController.js"></script>
<script type="text/javascript" src="/js/controllers/filesLogController.js"></script>
<script type="text/javascript" src="/js/controllers/modalController.js"></script>
@endpush
