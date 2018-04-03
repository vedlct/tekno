<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Job;
use App\Brochure;
use App\Logo;
use App\Leaflet;
use App\Corporate;

class JobController extends Controller
{

    public function newjobrequest()
    {

        $type = session('user-type');
        if ($type == 'Admin') {

//        $id=session('user-id');
            $newjobrequest = (new Admin)->newjobrequest();


            return view('admin.newjobrequest', compact('newjobrequest'));
        } else {

            return redirect(url('/'));
        }
    }
    public function getJob($id){
        $job=Job::findOrFail($id);

        if($job->category=='brochure'){
            $jobCat=Brochure::leftJoin('job','brochure.jobId','job.jobId')
                                    ->where('brochure.jobId',$id)->first();

            return view('job.brochure')
                    ->with('jobCat',$jobCat);


        }
        elseif($job->category=='website'){

            $jobCat=Website::leftJoin('job','website.jobId','job.jobId')
                ->where('website.jobId',$id)->first();


            return view('job.website')
                ->with('jobCat',$jobCat);

        }
        elseif($job->category=='leaflet'){
            $jobCat=Leaflet::leftJoin('job','leaflet.jobId','job.jobId')
                ->where('leaflet.jobId',$id)
                ->first();

            return view('job.leaflet')
                ->with('jobCat',$jobCat);

        }
        elseif($job->category=='banner'){
            $jobCat=Banner::leftJoin('job','banner.jobId','job.jobId')
                ->where('banner.jobId',$id)->first();

            return view('job.banner')
                ->with('jobCat',$jobCat);
        }
        elseif($job->category=='corporate'){
            $jobCat=Corporate::leftJoin('job','corporate-cl.jobId','job.jobId')
                ->where('corporate-cl.jobId',$id)
                ->first();

            return view('job.corporate')
                ->with('jobCat',$jobCat);

        }
        elseif($job->category=='logo'){
            $jobCat=Logo::leftJoin('job','logo.jobId','job.jobId')
                ->where('logo.jobId',$id)
                ->first();


            return view('job.logo')
                ->with('jobCat',$jobCat);

        }
        elseif($job->category=='vector'){
            $jobCat=$job;
            return view('job.vector')
                ->with('jobCat',$jobCat);;

        }

        return view('job.get');

    }

}
