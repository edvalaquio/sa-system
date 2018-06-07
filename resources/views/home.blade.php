@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    <a href="#" class="title"><h4 class="truncate">Requires Signature from Dean</h4></a>
                    <p class="particular">Requires Signature from Dean</p>
                    <section class="additional-details">
                        <span class="type received"><i class="material-icons">inbox</i>&nbsp;Received,&nbsp;</span>
                        <span class="timestamp">March 2, 2018, 9:32 am</span>
                        <span class="status pending">Pending</span>
                    </section>
                </div>
            </div>

            <div class="card card-default">
                <div class="card-body">
                    <a href="#" class="title"><h4 class="truncate">Requires Signature from Dean</h4></a>
                    <p class="particular">Requires Signature from Dean</p>
                    <section class="additional-details">
                        <span class="type sent"><i class="material-icons">near_me</i>&nbsp;Sent,&nbsp;</span>
                        <span class="timestamp">March 2, 2018, 9:32 am</span>
                        <span class="status complete">complete</span>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- <div class="card">
    <div class="card-header">Transaction</div>

    <div class="card-body">
        <table>
            <tr>
                <th>Time</th>
                <th>Date</th> 
                <th>Particular</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>9:00am</td>
                <td>January 28, 2018</td>
                <td>Required Signature from Dean</td>
                <td>received</td>
                <td>pending</td>
            </tr>
        </table>

    </div>
</div> -->

<!-- <td>
    <button class="btn btn-primary">View</button>
    <button class="btn btn-success">Download</button>
</td> -->

<!-- <form>
    <input type="text" name="name">
    <input type="file" name="file">
    <button type="submit"></button>
</form> -->
