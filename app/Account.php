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




}
