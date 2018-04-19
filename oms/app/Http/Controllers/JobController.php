<?php

namespace App\Http\Controllers;

use App\Banner;
use App\User;
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
use Yajra\Datatables\Datatables;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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


    public function allJob(){

        $users=User::select('username','user_id')
            ->get();



        return view('job.all')->with('users',$users);
    }

    public function jobDate(Request $r){
        $jobs=Job::select('jobId','companyName','category','job.email','comments','status','job.userId','username','created_at')->leftJoin('user','user.user_id','job.userId');

        if ($user=$r->user){
            $jobs->where('job.userId',$user);
        }
        if ($status=$r->status){
            $jobs->where('job.status',$status);
        }


        $jobs=$jobs->orderBy('created_at','desc')->get();


        return Datatables::of($jobs)->make(true);



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

//        return $job;

        $job->save();




        if($job->category =='brochure'){
            $brochure=Brochure::findOrFail($r->brochureId);
            $brochure->size=$r->size;
            $brochure->page=$r->page;
            $brochure->themeColor=$r->themeColor;
            $brochure->tagline=$r->tagline;
            $brochure->mainFocus=$r->mainFocus;
            $brochure->tText=$r->tText;
            $brochure->socialMediaUrl=$r->socialMediaUrl;

            $brochure->save();

        }

        elseIf($job->category =='logo'){
            $logo=Logo::findOrFail($r->logoId);
            $logo->logoShape=$r->logoShape;
            $logo->preferedColor=$r->preferedColor;
            $logo->businessType=$r->businessType;
            $logo->save();

        }

        elseIf($job->category =='banner'){
            $banner=Banner::findOrFail($r->bannerId);
            $banner->bannerSize=$r->bannerSize;
            $banner->headLine=$r->headLine;
            $banner->bannerType=$r->bannerType;
            $banner->tText=$r->tText;
            $banner->save();


        }
        elseIf($job->category =='corporate'){
            $corporate=Corporate::findOrFail($r->corporateId);
            $corporate->themeColor=$r->themeColor;
            $corporate->tagline=$r->tagline;
            $corporate->nameAndDesignation=$r->nameAndDesignation;
            $corporate->qrCode=$r->qrCode;
            $corporate->ciType=$r->ciType;

            $corporate->save();

        }

        elseIf($job->category =='leaflet'){
            $leaflet=Leaflet::findOrFail($r->leafletId);
            $leaflet->leafletSize=$r->leafletSize;
            $leaflet->mainFocus=$r->mainFocus;
            $leaflet->tagline=$r->tagline;
            $leaflet->tText=$r->tText;
            $leaflet->mediaUrl=$r->mediaUrl;

            $leaflet->save();


        }

        elseIf($job->category =='website'){
            $website=Website::findOrFail($r->websiteId);
            $website->websiteType=$r->websiteType;
            $website->numberOfPage=$r->numberOfPage;
            $website->portfolioPage=$r->portfolioPage;
            $website->contentManagementType=$r->contentManagementType;
            $website->socialMediaUrl=$r->socialMediaUrl;
            $website->existingWebsite=$r->existingWebsite;
            $website->businessDetails=$r->businessDetails;
            $website->save();


        }


        return back();

    }


}
