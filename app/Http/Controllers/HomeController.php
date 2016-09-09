<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth as Auth;

use App\JobApplication as JobApplication;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['about','contact']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('app/view');
    }

    /**
     * Show the form to start tracking
     * @return Response
    */
    public function start(){
        return view('member.application.new');
    }

    /**
     * Saves the application object to Database
     */
     public function store(Request $request, jobApplication $jobApplication){
         //validate the input first , will redirect to same page on fail

        $this->validate($request, [
            'position'        => 'required | max:255',
            'applied_on'      => 'required | date | before:tomorrow',
            'company'         => 'required | max:255',
            'location'        => 'required | max:255',
            'joblink'         => 'required | url | max:255',
            'jobsite'         => 'required | max:255',
            'withresume'      => 'required | in:0,1',
            'withlinkedin'    => 'required | in:0,1',
            'withcoverletter' => 'required | in:0,1',
        ]);
        if(!$jobApplication->id){
            $jobApplication = new JobApplication;
        }
    
        $jobApplication->position = $request->position;
        $jobApplication->applied_on = $request->applied_on;
        $jobApplication->company = $request->company;
        $jobApplication->location = $request->location;
        $jobApplication->joblink = $request->joblink;
        $jobApplication->jobsite = $request->jobsite;
        $jobApplication->withresume = $request->withresume;
        $jobApplication->withlinkedin = $request->withlinkedin;
        $jobApplication->withcoverletter = $request->withcoverletter;
        $jobApplication->user_id = Auth::user()->id;

        $jobApplication->save();

        return redirect('app/view');

     }

     /** Display edit form
      * @param Applicaton Object Based on Id
      * @route /app/edit/{id}
      */
      public function edit(JobApplication $jobApplication){
          return view('member.application.edit',compact('jobApplication'));
      }


     /** List all or single Applicaton
      * @param Application Object based on Id
      */
    public function view(){
        //call helper method of this controller itself
        $user_id = $this->getUserId();
        $jobApplication = new JobApplication;
        $jobApplication = $jobApplication->where('user_id','=', $user_id)->get();
        return view('member.application.list',compact('jobApplication'));
    }

    public function viewSingle($id){
        //call helper method of this controller itself
        if(is_numeric($id)){
            $user_id = $this->getUserId();
            $jobApplication = new JobApplication;
            $jobApplication = $jobApplication->where('user_id','=', $user_id)->find($id);
            return view('member.application.single',compact('jobApplication'));
        }
        return back();


    }
    /**
     * Renders contact page
     * @return Response
     */
     public function contact(){
         return view('public.contact');
     }

     /**
      * Renders about page
      * @return Response
      */
      public function about(){
          return view('public.about');
      }

      /**
       * Gives loggedin user id
       * @return $user_id
       */
      private function getUserId(){
         return Auth::user()->id;
      }
}
