<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    //table name
    protected $table ='orders';
    //primary
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

      public function user(){
        return $this->belongsTo('App\User'); //order belongs to a user
      }

      public function account(){
        return $this->belongsTo('App\Account'); //account belongs to an order. Creates relationship between account and order
      }

      public function service(){
        return $this->belongsTo('App\Service'); //service belongs to an order
      }
}
