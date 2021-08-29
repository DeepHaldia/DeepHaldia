<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class WebController extends Controller
{
    // Home Page Function....
    public function WebHome(){
        // $slider = DB::table('sliders')->orderBy('id','desc')->limit(5)->get();
        // $Partner_logo = DB::table('partner')->orderBy('id','desc')->limit(5)->get();
        // $banner_image = DB::table('banner')->orderBy('id','desc')->limit(2)->get();
        // $banner_image_one = DB::table('banner')->first();
        // $products_list = DB::table('products')->orderBy('id','desc')->limit(10)->get();
        // $populer = DB::table('products')->inRandomOrder()->limit(4)->get();
        // return view('website.home', compact('slider','Partner_logo','banner_image','banner_image_one','products_list','populer'));
        return view('website.home');
    }

    // About Page Function...
    public function WebRates(){
        // $steam_image = DB::table('team')->limit(3)->get();
        // $steam_founder = DB::table('team')->orderBy('id','desc')->first();
        // $testimonial = DB::table('testimonial')->limit(5)->get();
        return view('website.rates');
    }


    // Dealers Page Function...
    public function WebFleet(){
        return view('website.fleet');
    }

    // Musted_Oil Page Function...
    public function WebFaq(){
        // $products_Mustard = DB::table('products')->where('category_name','Mustard Oil')->orderBy('id','desc')->limit(30)->get();
        return view('website.faq');
    }
    
    // Whole WholeSpice Page Function...
    public function WebTestimonial(){
        // $products_Mustard = DB::table('products')->where('category_name','Whole Spices')->orderBy('id','desc')->limit(30)->get();
        return view('website.testimonial');
    }

    
    // Whole Powder Form Page Function...
    public function reserveOnline(){
        // $products_Mustard = DB::table('products')->where('category_name','Powder Form')->orderBy('id','desc')->limit(30)->get();
        return view('website.reserve_online');
    }

    // Contact Page Function...
    public function WebContact(){
        // $Contact = DB::table('contact')->first();
        return view('website.contact');
    }

    // Mail send
    public function sendmail(){
        $data = ["name" => "Bilal", "data"=>"Hello Bilal"];
        $user['to'] = "bilalmalik1561@gmail.com";
        Mail::send("mail", $data, function($message) use ($user){
            $message->to($user['to']);
            $message->subject("Hello User");
        });
    }

    public function emailsendfun(Request $request){

        $sendmail = DB::table('contact-list')
                    ->insert([
                        "name" => $request->first_name,
                        "number" => $request->phone,
                        "email"  => $request->email_address,
                        "subject" => $request->contact_subject,
                        "message"  => $request->message,
        ]);
        if ($sendmail) {
            \Mail::send('mail',[
                'name' => $request->first_name,
                'email' => $request->email_address,
                'subject' => $request->contact_subject,
                'mobile' => $request->phone,
                'user_message' => $request->message,
            ], function($message) use ($request){
                $message->from($request->email_address);
                $message->to('info@key2healthfoods.com');
            });
            return "Thankyou for contact us";
    }
    
}

     public function emailsenddealer(Request $request){

    $sendmail = DB::table('dealers')
                ->insert([
                    "name" => $request->first_name,
                    "mobile" => $request->phone,
                    "email"  => $request->email_address,
                    "dealer" => $request->contact_subject,
                    "message"  => $request->message,
    ]);
    if ($sendmail) {
        \Mail::send('mail',[
            'name' => $request->first_name,
            'email' => $request->email_address,
            'subject' => $request->contact_subject,
            'mobile' => $request->phone,
            'user_message' => $request->message,
        ], function($message) use ($request){
            $message->from($request->email_address);
            $message->to('info@key2healthfoods.com');
        });
        return "Thankyou for connecting us! we will contact you";
}

}

}
