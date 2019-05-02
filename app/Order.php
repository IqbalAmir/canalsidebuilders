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
        return $this->belongsTo('App\User'); //account belongs to a user
      }

      public function account(){
        return $this->belongsTo('App\Account'); //relationship created for account with order
      }



      public function service(){
        return $this->belongsTo('App\Service'); //relationship created for account with order
      }
}
