<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
    
    //Database Relationship
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function scopeSearch($query,$s)
    {
    	return $query->where('posts','like','%'.$s.'%');
    }

    
}
