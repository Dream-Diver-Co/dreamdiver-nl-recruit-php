<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeService;
use App\Models\Project;
use App\Models\Faq;

class FrontendController extends Controller
{
    public function index() {
        $services = HomeService::where('status', 'on')->get();
        return view('frontend.index', compact('services'));
    }

    public function contact() {
        return view('frontend.page.contact');
    }

    public function about() {
        return view('frontend.page.about');
    }

    public function service() {
        return view('frontend.page.service');
    }

    public function portfolio() {
        $projects = Project::where('status', 'on')->get();
        return view('frontend.page.portfolio', compact('projects'));
    }

    public function ticket() {
        return view('frontend.page.ticket');
    }

    public function faq() {
        $faqs = Faq::where('status', 'on')->get();
        return view('frontend.page.faq', compact('faqs'));
    }

    public function career() {
        return view('frontend.page.career');
    }

    public function review() {
        return view('frontend.page.review');
    }

    public function softwareDevelopment() {
        return view('frontend.page.software_development');
    }

    public function mobileApp() {
        return view('frontend.page.mobile_app');
    }

    public function softwareService() {
        return view('frontend.page.software_service');
    }

    public function webDesign() {
        return view('frontend.page.web_design');
    }

    public function seo() {
        return view('frontend.page.seo');
    }

    public function marketing() {
        return view('frontend.page.marketing');
    }

    public function login() {
        return view('frontend.page.login');
    }

    public function registrar(){
        return view('frontend.page.registrar');
    }

    public function aeon() {

        return view('frontend.page.aeon');

    }

    public function pos() {
        return view('frontend.page.pos');
    }

    public function misi() {
        return view('frontend.page.misi');
    }

    public function shobKhobor() {
        return view('frontend.page.shob_khobor');
    }

    public function fnfStay() {
        return view('frontend.page.fnf_stay');
    }

    public function deWas() {
        return view('frontend.page.de_was');
    }

    public function deShop() {
        return view('frontend.page.de_shop');
    }

    public function bookChange() {
        return view('frontend.page.book_change');
    }

    public function foodyMoody() {
        return view('frontend.page.foody_moody');
    }

    public function trusted() {
        return view('frontend.page.trusted');
    }

    public function reasonable() {
        return view('frontend.page.reasonable');
    }

    public function twonty_four(){
        return view('frontend.page.twonty_four');
    }



}
