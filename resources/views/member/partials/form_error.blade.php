@if (count($errors) > 0)
<section>
    <h5>Please correct the following error(s)</h5>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
</section>
@endif
