<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brochure;
use App\Job;
use App\Website;
use App\Leaflet;
use App\Banner;
use App\Corporate;
use App\Logo;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\Image as ImageModel;
use Image;
use File;
use Session;
use Validator;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function jobRequest(){

        return view('jobRequest');

    }

    public function getForm(Request $r){

        $users=User::select('user_id','username')->get();

        if ($r->option =='brochure'){

            return view('form.brochure')->with('users',$users);
        }

        else if($r->option =='website'){

            return view('form.website')->with('users',$users);
        }

        else if($r->option =='leaflet'){

            return view('form.leaflet')->with('users',$users);
        }

        else if($r->option =='banner'){

            return view('form.banner')->with('users',$users);
        }

        else if($r->option =='corporate'){
            return view('form.corporate')->with('users',$users);
        }

        else if($r->option =='logo'){

            return view('form.logo')->with('users',$users);
        }

        else if($r->option =='vector'){

            return view('form.vector')->with('users',$users);
        }


    }

    public function storeBrochure(Request $r){

        $job=new Job;
        $job->companyName=$r->companyName;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;

        $job->reference=$r->References;
        $job->businessArea=$r->BusinessArea;
        $job->category='brochure';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->comments=$r->BrochureType;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->userId=Auth::user()->user_id;
            $job->potential=1;
        }
        $job->save();

        $brochure=new Brochure;
        $brochure->jobId=$job->jobId;
        $brochure->size=$r->BrochureSize;
        $brochure->page=$r->BrochurePages;
        $brochure->themeColor=$r->ThemeColor;
        $brochure->tagline=$r->TaglineSlogan;
        $brochure->mainFocus=$r->MainFocus;
        $brochure->tText=$r->TextSoftFile;
        $brochure->socialMediaUrl=$r->SocialMediaURLs;
        $brochure->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }

        Session::flash('message', 'Brochure Added Successfully');
        return back();
    }

    public function storeWebsite(Request $r){
        $job=new Job;
        $job->companyName=$r->companyName;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;
        $job->reference=$r->ReferenceWeb;
        $job->comments=$r->OtherComments;
        $job->category='website';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->userId=$r->userId;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->userId=Auth::user()->user_id;
            $job->potential=1;
        }
        $job->save();

        $website=new Website;
        $website->jobId=$job->jobId;
        $website->websiteType=$r->WebsiteType;
        $website->numberOfPage=$r->NumberOfPages;
        $website->portfolioPage=$r->portfolioPage;
        $website->contentManagementType=$r->ContentManage;
        $website->socialMediaUrl=$r->MediaURLs;
        $website->existingWebsite=$r->ExistingWeb;
        $website->businessDetails=$r->BusinessDetail;
        $website->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }


        Session::flash('message', 'Website Added Successfully');
        return back();


    }

    public function storeLeaflet(Request $r){
        $job=new Job;
        $job->companyName=$r->companyName;
        $job->reference=$r->references;
        $job->email=$r->EmailAddress;

        $job->phoneNumber=$r->PhoneNumber;
        $job->address=$r->CompanyAddress;
        $job->companyWebsiteUrl=$r->CompanyWebsite;
        $job->businessArea=$r->BusinessArea;
        $job->category='leaflet';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->userId=$r->userId;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->potential=1;
            $job->userId=Auth::user()->user_id;
        }
        $job->save();

        $leaflet=new Leaflet;
        $leaflet->jobId=$job->jobId;
        $leaflet->leafletSize=$r->LeafletSize;
        $leaflet->mainFocus=$r->mainFocus;
        $leaflet->tagline=$r->TaglineSlogan;
        $leaflet->tText=$r->TextSoftFile;
        $leaflet->mediaUrl=$r->companyMediaUrlAddress;
        $leaflet->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }




        Session::flash('message', 'Leaflet Added Successfully');
        return back();

    }
    public function storeBanner(Request $r){



        $job=new Job;
        $job->companyName=$r->companyName;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;
        $job->reference=$r->references;
        $job->comments=$r->Comments;
        $job->businessArea=$r->BusinessArea;
        $job->category='banner';
        $job->EstimatedTime=$r->EstimatedTime;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->potential=1;
            $job->userId=Auth::user()->user_id;
        }
        $job->save();

        $banner=new Banner;
        $banner->jobId= $job->jobId;
        $banner->bannerSize= $r->bannerSize;
        $banner->headLine= $r->Headline;
        $banner->bannerType= $r->BannerType;
        $banner->tText= $r->TextSoftFile;
        $banner->save();


        // Multiple image upload

        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }


        Session::flash('message', 'Banner Added Successfully');
        return back();


    }

    public function storeCorporate(Request $r){

        $job=new Job;
        $job->companyName=$r->companyName;

        $job->email=$r->CompanyEmail;
        $job->phoneNumber=$r->PhoneNumber;
        $job->address=$r->CompanyAddress;
        $job->businessArea=$r->BusinessArea;
        $job->category='corporate';
        $job->EstimatedTime=$r->EstimatedTime;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->potential=1;
            $job->userId=Auth::user()->user_id;
        }
        $job->save();


        $corporate=new Corporate;
        $corporate->jobId=$job->jobId;
        $corporate->themeColor=$r->ThemeColor;
        $corporate->tagline=$r->TaglineSlogan;
        $corporate->nameAndDesignation=$r->VisitingCards;
        $corporate->qrCode=$r->QRcode;
        $corporate->ciType=$r->CITypes;
        $corporate->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }


        Session::flash('message', 'Corporate-CI Added Successfully');
        return back();



    }

    public function storeLogo(Request $r){

        $job=new Job;
        $job->companyName=$r->companyName;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;
        $job->comments=$r->OtherComments;
        $job->category='logo';
        $job->EstimatedTime=$r->EstimatedTime;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->potential=1;
            $job->userId=Auth::user()->user_id;
        }
        $job->save();

        $logo = new Logo;
        $logo->jobId=$job->jobId;
        $logo->logoShape=$r->LogoShape;
        $logo->preferedColor=$r->PreferredColour;
        $logo->businessType=$r->BusinessType;
        $logo->save();

        Session::flash('message', 'Logo Added Successfully');
        return back();
    }
    public function storeVector(Request $r){
        $job=new Job;
        $job->companyName=$r->companyName;
        $job->email=$r->email;
        $job->phoneNumber=$r->phoneNumber;
        $job->comments= $r->Comments;
        $job->category='vector';
        $job->EstimatedTime=$r->EstimatedTime;
        if(Auth::user()->user_type == USERTYPE[2]){
            $job->clientId=Auth::user()->user_id;
        }
        else{
            $job->potential=1;
            $job->userId=Auth::user()->user_id;
        }
        $job->save();


        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists('../'.$todayPath)){
                mkdir('../'.$todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists('../'.$pathName)){
                mkdir('../'.$pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save('../'.$location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }



        Session::flash('message', 'Vector Added Successfully');
        return back();
    }

}
