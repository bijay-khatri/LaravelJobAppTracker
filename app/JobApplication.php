<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable =
   ['position','applied_on','company','location','jobsite',
   'joblink','withresume','withlinkedin','withcoverletter'];



    public function jobResponses(){
        return $this->hasMany(JobResponse::class);
    }
    public function jobType($type){
        switch($type){
            case 'fulltime':
                return "Full Time";
                break;
            case 'parttime':
                return "Part Time";
                break;
            case 'contract':
                return "Contract";
                break;
            case 'contractohire':
                return "Contract To Hire";
                break;
        }
    }
}
