<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobResponse extends Model
{
    protected $fillable = ['name','response_on','description'];

    public function jobApplication(){
        return $this->belongsTo(JobApplication::class);
    }
}
