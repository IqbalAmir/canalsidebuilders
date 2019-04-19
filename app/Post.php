<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  //table name
  protected $table ='posts';
  //primary
  public $primaryKey = 'id';
  //timestamps
  public $timestamps = true;

    public function user(){
      return $this->belongsTo('App\User'); //post belongs to a user
    }
}
