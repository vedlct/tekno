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
use App\Image;
use App\Notification;
use Illuminate\Support\Facades\Auth;
use stdClass;

class JobController extends Controller
{
    public function home(){
        $pending=Job::where('status','pending')->count();
        $going=Job::where('status','on going')->count();

//        $notification=Notification::where('userId',Auth::user()->user_id)
//            ->where('seen',0)->count();
//
//        return $notification;



        return view('Home')
            ->with('pending',$pending)
            ->with('going',$going);
    }

    public function changestatus(Request $r){
        $job=Job::findOrFail($r->id);
        $job->status=$r->status;
        $job->save();

        return Response('true');

    }


    public function newjobrequest()
    {

//        $type = session('user-type');
//        if ($type == 'Admin') {

//        $id=session('user-id');
            $newjobrequest = (new Admin)->newjobrequest();
            return view('admin.newjobrequest', compact('newjobrequest'));
//        }
//        else {
//
//            return redirect(url('/'));
//        }
    }
    public function getJob($id){
        $job=Job::findOrFail($id);

        if($job->category=='brochure'){
            $jobCat=Brochure::leftJoin('job','brochure.jobId','job.jobId')
                                    ->where('brochure.jobId',$id)->first();

            $images=Image::where('jobId',$id)->get();
            return view('job.brochure')
                    ->with('images',$images)
                    ->with('jobCat',$jobCat)
                    ->with('job',$job);


        }
        elseif($job->category=='website'){

            $jobCat=Website::leftJoin('job','website.jobId','job.jobId')
                ->where('website.jobId',$id)->first();
            $images=Image::where('jobId',$id)->get();

            return view('job.website')
                ->with('images',$images)
                ->with('jobCat',$jobCat)
                ->with('job',$job);

        }
        elseif($job->category=='leaflet'){
            $jobCat=Leaflet::leftJoin('job','leaflet.jobId','job.jobId')
                ->where('leaflet.jobId',$id)
                ->first();

            $images=Image::where('jobId',$id)->get();

            return view('job.leaflet')
                ->with('images',$images)
                ->with('jobCat',$jobCat)
                ->with('job',$job);

        }
        elseif($job->category=='banner'){
            $jobCat=Banner::leftJoin('job','banner.jobId','job.jobId')
                ->where('banner.jobId',$id)->first();

            $images=Image::where('jobId',$id)->get();

            return view('job.banner')
                ->with('images',$images)
                ->with('jobCat',$jobCat)
                ->with('job',$job);
        }
        elseif($job->category=='corporate'){
            $jobCat=Corporate::leftJoin('job','corporate-cl.jobId','job.jobId')
                ->where('corporate-cl.jobId',$id)
                ->first();

            $images=Image::where('jobId',$id)->get();

            return view('job.corporate')
                ->with('images',$images)
                ->with('jobCat',$jobCat)
                ->with('job',$job);

        }
        elseif($job->category=='logo'){
            $jobCat=Logo::leftJoin('job','logo.jobId','job.jobId')
                ->where('logo.jobId',$id)
                ->first();


            return view('job.logo')
                ->with('jobCat',$jobCat)
                ->with('job',$job);

        }
        elseif($job->category=='vector'){
            $jobCat=$job;
            $images=Image::where('jobId',$id)->get();
            return view('job.vector')
                ->with('images',$images)
                ->with('jobCat',$jobCat);

        }

        return view('job.get');

    }


    public function editJob(Request $r){
        $job=Job::findOrFail($r->id);
        $job->companyName=$r->companyName;
        $job->reference=$r->reference;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;
        $job->address=$r->address;
        $job->comments=$r->comments;
        $job->companyWebsiteUrl=$r->companyWebsiteUrl;
        $job->businessArea=$r->businessArea;
        $job->EstimatedTime=$r->EstimatedTime;

//        $job->save();




        if($job->category =='brochure'){
            $brochure=Brochure::findOrFail($r->brochureId);
            $brochure->size=$r->size;
            $brochure->page=$r->page;



            return $brochure;

        }


        return $job;

    }


}
