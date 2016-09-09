<tr>
    <td>1</td>
    <td><a href={{url("app/view/{$job->id}")}}>{{$job->position}}</a></td>
    <td>{{$job->company}}</td>
    <td>{{$job->location}}</td>
    <td>{{$job->applied_on}}</td>
    <td>Unknown</td>
    <td><a href={{url("app/view/{$job->id}")}}><i class="fa fa-lg fa-angle-double-right" aria-hidden="true"></i></a>
        &nbsp;&nbsp;
    <a href={{url("app/edit/{$job->id}")}}><i class="fa fa-lg fa-pencil-square-o" aria-hidden="true"></i></a></td>
</tr>
