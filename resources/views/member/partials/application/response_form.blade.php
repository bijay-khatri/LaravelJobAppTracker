@include('member.partials.form_error')
{{ Form::open(array("route" => array("response.add",$jobApplication->id))) }}
<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('response_on', 'Response Date') }}
        {{ Form::date('response_on', \Carbon\Carbon::now() , array('class' => 'form-control'))}}

    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name',old('name'), array('class' => 'form-control','placeholder'=>'Response 1')) }}
    </div>
</div>

<!-- <div class="col-md-4">
    <div class="form-group">
        {{ Form::label('from', 'Name of Responser') }}
        {{ Form::text('from',old('from'), array('class' => 'form-control','placeholder'=>'Mr.Jhon Doe')) }}
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {{ Form::label('contact', 'Contact Number') }}
        {{ Form::text('contact',old('contact'), array('class' => 'form-control','placeholder'=>'+1 323-xxx-xxxx')) }}
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email',old('email'), array('class' => 'form-control','placeholder'=>'john@doe.com')) }}
    </div>
</div> -->

<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', old('description') , array('class' => 'form-control','placeholder'=>'Description of Response'))}}

    </div>
</div>


<div class="col-md-12">
    <div class="form-group">
        {{ Form::submit('Save',array('class' => 'btn  btn-default'))}}
    </div>
</div>
{{ Form::close()}}
