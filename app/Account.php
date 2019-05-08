<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    //table name
    protected $table ='accounts';
    //primary
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

      public function user(){
        return $this->belongsTo('App\User'); //account belongs to a user
      }

      public function orders(){
        return $this->belongsTo('App\Order'); //account has many orders  This creates the relationship with the user and the orders
      }



}
