<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'boday');

    public static $rules = array(
    	'title'    => 'required|min:10|max:100|alpha_num',
    	'body'     => 'required|max:10000|email',
    	'image'    => 'image'
    );
}