<div class="col-md-12">
    @include('member.partials.form_error')
    <h3>Application Details</h3>
    {{ Form::open(array('url' => 'app/store')) }}
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('position', 'Position') }}
            {{ Form::text('position',old('position'), array('class' => 'form-control','placeholder' => 'Software Engineer')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('applied_on', 'Applied Date') }}
            {{ Form::date('applied_on', \Carbon\Carbon::now() , array('class' => 'form-control'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('company', 'Company') }}
            {{ Form::text('company', old('company') , array('class' => 'form-control','placeholder' => 'Fiction Tech '))}}

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', old('location') , array('class' => 'form-control','placeholder' => 'Dallas, TX'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('jobsite', 'Job Site') }}
            {{ Form::text('jobsite', old('jobsite') , array('class' => 'form-control','placeholder' => 'LinkedIn'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('joblink', 'JOD Link') }}
            {{ Form::text('joblink', old('joblink') , array('class' => 'form-control','placeholder' => 'http://abcdef.com/jobs/abc?def=efg'))}}

        </div>
    </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withresume', 'Apply with Resume ') }} &nbsp;&nbsp;&nbsp;
                {{ Form::radio('withresume', 1, true)}} &nbsp;Yes&nbsp;&nbsp;
                {{ Form::radio('withresume', 0)}}&nbsp;No

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withcoverletter', 'Apply with Cover Letter') }} &nbsp;&nbsp;
                {{ Form::radio('withcoverletter', 1, true)}} &nbsp;Yes&nbsp;&nbsp;
                {{ Form::radio('withcoverletter', 0)}}&nbsp;No
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withlinkedin', 'Apply with LinkedIn') }} &nbsp;&nbsp;
                {{ Form::radio('withlinkedin', 1, true)}} &nbsp;Yes &nbsp;&nbsp;
                {{ Form::radio('withlinkedin', 0)}} &nbsp;No
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('type', 'Position Type') }} &nbsp;&nbsp;
                {{ Form::radio('type', 'fulltime', true)}} &nbsp;Full Time&nbsp;&nbsp;
                {{ Form::radio('type', 'parttime', false)}}&nbsp;Part Time&nbsp;&nbsp;
                {{ Form::radio('type', 'contract', false)}}&nbsp;Contract&nbsp;&nbsp;
                {{ Form::radio('type', 'contracttohire', false)}} &nbsp;Contract to hire&nbsp;&nbsp;
            </div>
        </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::submit('Save',array('class' => 'btn btn-success'))}}
        </div>
    </div>

    {{ Form::close() }}
    <!-- <form class="form" action="{{ url('app.store')}}" method="post">

    </form> -->
</div>
