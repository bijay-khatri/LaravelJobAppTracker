<div class="col-md-6">
    <section>
        <h4>Response History</h4>
        <table class="table">
            <th>Response Date</th>
            <th>Response Title</th>
            <th>Response From</th>
            <!-- <th>Email</th>
            <th>Contact</th>
            <th>Description</th> -->
            <th></th><th></th><th></th>
            @foreach($jobApplication->jobResponses as $response)
            <tr>
                <td>{{ $response->response_on }}</td>
                <td> {{ $response->name}}</td>
                <!-- <td> {{ $response->from}}</td>
                <td> {{ $response->email}}</td>
                <td> {{ $response->contact}}</td> -->
                <td colspan="4"> {{$response->description}}</td>
            </tr>
            @endforeach
        </table>
    </section>
</div>
