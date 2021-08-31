<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /******************************/
    /****** Start Client Part *****/
    /******************************/

    // Admin Clients Function
    public function client_list(Request $request){
        $Clients_data = DB::table('clients')->orderBy('id','desc')->paginate(10);
        return view('admin.clients.client_list',compact('Clients_data'));
    }
    public function client_delete(Request $request, $id){
        DB::table('clients')->where('id', $id)->delete();
        return redirect('admin/client_list');
    }
    public function clients_add(Request $request){
        return view('admin.clients.clients_add');
    }
    public function client_add_insert(Request $request){
       $data_insert = DB::table('clients')->insert([
        "first_name"     => $request->firstname,
        "last_name"      => $request->lastname, 
        "address"        => $request->address, 
        "address2"       => $request->address2, 
        "city"           => $request->city, 
        "state"          => $request->state, 
        "zip"            => $request->zipcode, 
        "country"        => $request->country, 
        "telephone"      => $request->telephone, 
        "telephone2"     => $request->phone, 
        "cellphone"      => $request->mobile, 
        "email"          => $request->email,
        "password"       => md5($request->password)
       ]);
       if($data_insert){
           return redirect('admin/client_list');
       }
    }
    public function clients_edit(Request $request,$id){
        $Clients_edit  = DB::table('clients')->where('id',$id)->first();
        return view('admin.clients.clients_edit',compact('Clients_edit'));
    }    
    public function Clients_Update(Request $request){
        $Clients_update = DB::table('clients')->where('id', $request->id)->update([
            "first_name"    => $request->firstname,
            "last_name"     => $request->lastname, 
            "address"       => $request->address, 
            "address2"      => $request->address2, 
            "city"          => $request->city, 
            "state"         => $request->state, 
            "zip"           => $request->zipcode, 
            "country"       => $request->country, 
            "telephone"     => $request->telephone, 
            "telephone2"    => $request->phone, 
            "cellphone"     => $request->mobile, 
            "email"         => $request->email,
            "password"      => md5($request->password)
        ]);
        if($Clients_update){
            return redirect('admin/client_list');
        }
    }
    public function clients_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('clients')->where('id', $del)->delete();
        }
            return redirect('admin/client_list');
    }

    /***********************************/
    /****** Start Reservation Part *****/
    /***********************************/

    // Admin Reservation Function
    public function reservation_list(Request $request){
        $reservation_list = DB::table('reservation_lis')->orderBy('id','desc')->paginate(100);
        return view('admin.reservation.reservation_list',compact('reservation_list'));
    }
    public function reservation_list_add(Request $request){
        return view('admin.reservation.reservation_list_add');
    }
    
    // Admin Reservation Status Function
    public function reservation_status(Request $request){
        $Reservation_Status = DB::table('reservation_status')->orderBy('id','desc')->paginate(10);
        return view('admin.reservation.reservation_status',compact('Reservation_Status'));
    }
    public function reservation_delete(Request $request, $id){
        DB::table('reservation_status')->where('id', $id)->delete();
        return redirect('admin/reservation_status');
    }
    public function reservation_add_status(Request $request){
        return view('admin.reservation.reservation_add_status');
    }
    public function reservation_status_insert(Request $request){
        $reservation_insert = DB::table('reservation_status')->insert([
         "name"        => $request->status_name,
         "message"     => $request->message, 
        ]);
        if($reservation_insert){
            return redirect('admin/reservation_status');
        }
    }
    public function reservation_status_edit(Request $request,$id){
        $reservation_status_edit  = DB::table('reservation_status')->where('id',$id)->first();
        return view('admin.reservation.reservation_status_edit',compact('reservation_status_edit'));
    }
    public function reservation_status_update(Request $request){

        $reservation_status_update = DB::table('reservation_status')->where('id', $request->id)->update([
            "name"        => $request->status_name,
            "message"     => $request->message, 
        ]);
        if($reservation_status_update){
            return redirect('admin/reservation_status');
        }
    }
    public function reservation_status_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('reservation_status')->where('id', $del)->delete();
        }
            return redirect('admin/reservation_status');
    }

    // Admin Reservation Date Lock Function
    public function lock_date(Request $request){
        $lock_date = DB::table('locked_dates')->orderBy('id','desc')->paginate(10);
        return view('admin.reservation.lock_date',compact('lock_date'));
    }
    public function reservation_lockdate_delete(Request $request, $id){
        DB::table('locked_dates')->where('id', $id)->delete();
        return redirect('admin/lock_date');
    }
    public function reservation_add_lock_date(Request $request){
        return view('admin.reservation.reservation_add_lock_date');
    }
    public function reservation_lock_date_insert(Request $request){
        $reservation_lock_date_insert = DB::table('locked_dates')->insert([
         "from_date"        => $request->from_date,
         "to_date"     => $request->to_date, 
        ]);
        if($reservation_lock_date_insert){
            return redirect('admin/lock_date');
        }
    }
    public function reservation_lock_date_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('locked_dates')->where('id', $del)->delete();
        }
            return redirect('admin/lock_date');
    }

    /*****************************/
    /****** Start Price Part *****/
    /*****************************/


    // Admin Price Zones Function
    public function zones(Request $request){
        $Price_Zone = DB::table('zones')->orderBy('id','desc')->paginate(10);
        return view('admin.price.zones',compact('Price_Zone'));
    }
    public function price_zone_delete(Request $request, $id){
        DB::table('zones')->where('id', $id)->delete();
        return redirect('admin/zones');
    }
    public function price_zone_add(Request $request){
        return view('admin.price.price_zone_add');
    }
    public function price_zone_insert(Request $request){
        $price_zone_insert = DB::table('zones')->insert([
         "code"           => $request->code,
         "name"           => $request->name,
         "description"    => $request->description, 
        ]);
        if($price_zone_insert){
            return redirect('admin/zones');
        }
    }
    public function price_zone_edit(Request $request,$id){
        $price_zone_edit  = DB::table('zones')->where('id',$id)->first();
        return view('admin.price.price_zone_edit',compact('price_zone_edit'));
    }
    public function price_zone_update(Request $request){
        $price_zone_update = DB::table('zones')->where('id', $request->id)->update([
            "code"           => $request->code,
         "name"           => $request->name,
         "description"    => $request->description, 
        ]);
        if($price_zone_update){
            return redirect('admin/zones');
        }
    }
    public function price_zone_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('zones')->where('id', $del)->delete();
        }
        return redirect('admin/zones');
    }

    // Admin Price Location Function
    public function price_locations(Request $request){
        $Price_Locations = DB::table('locations')->orderBy('id','desc')->paginate(10);
        return view('admin.price.price_locations',compact('Price_Locations'));
    }
    public function price_locations_delete(Request $request, $id){
        DB::table('locations')->where('id', $id)->delete();
        return redirect('admin/price_locations');
    }
    public function price_location_add(Request $request){
        return view('admin.price.price_location_add');
    }
    public function price_location_insert(Request $request){
        $price_location_insert = DB::table('locations')->insert([
         "zone_id"              => $request->zone_id,
         "location_type"        => $request->location_type, 
         "name"                 => $request->name, 
         "zone"                 => $request->zone, 
         "address"              => $request->address, 
         "city"                 => $request->city,
         "state"                => $request->state, 
         "zip"                  => $request->zip, 
         "phone"                => $request->phone, 
        ]);
        if($price_location_insert){
            return redirect('admin/price_locations');
        }
    }
    public function price_location_edit(Request $request,$id){
        $price_location_edit  = DB::table('locations')->where('id',$id)->first();
        return view('admin.price.price_location_edit',compact('price_location_edit'));
    }
    public function price_location_update(Request $request){
        $price_location_update = DB::table('locations')->where('id', $request->id)->update([
            "zone_id"              => $request->zone_id,
            "location_type"        => $request->location_type, 
            "name"                 => $request->name, 
            "zone"                 => $request->zone, 
            "address"              => $request->address, 
            "city"                 => $request->city, 
            "state"                => $request->state, 
            "zip"                  => $request->zip, 
            "phone"                => $request->phone,
        ]);
        if($price_location_update){
            return redirect('admin/price_locations');
        }
    }
    public function price_location_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('locations')->where('id', $del)->delete();
        }
        return redirect('admin/price_locations');
    }


    // Admin Price Pricing Function
    public function price_pricing(Request $request){
        $price_pricing = DB::table('prices')->orderBy('id','desc')->paginate(1000);
        return view('admin.price.price_pricing',compact('price_pricing'));
    }
    public function price_pricing_delete(Request $request, $id){
        $price_pricing_delete = DB::table('prices')->where('id', $id)->delete();
        return redirect('admin/price_pricing');
    }
    public function price_pricing_add(Request $request){
        return view('admin.price.price_pricing_add');
    }
    public function price_pricing_insert(Request $request){
        $price_pricing_insert = DB::table('prices')->insert([
            "vehicle_id"      => $request->vehicle_id,
            "price_value"     => $request->price_value, 
            "trip_type"       => $request->trip_type,
            "location1_id"    => $request->location1_id,
            "location2_id"    => $request->location2_id,
            "custom_bundle"   => $request->custom_bundle,
            "price"           => $request->price,  
        ]);
        if($price_pricing_insert){
            return redirect('admin/price_pricing');
        }
    }
    public function price_pricing_edit(Request $request, $id){
        $price_pricing_edit = DB::table('prices')->where('id',$id)->first();
        return view('admin.price.price_pricing_edit', compact('price_pricing_edit'));
    }
    public function price_pricing_update(Request $request){
        $price_pricing_update = DB::table('prices')->where('id', $request->id)->update([
            "vehicle_id"      => $request->vehicle_id,
            "price_value"     => $request->price_value, 
            "trip_type"       => $request->trip_type,
            "location1_id"    => $request->location1_id,
            "location2_id"    => $request->location2_id,
            "custom_bundle"   => $request->custom_bundle,
            "price"           => $request->price, 
        ]);
        if($price_pricing_update){
            return redirect('admin/price_pricing');
        }
    }
    public function price_pricing_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('prices')->where('id', $del)->delete();
        }
        return redirect('admin/price_pricing');
    }


    /*******************************/
    /****** Start Content Part *****/
    /*******************************/ 

    // Admin Content Manager Function
    public function content_addedit(Request $request){
        $content_addedit = DB::table('pages')->orderBy('id','desc')->paginate(100);
        return view('admin.content_manager.content_addedit',compact('content_addedit'));
    }
    public function content_addedit_delete(Request $request, $id){
        $content_addedit_delete = DB::table('pages')->where('id', $id)->delete();
        return redirect('admin/content_addedit');
    }
    public function content_addedit_add(Request $request){
        return view('admin.content_manager.content_addedit_add');
    }
    public function content_addedit_insert(Request $request){
        $content_addedit_insert = DB::table('pages')->insert([
            "page_name"         => $request->page_name,
            "page_title"        => $request->page_title, 
            "meta_description"  => $request->meta_description,
            "meta_keywords"     => $request->meta_keywords,
            "page_content"      => $request->page_content,  
        ]);
        if($content_addedit_insert){
            return redirect('admin/content_addedit');
        }
    }
    public function content_addedit_edit(Request $request, $id){
        $content_addedit_edit = DB::table('pages')->where('id',$id)->first();
        return view('admin.content_manager.content_addedit_edit', compact('content_addedit_edit'));
    }
    public function content_addedit_update(Request $request){
        $content_addedit_update = DB::table('pages')->where('id', $request->id)->update([
            "page_name"         => $request->page_name,
            "page_title"        => $request->page_title, 
            "meta_description"  => $request->meta_description,
            "meta_keywords"     => $request->meta_keywords,
            "page_content"      => $request->page_content,    
        ]);
        if($content_addedit_update){
            return redirect('admin/content_addedit');
        }
    }
    public function content_addedit_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('pages')->where('id', $del)->delete();
        }
        return redirect('admin/content_addedit');
    }


    // Admin Content Add/Edit Function
    public function content_vehicle_maneger(Request $request){
        $content_vehicle_maneger = DB::table('vehicles')->orderBy('id','desc')->paginate(100);
        return view('admin.content_manager.content_vehicle_maneger', compact('content_vehicle_maneger'));
    }
    public function content_vehicle_delete(Request $request, $id){
        $content_vehicle_delete = DB::table('vehicles')->where('id',$id)->delete();
        return redirect('admin/content_vehicle_maneger');
    }
    public function content_vehicle_add(Request $request){
        return view('admin.content_manager.content_vehicle_add');
    }
    public function content_vehicle_insert(Request $request){
        $content_vehicle_insert = DB::table('vehicles')->insert([
            "vehicle_image"   => $request->vehicle_image,
            "name"            => $request->name, 
            "vehicle_title"   => $request->vehicle_title,
            "passengers"      => $request->passengers,
            "description"     => $request->description, 
        ]);
        if($content_vehicle_insert){
            return redirect('admin/content_vehicle_maneger');
        }
    }
    public function content_vehicle_edit(Request $request, $id){
        $content_vehicle_edit = DB::table('vehicles')->where('id',$id)->first();
        return view('admin.content_manager.content_vehicle_edit', compact('content_vehicle_edit'));
    }
    public function content_vehicle_update(Request $request){
        $content_vehicle_update = DB::table('vehicles')->where('id', $request->id)->update([
            "vehicle_image"   => $request->vehicle_image,
            "name"            => $request->name, 
            "vehicle_title"   => $request->vehicle_title,
            "passengers"      => $request->passengers,
            "description"     => $request->description,   
        ]);
        if($content_vehicle_update){
            return redirect('admin/content_vehicle_maneger');
        }
    }
    public function content_manager_all_delete(Request $request){
        // dd($request->id_delete);
        foreach($request->id_delete as $del){
            DB::table('vehicles')->where('id', $del)->delete();
        }
            return redirect('admin/content_vehicle_maneger');
    }


    // Admin Content Testimonial Function
    public function content_testimonial(Request $request){
        $content_testimonial = DB::table('mod_testimonials')->orderBy('id','desc')->paginate(100);
        return view('admin.content_manager.content_testimonial',compact('content_testimonial'));
    }
    public function content_testimonial_delete(Request $request, $id){
        $content_testimonial_delete = DB::table('mod_testimonials')->where('id',$id)->delete();
        return redirect('admin/content_testimonial');
    }
    public function content_testimonial_add(Request $request){
       return view('admin.content_manager.content_testimonial_add');
    }
    public function content_testimonial_insert(Request $request){
        $content_testimonial_insert = DB::table('mod_testimonials')->insert([
            "name"                 => $request->name,
            "city"                 => $request->city, 
            "date_submitted"       => $request->date_submitted,
            "state"                => $request->state,
            "email_address"        => $request->email_address,
            "overall_rating"       => $request->overall_rating,
            "clean_rating"         => $request->clean_rating,
            "vehicle"              => $request->vehicle,
            "service_rating"       => $request->service_rating,
            "driver_rating"        => $request->driver_rating,
            "drivers_name"         => $request->drivers_name,
            "money_rating"         => $request->money_rating,
            "use_us_again"         => $request->use_us_again,
            "testimonial"          => $request->testimonial,
            "status"               => $request->status,
            "company"              => $request->company,
            "position"             => $request->position,
        ]);
        if($content_testimonial_insert){
            return redirect('admin/content_testimonial');
        }
    }
    public function content_testimonial_edit(Request $request, $id){
        $content_testimonial_edit = DB::table('mod_testimonials')->where('id',$id)->first();
        return view('admin.content_manager.content_testimonial_edit', compact('content_testimonial_edit'));
    }
    public function content_testimonial_update(Request $request){
        $content_testimonial_update = DB::table('mod_testimonials')->where('id', $request->id)->update([
            "name"                 => $request->name,
            "city"                 => $request->city, 
            "date_submitted"       => $request->date_submitted,
            "state"                => $request->state,
            "email_address"        => $request->email_address,
            "overall_rating"       => $request->overall_rating,
            "clean_rating"         => $request->clean_rating,
            "vehicle"              => $request->vehicle,
            "service_rating"       => $request->service_rating,
            "driver_rating"        => $request->driver_rating,
            "drivers_name"         => $request->drivers_name,
            "money_rating"         => $request->money_rating,
            "use_us_again"         => $request->use_us_again,
            "testimonial"          => $request->testimonial,
            "status"               => $request->status,
            "company"              => $request->company,
            "position"             => $request->position,
        ]);
        if($content_testimonial_update){
            return redirect('admin/content_testimonial');
        }
    }
    public function content_testimonial_all_delete(Request $request){
        foreach($request->id_delete as $del){
            DB::table('mod_testimonials')->where('id', $del)->delete();
        }
        return redirect('admin/content_testimonial');
    }



    // Admin Content Faq Function
    public function content_faq(Request $request){
        $content_faq = DB::table('faq')->orderBy('id','desc')->paginate(10);
        return view('admin.content_manager.content_faq',compact('content_faq'));
    }
    public function content_faq_add(Request $request){
        return view('admin.content_manager.content_faq_add');
    }
    public function content_faq_insert(Request $request){
        $content_faq_insert = DB::table('faq')->insert([
            "online_reservation"      => $request->online_reservation,
            "existing_reservation"    => $request->existing_reservation, 
            "transportation_provide"  => $request->transportation_provide,
            "question"                => $request->question,
            "answer"                  => $request->answer,
        ]);
        if($content_faq_insert){
            return redirect('admin/content_faq');
        }
    }


    // Admin Content Faq Function
    public function content_email(Request $request){
        $content_email = DB::table('email_templates')->orderBy('id','desc')->paginate(100);
        return view('admin.content_manager.content_email',compact('content_email'));
    }
    public function content_email_delete(Request $request, $id){
       $content_email_delete = DB::table('email_templates')->where('id',$id)->delete();
       return redirect('admin/content_email');
    }
    public function content_email_add(Request $request){
        return view('admin.content_manager.content_email_add');
    }
    public function content_email_insert(Request $request){
        $content_email_insert = DB::table('email_templates')->insert([
            "status"                => $request->status,
            "email_name"            => $request->email_name, 
            "email_subject"         => $request->email_subject,
            "email_content"         => $request->email_content,
            "email_content2"        => $request->email_content2,
        ]);
        if($content_email_insert){
            return redirect('admin/content_email');
        }
    }
    public function content_email_edit(Request $request, $id){
        $content_email_edit = DB::table('email_templates')->where('id',$id)->first();
        return view('admin.content_manager.content_email_edit', compact('content_email_edit'));
    }
    public function content_email_update(Request $request){
        $content_email_update = DB::table('email_templates')->where('id', $request->id)->update([
            "status"                => $request->status,
            "email_name"            => $request->email_name, 
            "email_subject"         => $request->email_subject,
            "email_content"         => $request->email_content,
            "email_content2"        => $request->email_content2,
        ]);
        if($content_email_update){
            return redirect('admin/content_email');
        }
    }
    public function content_email_all_delete(Request $request){
        foreach($request->id_delete as $del){
            DB::table('email_templates')->where('id', $del)->delete();
        }
        return redirect('admin/content_email');
    }
    

    /*****************************/
    /****** Start User Part ******/
    /*****************************/

    // Admin User Driver Function
    public function user_add_driver(Request $request){
        return view('admin.user.user_add_driver');
    }
    public function user_add_driver_insert(Request $request){
       $user_add_driver_insert = DB::table('user_add_driver')->insert([
           "first_name"         => $request->first_name,
           "last_name"          => $request->last_name,
           "mobile"             => $request->mobile,
           "email"              => $request->email,
           "cell_phone"         => $request->cell_phone,
           "cellphone_provider" => $request->cellphone_provider,
           "telephone"          => $request->telephone,
           "address"            => $request->address,
           "apt_number"         => $request->apt_number,
           "city"               => $request->city,
           "state"              => $request->state,
           "zip"                => $request->zip,
           "security_number"    => $request->security_number,
           "license_number"     => $request->license_number,
           "transfer_wage"      => $request->transfer_wage,
           "daily_wage"         => $request->daily_wage,
           "employment_date"    => $request->employment_date,
           "employment_status"  => $request->employment_status,
       ]);
       if($user_add_driver_insert){
        return redirect('admin/user_add_driver');
        }
    }


    // Admin User Driver List Function
    public function user_driver_list(Request $request){
        $user_driver_list = DB::table('user_driver_list')->orderBy('id','desc')->paginate();
        return view('admin.user.user_driver_list',compact('user_driver_list'));
    }
    public function user_driver_list_delete(Request $request, $id){
       $user_driver_list_delete = DB::table('user_driver_list')->where('id',$id)->delete();
       return redirect('admin/user_driver_list');
    }
    public function user_driver_list_add(Request $request){
        return view('admin.user.user_driver_list_add');
    }
    public function user_driver_list_insert(Request $request){
        $user_driver_list_insert = DB::table('user_driver_list')->insert([
            "name"               => $request->name,
            "first_name"         => $request->first_name,
            "last_name"          => $request->last_name,
            "mobile"             => $request->mobile,
            "email"              => $request->email,
            "cell_phone"         => $request->cell_phone,
            "cell_provider"      => $request->cell_provider,
            "telephone"          => $request->telephone,
            "address"            => $request->address,
            "apt_number"         => $request->apt_number,
            "city"               => $request->city,
            "state"              => $request->state,
            "zip"                => $request->zip,
            "security_number"    => $request->security_number,
            "license_number"     => $request->license_number,
            "transfer_wage"      => $request->transfer_wage,
            "daily_wage"         => $request->daily_wage,
            "employment_date"    => $request->employment_date,
            "employment_status"  => $request->employment_status,
        ]);
        if($user_driver_list_insert){
         return redirect('admin/user_driver_list');
        }
    }
    public function user_driver_list_edit(Request $request, $id){
        $user_driver_list_edit = DB::table('user_driver_list')->where('id',$id)->first();
        return view('admin.user.user_driver_list_edit',compact('user_driver_list_edit'));
    }
    public function user_driver_list_update(Request $request){
        $user_driver_list_update = DB::table('user_driver_list')->insert([
            "name"               => $request->name,
            "first_name"         => $request->first_name,
            "last_name"          => $request->last_name,
            "mobile"             => $request->mobile,
            "email"              => $request->email,
            "cell_phone"         => $request->cell_phone,
            "cell_provider"      => $request->cell_provider,
            "telephone"          => $request->telephone,
            "address"            => $request->address,
            "apt_number"         => $request->apt_number,
            "city"               => $request->city,
            "state"              => $request->state,
            "zip"                => $request->zip,
            "security_number"    => $request->security_number,
            "license_number"     => $request->license_number,
            "transfer_wage"      => $request->transfer_wage,
            "daily_wage"         => $request->daily_wage,
            "employment_date"    => $request->employment_date,
            "employment_status"  => $request->employment_status,
        ]);
        if($user_driver_list_update){
         return redirect('admin/user_driver_list');
        }
    }
    public function user_driver_list_all_delete(Request $request){
        foreach($request->id_delete as $del){
            DB::table('user_driver_list')->where('id', $del)->delete();
        }
        return redirect('admin/user_driver_list');
    }



    // Admin User Trip Sheet Function
    public function user_tripsheet(Request $request){
        return view('admin.user.user_tripsheet');
    }
    // Admin User Email Driver Function
    public function user_emaildriver(Request $request){
        $user_emaildriver = DB::table('user_emaildriver')->orderBy('id','desc')->paginate(100);
        return view('admin.user.user_emaildriver',compact('user_emaildriver'));
    }
    public function user_emaildriver_delete(Request $request, $id){
        $user_emaildriver_delete = DB::table('user_emaildriver')->where('id',$id)->delete();
        return redirect('admin/user_emaildriver');
    }
    public function user_emaildriver_add(Request $request){
        return view('admin.user.user_emaildriver_add');
    }
    public function user_emaildriver_insert(Request $request){
        $user_emaildriver_insert = DB::table('user_emaildriver')->insert([
            "email_templates"    => $request->email_templates,
        ]);
        if($user_emaildriver_insert){
         return redirect('admin/user_emaildriver');
        }
    }
    public function user_emaildriver_edit(Request $request, $id){
        $user_emaildriver_edit = DB::table('user_emaildriver')->where('id',$id)->first();
        return view('admin.user.user_emaildriver_edit',compact('user_emaildriver_edit'));
    }
    public function user_emaildriver_update(Request $request){
        $user_emaildriver_update = DB::table('user_emaildriver')->insert([
            "email_templates"    => $request->email_templates,
        ]);
        if($user_emaildriver_update){
         return redirect('admin/user_emaildriver');
        }
    }
    // Admin User Driver Shedule Function
    public function user_drivershedule(Request $request){
        return view('admin.user.user_drivershedule');
    }

    /*****************************/
    /****** Start User Part ******/
    /*****************************/

    // Admin User Driver Shedule Function
    public function userlist(Request $request){
        $userlist = DB::table('user_list')->orderBy('id','desc')->paginate(100);
        return view('admin.user_admin.userlist',compact('userlist'));
    }
    public function userlist_delete(Request $request, $id){
        $userlist_delete = DB::table('user_list')->where('id',$id)->delete();
        return redirect('admin/userlist');
    }
    public function userlist_add(Request $request){
        return view('admin.user_admin.userlist_add');
    }
    public function userlist_insert(Request $request){
        $userlist_insert = DB::table('user_list')->insert([
            "name"               => $request->name,
            "password"           => $request->password,
            "allow_ipaddress"    => $request->allow_ipaddress,
            "account_type"       => $request->account_type,
            "slect_opstion"      => $request->slect_opstion,
        ]);
        if($userlist_insert){
         return redirect('admin/userlist');
        }
    }
    public function userlist_all_delete(Request $request){
        foreach($request->id_delete as $del){
            DB::table('user_list')->where('id', $del)->delete();
        }
        return redirect('admin/userlist');
    }
    
    
    /*****************************/
    /****** Start User Part ******/
    /*****************************/
    
    // Admin User Driver Shedule Function
    public function setting(Request $request){
        $setting = DB::table('settings')->paginate();
        return view('admin.setting.setting',compact('setting'));
    }
    public function settings_update(Request $request){
        $user_driver_list_update = DB::table('settings')->insert([
            "company"                      => $request->company,
            "address"                      => $request->address,
            "address2"                     => $request->address2,
            "city"                         => $request->city,
            "state"                        => $request->state,
            "zip"                          => $request->zip,
            "country"                      => $request->country,
            "tollfree"                     => $request->tollfree,
            "telephone"                    => $request->telephone,
            "fax"                          => $request->fax,
            "email"                        => $request->email,
            "slogan"                       => $request->slogan,
            "show_contact"                 => $request->show_contact,
            "show_map"                     => $request->show_map,
            "map_engine"                   => $request->map_engine,
            "home_page_title"              => $request->home_page_title,
            "username"                     => $request->username,
            "password"                     => $request->password,
            "minimum_time"                 => $request->minimum_time,
            "driver_minimum_transfers"     => $request->driver_minimum_transfers,
        ]);
        if($user_driver_list_update){
         return redirect('admin/setting');
        }
    }

    /***************************************/
    /****** Start Reports Revenue Part *****/
    /***************************************/

    // Admin Reports Revenue Report Function
    public function reports_revenue(Request $request){
        // $reports_salary = DB::table('reservation_details')->orderBy('id','desc')->paginate();
        return view('admin.reports.reports_revenue');
    }
    public function reports_revenue_insert(Request $request){
        $reports_revenue_insert = DB::table('reservation_report')->insert([
            "for_vehicle"        => $request->for_vehicle,
            "for_statuses"       => $request->for_statuses,
            "for_triptypes"      => $request->for_triptypes,
            "from_date"          => $request->from_date,
            "to_date"            => $request->to_date,
        ]);
        if($reports_revenue_insert){
         return redirect('admin/reports_revanue');
        }
    }

    // Admin Reports  Expence Report Function
    public function reports_expence(Request $request){
        return view('admin.reports.reports_expence');
    }
    // Admin Reports Accunting Reports Function
    public function reports_accounting(Request $request){
        return view('admin.reports.reports_accounting');
    }
    // Admin Reports Salary Reports Function
    public function reports_salary(Request $request){
        return view('admin.reports.reports_salary');
    }
    // Admin Reports  Transfer Report Function
    public function reports_transfer(Request $request){
        return view('admin.reports.reports_transfer');
    } 


}
