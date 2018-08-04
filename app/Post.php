<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //optional
    protected $table='posts';


    //by default all columns are protected ->sintax to unprotect
    protected $fillable=[
        'title',
        'body',
    ];


    //to convert to carbon
    protected $dates =[
        'reviewed_at',
    ];

   
    public function getFullText(){
        return $this->title. ' ' .$this->body;
    }
}
