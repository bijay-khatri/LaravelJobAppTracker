<div class="col-md-12">
    @include('member.partials.form_error')
    <h3>Edit Details</h3>
    {{ Form::open(array("route" => array("app.store", $jobApplication->id))) }}
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('position', 'Position') }}
            {{ Form::text('position',$jobApplication->position, array('class' => 'form-control','placeholder' => 'Software Engineer')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('applied_on', 'Applied Date') }}
            {{ Form::date('applied_on', $jobApplication->applied_on, array('class' => 'form-control'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('company', 'Company') }}
            {{ Form::text('company', $jobApplication->company , array('class' => 'form-control','placeholder' => 'Fiction Tech '))}}

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', $jobApplication->location , array('class' => 'form-control','placeholder' => 'Dallas, TX'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('jobsite', 'Job Site') }}
            {{ Form::text('jobsite', $jobApplication->jobsite , array('class' => 'form-control','placeholder' => 'LinkedIn'))}}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('joblink', 'JOD Link') }}
            {{ Form::text('joblink', $jobApplication->joblink , array('class' => 'form-control','placeholder' => 'http://abcdef.com/jobs/abc?def=efg'))}}

        </div>
    </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withresume', 'Apply with Resume ') }} &nbsp;&nbsp;&nbsp;
                {{ Form::radio('withresume', 1, $jobApplication->withresume)}} &nbsp;Yes&nbsp;&nbsp;
                {{ Form::radio('withresume', 0, !$jobApplication->withresume)}}&nbsp;No

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withcoverletter', 'Apply with Cover Letter') }} &nbsp;&nbsp;
                {{ Form::radio('withcoverletter', 1, $jobApplication->withcoverletter)}} &nbsp;Yes&nbsp;&nbsp;
                {{ Form::radio('withcoverletter', 0, !$jobApplication->withcoverletter)}}&nbsp;No
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('withlinkedin', 'Apply with LinkedIn') }} &nbsp;&nbsp;
                {{ Form::radio('withlinkedin', 1, $jobApplication->withlinkedin)}} &nbsp;Yes &nbsp;&nbsp;
                {{ Form::radio('withlinkedin', 0, !$jobApplication->withlinkedin)}} &nbsp;No
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('type', 'Position Type') }} &nbsp;&nbsp;
                {{ Form::radio('type', 'fulltime', $jobApplication->type === 'fulltime')}} &nbsp;Full Time&nbsp;&nbsp;
                {{ Form::radio('type', 'parttime', $jobApplication->type === 'parttime')}}&nbsp;Part Time&nbsp;&nbsp;
                {{ Form::radio('type', 'contract', $jobApplication->type === 'contract')}}&nbsp;Contract&nbsp;&nbsp;
                {{ Form::radio('type', 'contracttohire', $jobApplication->type === 'contracttohire')}} &nbsp;Contract to hire&nbsp;&nbsp;
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
