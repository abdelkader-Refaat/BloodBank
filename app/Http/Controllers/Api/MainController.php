<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Client;
use App\Models\Governorate;
use App\Assistant\Helpers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\DonationRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Token;
use Illuminate\Validation\Rule;




class MainController extends Controller
{

     public function governorates(){

         $governorates = Governorate::paginate(10);

         return (new Helpers())->helpers('1','success',$governorates);

     }
     public function posts(){

         $posts = Post::with('category')->paginate(10);
         if ($posts){
             return (new Helpers())->helpers('1','success',$posts);

         }else{
             return (new Helpers())->helpers('0','unauthenticate');

         }
     }

     public function cities(Request $request){

         $cities = City::where(function ($query) use ($request){

             if($request->has('governorate_id')){

                 $query->where('governorate_id',$request->governorate_id);

             }
         })->get();

         return (new Helpers())->helpers('1','success',$cities);

     }


     public function donationRequestCreate(Request $request){



        $rules = [

         'patient_name' => 'required',
         'patient_phone'=> 'required',
         'patient_age'  => 'required',
         'hospital_address' => 'required',
         'bags_num'          => 'required',

        ];


        $validation = Validator::make($request->all(), $rules);


        if ($validation->fails()) {
            return (new Helpers())->helpers(0,$validation->errors()->first(),$validation->errors());
        }


         $donationRequest = DonationRequest::create($request->all());


        /*$donationRequest = Client::where('phone',$request->patient_phone);
        dd($donationRequest);
        // ->donation_requests()->create($request->all());*/

          return (new Helpers())->helpers('1','تم الاضافه بنجاح ');

          $clientsId = 



     }

     public function donationRequests(Request $request){



       /// *************** not complete **************** ///

        $donation = DonationRequest::where(function($query){


              if($request->has(governorate_id)){
                $query->where('governorate_id', $request->governorate_id);
              }
              if ($request->has('blood_type')) {

                 $query->where('blood_type',$request->blood_type);
              }


        })->get();

        if ($donation->fails()) {

             return (new Helpers())->helpers('0','sorry  your donation request isnt compatibale with governorate and blood type',);


        }
        return (new Helpers())->helpers('1','retreive donations compatibale with your governorate and blood type',$donations);
     }


     public function postFavourite(Request $request){

       // RequestLog::create(['content' => $request->all(), 'service' => 'post toggle favourite']);

       $rules = [

      'post_id' => 'required|exists:posts,id',

       ];

       $validation = Validator::make($request->all(),$rules);

       if ($validation->fails()) {

                  return (new Helpers())->helpers('0',$validation->errors()->first());

       }
          $toggle = Client::find(1)->posts()->toggle($request->post_id);

        return (new Helpers())->helpers('1','تمت العملية بنجاح ');



     }


     public function myFavourites(Request $request){


      $posts = Client::find($request->id)->posts()->latest()->paginate(10);

      return (new Helpers())->helpers('1','your posts',$posts);



     }

     public function notifications(Request $request){

         $notifications = Client::find($request->id)->notifications()->where();

     }
     public function registerToken(Request $request){
          
           $validation = validator()->make($request->all(),[
            
            'token' => 'required',
            'type' => ['required',
            Rule::in(['android','ios']),
          ]
           ]);

           if ($validation->fails()) {
              $data = $validation->errors();
              return (new Helpers())->helpers('0','error',$data);


           }
           Token::where('token', $request->token);
           Client::find($request->client_id)->tokens()->create($request->all());

                 return (new Helpers())->helpers('1','تم التسجيل بنجاح ');


     }
     public function removeToken(Request $request){
          
           $validation = validator()->make($request->all(),[
            
            'token' => 'required',
          
           ]);

           if ($validation->fails()) {
              $data = $validation->errors();
              return (new Helpers())->helpers('0','error',$data);

           }
           Token::where('token', $request->token)->delete();
           

                 return (new Helpers())->helpers('1','تم الحذف بنجاح ');


     }


















}
