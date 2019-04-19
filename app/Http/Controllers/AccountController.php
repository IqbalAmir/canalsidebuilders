<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Order;
use App\User;
use DB;



class AccountController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() // constructor runs when the class in called
  {
      $this->middleware('auth', ['except' => ['index', 'show']]); // blocks everything in the dashboard (home) if the user is not authenticated , passing arrays makes exceptions on the web page
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {


       $account = Account::orderBy('id')->paginate(10);
       return view('account.index')->with('accounts', $account);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view ('account.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       $this->validate($request, [
         'title' => 'required',
         'firstname'  => 'required',
         'surname'  => 'required',
         'housenumber'  => 'required',
         'streetname'  => 'required',
         'city'  => 'required',
         'postcode'  => 'required'

       ]);


       //create Personal Info
       $account = new Account;
       $account->title = $request->input('title');
       $account->firstname = $request->input('firstname');
       $account->surname = $request->input('surname');
       $account->user_id = auth()->user()->id;
       $account->housenumber = $request->input('housenumber');
       $account->streetname = $request->input('streetname');
       $account->city = $request->input('city');
       $account->postcode = $request->input('postcode');
       $account->save();

       return redirect ('/accounts')->with('success', 'Details Inserted');

     }



     public function edit($id)
     {
         $account = Account::find($id);

         //check for correct user
         if(auth()->user()->id !==$account->user_id){
           return redirect('/accounts')->with('error', 'Unauthorised Page');
         }


         return view('account.edit')->with('account', $account);
     }


         /**
          * Update the specified resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function update(Request $request, $id)
         {
           $this->validate($request, [
             'title' => 'required',
             'firstname'  => 'required',
             'surname'  => 'required',
             'housenumber'  => 'required',
             'streetname'  => 'required',
             'city'  => 'required',
             'postcode'  => 'required'

           ]);

                 //create Post
                 $account = Account::find($id);
                 $account->title = $request->input('title');
                 $account->firstname = $request->input('firstname');
                 $account->surname = $request->input('surname');
                 $account->housenumber = $request->input('housenumber');
                 $account->streetname = $request->input('streetname');
                 $account->city = $request->input('city');
                 $account->postcode = $request->input('postcode');
                 $account->save();

                 return redirect ('/accounts')->with('success', 'Details Updated');
}



     public function show($id)
     {
         $account = Account::find($id);
         return view('account.show')->with('account', $account);
     }





     public function destroy($id)
     {
         $account = Account::find($id);

         //check for correct user
          if(auth()->user()->id !==$account->user_id){ // if user id does not match to the post user
           return redirect('/accounts')->with('error', 'Unauthorised Page'); // then redirect to post index and show error
         }

         $account->delete();
         return redirect ('/accounts')->with('success', 'Post Removed');
     }



































}
