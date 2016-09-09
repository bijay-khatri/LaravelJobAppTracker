<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\JobApplication;
use App\JobResponse;
class ResponseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function store(Request $request, JobApplication $jobApplication){
        if($jobApplication){

            $this->validate($request, [
                'name'        => 'required | max:50',
                'response_on' => 'required | date | before:tomorrow',
                'description' => 'required',
            ]);

            $jobResponse = new JobResponse;

            $jobResponse->name = $request->name;
            $jobResponse->response_on = $request->response_on;
            $jobResponse->description = $request->description;


            $jobResponse->job_application_id = $jobApplication->id;

            $jobResponse->save();

            return redirect("app/view/{$jobApplication->id}");
        }
        return back();

    }
}
