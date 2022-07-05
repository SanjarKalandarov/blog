<?php
//namespace App\Http\Controllers|Admin\PostController;
use App\Http\Controllers\Controller;
use PostSerice;
class  BaseController extends  Controller{
    public  $service;
    public function __construct(PostSerice $serice){
$this->service=$serice;
    }
}
