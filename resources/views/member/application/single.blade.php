    @extends('layouts.layout')

    @section('content')
        @include('member.partials.application.table_details')
        @include('member.partials.application.response_table')
        <!-- <i class="fa fa-plus-square" aria-hidden="true">
            <a href="{{url('#')}}">Add New Response</a>
        </i> -->
        <div class="row">
        <div class="col-md-12">
        <hr/>
        <h5> Got New Response, Add Now </h5>
            @include('member.partials.application.response_form')
        </div>
    </div>
    @endsection
