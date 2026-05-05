<?php
namespace App\Http\Controllers;
class MainController extends Controller
{
    public function index(){
        // return view('welcome', ["page" => "Dashbord"]);
        return view('pages.dashbord', ["page" => "Dashbord"]);
    }
    public function Dashbord()
    {
    return view('pages.dashbord', ["page" => "Dashbord"]);
    }
    public function Analytic(){
    return view('pages.analytics', ["page" => "Analytics"]);
    }
    public function ecom(){
    return view('pages.Ecomerce', ["page" => "Ecomerce"]);
    }
    public function crm(){
    return view('pages.CRM', ["page" => "CRM"]);
    }
    public function Saas(){
    return view('pages.Saas', ["page" => "Saas"]);
    }
    public function charts(){
    return view('pages.charts', ["page" => "Charts"]);
    }
    public function order(){
    return view('pages.order', ["page" => "Order"]);
    }
    // public function all(){
    // return view ('pages.allmails', ["page" => "allmails"]);
    // }
    public function products(){
    return view('pages.products', ["page" => "products"]);
    }
    public function customers(){
    return view('pages.customer', ["page" => "customer"]);
    }
    public function invoices(){
    return view('pages.invoice', ["page" => "invoice"]);
    }
    public function mail(){
    return view('pages.mails',["page"=> "mails"]);
    }
    public function chats(){
    return view('pages.chat',["page"=> "chat"]);
    }
    public function file(){
    return view('pages.files',["page"=>"files"]);
    }
    public function kanban(){
    return view ('pages.kanban',["page"=>"kanban"]);
    }
    public function calenders(){
    return view('pages.calender',["page"=>"calender"]);
    }
    public function wizards(){
    return view('pages.wizard',["page"=>"wizard"]);
    }
    public function forms(){
    return view ('pages.form',["page"=>"form"]);
    }
    public function roadmaps(){
    return view ('pages.roadmap',["page"=>"roadmap"]);
    }
    public function features(){
        return view('welcome',["page"=>"feature"]);
    }
    public function deployments(){
        return view('welcome',["page"=>"deployment"]);
    }
    public function activities(){
        return view('welcome',["page"=>"activity"]);
    }
     public function feedbacks(){
        return view('welcome',["page"=>"feedback"]);
    }
}
