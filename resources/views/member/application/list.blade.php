@extends('layouts.layout')

@section('content')
    <h4> Listing all jobs recorded for you </h4>
    <?php $job = $jobApplication;?>
    <table class="table">
        <th>S.No</th>
        <th>Title</th>
        <th>Company</th>
        <th>Location</th>
        <th>Applied On</th>
        <th>Status</th>
        <th></th>

        @if(count($jobApplication) == 0)
            <tr>
                <td colspan="7">
                    <h5>No Records !!!</h5>
                    <a href="{{url('app')}}">
                        <button class="btn btn-lg btn-primary">Start Tracking</button>
                    </a>
                </td>
            </tr>
        @else
            @foreach($jobApplication as $job)
                @include('member.partials.application.records_in_row')
            @endforeach
        @endif
    </table>
@endsection
