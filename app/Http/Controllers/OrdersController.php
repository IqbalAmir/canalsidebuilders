<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Service;
use App\Account;


class OrdersController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() // constructor runs when the class in called
  {
      $this->middleware('auth');// blocks everything if the user is not authenticated
  }



  public function index()
  {
      $user_id = auth()->user()->id; //logged in user's ID
      $user = User::find($user_id); // user model and find by the user id
      return view('order.index')->with('order', $user->orders); // return view with user orders as we have made the relationship for this
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
{
  $services =  Service::pluck('service','id'); // shows info from services table in form
      return view('order.create')->with('services',$services);
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
        'service' => 'required',
        'issue'  => 'required'

      ]);

      //create Post
      $orders = new Order;
      $orders->user_id = auth()->user()->id;
      $account = Account::find($request->id);
      $orders->account()->associate($account);
      $orders->issue = $request->input('issue');
      $orders->save();

      return redirect ('/orders')->with('success', 'Order Created');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   public function show($id)
   {
       $order = Order::find($id);
       return view('order.show')->with('order', $order);
   }
























}
