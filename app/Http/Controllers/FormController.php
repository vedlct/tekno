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
use Illuminate\Support\Facades\Mail;

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

        $job=new Job;
        $job->companyName=$r->companyName;
        $job->reference=$r->References;
        $job->businessArea=$r->BusinessArea;
        $job->category='brochure';
        $job->EstimatedTime=$r->EstimatedTime;
        $job->comments=$r->BrochureType;
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

        $data=array('name'=>$r->companyName,
            'size'=> $r->BrochureSize,
            'pages'=> $r->BrochurePages,
            'businessArea'=>$r->BusinessArea,
            'themeColor'=> $r->ThemeColor,
            'tagline'=> $r->TaglineSlogan,
            'description'=> $r->BrochureType,
            'focus'=>$r->MainFocus,
            'TText'=>$r->TextSoftFile,
            'mediaUrl'=>$r->SocialMediaURLs,
            'reference'=>$r->References,
            'estimatedTime'=>$r->EstimatedTime,

        );
        Mail::send('email.brochure',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });


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
        $website->businessDetails=$r->BusinessDetail;
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


        $data=array('name'=>$r->companyName,
            'type'=> $r->WebsiteType,
            'NumberOfPages'=> $r->NumberOfPages,
            'portfolioPage'=> $r->portfolioPage,
            'ContentManage'=> $r->ContentManage,
            'comment'=> $r->OtherComments,
            'businessDetail'=> $r->BusinessDetail,
            'EstimatedTime'=>$r->EstimatedTime,
            'ExistingWeb'=>$r->ExistingWeb,
            'mediaUrl'=>$r->MediaURLs,
            'reference'=>$r->ReferenceWeb
        );
        Mail::send('email.website',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });


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
        $leaflet->mediaUrl=$r->companyMediaUrlAddress;
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


        $data=array('name'=>$r->companyName,
            'size'=> $r->LeafletSize,
            'website'=> $r->CompanyWebsite,
            'tagline'=> $r->TaglineSlogan,
            'BusinessArea'=> $r->BusinessArea,
            'email'=> $r->EmailAddress,
            'number'=> $r->PhoneNumber,
            'address'=> $r->CompanyAddress,
            'focus'=> $r->mainFocus,
            'EstimatedTime'=>$r->EstimatedTime,
            'TextSoftFile'=>$r->TextSoftFile,
            'mediaUrl'=>$r->companyMediaUrlAddress,
            'reference'=>$r->references
        );
        Mail::send('email.leaflet',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });


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

        $data=array('name'=>$r->companyName,
            'size'=> $r->bannerSize,
            'Headline'=> $r->Headline,
            'BannerType'=> $r->BannerType,
            'BusinessArea'=> $r->BusinessArea,
            'comment'=> $r->Comments,
            'EstimatedTime'=>$r->EstimatedTime,
            'TextSoftFile'=>$r->TextSoftFile,
            'reference'=>$r->references
        );
        Mail::send('email.banner',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });

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

        $data=array('name'=>$r->companyName,
            'mail'=>$r->CompanyEmail,
            'BusinessArea'=>$r->BusinessArea,
            'themeColor'=>$r->ThemeColor,
            'number'=>$r->PhoneNumber,
            'address'=>$r->CompanyAddress,
            'email'=>$r->CompanyEmail,
            'EstimatedTime'=>$r->EstimatedTime,
            'designation'=>$r->VisitingCards,
            'qr'=>$r->QRcode,
            'ciType'=>$r->CITypes,
        );

        Mail::send('email.corporate',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });

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

        $data=array('name'=>$r->companyName,
            'comment'=> $r->OtherComments,
            'EstimatedTime'=>$r->EstimatedTime,
            'logoShape'=>$r->LogoShape,
            'preferedColor'=>$r->PreferredColour,
            'businessType'=>$r->BusinessType
            );
        Mail::send('email.logo',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });

        Session::flash('message', 'Logo Added Successfully');
        return back();
    }
    public function storeVector(Request $r){
        $job=new Job;
        $job->companyName=$r->companyName;
        $job->comments= $r->Comments;
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
        $data=array('name'=>$r->companyName, 'comment'=> $r->Comments);

        Mail::send('email.vector',$data, function($message)
        {
            $message->to(EMAIL, 'demo client')->subject('New Job Offer!');
        });



        Session::flash('message', 'Vector Added Successfully');
        return back();
    }

}
