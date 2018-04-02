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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\Image as ImageModel;
use Image;
use File;
use Session;
use Validator;

class FormController extends Controller
{
    public function getForm(Request $r){




        if ($r->option =='brochure'){

            return view('form.brochure');
        }

        else if($r->option =='website'){

            return view('form.website');
        }

        else if($r->option =='leaflet'){

            return view('form.leaflet');
        }

        else if($r->option =='banner'){

            return view('form.banner');
        }

        else if($r->option =='corporate'){
            return view('form.corporate');
        }

        else if($r->option =='logo'){

            return view('form.logo');
        }

        else if($r->option =='vector'){

            return view('form.vector');
        }


    }

    public function storeBrochure(Request $r){



//
//        $e=Validator::make($r->all(), [
//            'companyName' => 'max:2',
//
//        ])->validate();
//
//        if ($e->fails()) {
////            return view('form.website')
////                ->with('error',$e)
////                ->with('cat','brochure');
//        }


        $job=new Job;
        $job->companyName=$r->companyName;
        $job->reference=$r->References;
        $job->businessArea=$r->BusinessArea;
        $job->category='brochure';
        $job->EstimatedTime=$r->EstimatedTime;
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
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
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
        $job->reference=$r->ReferenceWeb;
        $job->comments=$r->OtherComments;
        $job->category='website';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->save();

        $website=new Website;
        $website->jobId=$job->jobId;
        $website->websiteType=$r->WebsiteType;
        $website->numberOfPage=$r->NumberOfPages;
        $website->portfolioPage=$r->portfolioPage;
        $website->contentManagementType=$r->ContentManage;
        $website->socialMediaUrl=$r->MediaURLs;
        $website->existingWebsite=$r->ExistingWeb;
        $website->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
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
        $job->save();

        $leaflet=new Leaflet;
        $leaflet->jobId=$job->jobId;
        $leaflet->leafletSize=$r->LeafletSize;
        $leaflet->mainFocus=$r->mainFocus;
        $leaflet->tagline=$r->TaglineSlogan;
        $leaflet->tText=$r->TextSoftFile;
        $leaflet->save();

        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
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
        $job->reference=$r->references;
        $job->comments=$r->Comments;
        $job->businessArea=$r->BusinessArea;
        $job->category='banner';
        $job->EstimatedTime=$r->EstimatedTime;
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
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
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
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
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
        $job->comments=$r->OtherComments;
        $job->category='logo';
        $job->EstimatedTime=$r->EstimatedTime;
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
        $job->comments=$r->Comments;
        $job->category='vector';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->save();


        // Multiple image upload
        if($r->hasFile('AttachLogo')){
            $today =date("Y-m-d");
            $todayPath='public/teknovisual/Client_File/'.$today;
            if (!file_exists($todayPath)){
                mkdir($todayPath, 0777, true);
            }
            $pathName=$todayPath.'/'.$r->companyName;
            if (!file_exists($pathName)){
                mkdir($pathName, 0777, true);
            }
            $images = $r->file('AttachLogo');
            foreach ($images as $img) {
                $filename = $img->getClientOriginalName();
                $location = $pathName.'/'. $filename;
                Image::make($img)->save($location);
                $picture=new ImageModel;
                $picture->jobId=$job->jobId;
                $picture->path=$location;
                $picture->save();
            }
        }


        Session::flash('message', 'Logo Added Successfully');
        return back();
    }

}
