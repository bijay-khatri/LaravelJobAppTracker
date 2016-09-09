<div class="col-md-6">
    <section>
        <h4>Details of {{ $jobApplication->position}} @ {{ $jobApplication->company}}</h4>
        <table class="table">
            <tr>
                <td>Applied On </td>
                <td>{{ $jobApplication->applied_on}}</td>
            </tr>
            <tr>
                <td>Location </td>
                <td>{{ $jobApplication->location}}</td>
            </tr>

            <tr>
                <td>Applied via </td>
                <td>{{ $jobApplication->jobsite}}</td>
            </tr>

            <tr>
                <td> Jod Description </td>
                <td><a href={{$jobApplication->joblink}}>{{ $jobApplication->joblink }}</a></td>
            </tr>

            <tr>
                <td>Job Type</td>
                <td>{{ $jobApplication->jobType($jobApplication->type)}}</td>
            </tr>

            <tr>
                <td>Send Resume</td>
                <td>{{ $jobApplication->withresume?'Yes':'No'}}</td>
            </tr>

            <tr>
                <td>Used LinkedIn Profile</td>
                <td>{{ $jobApplication->withlinkedin?'Yes':'No'}}</td>
            </tr>

            <tr>
                <td>Send Cover Letter</td>
                <td>{{ $jobApplication->withcoverletter?'Yes':'No'}}</td>
            </tr>
        </table>
    </section>
</div>
