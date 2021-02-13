<?php

namespace App\Http\Controllers;
use App\Trails\MailTrait;


class IndexController extends Controller
{

    use MailTrait;


    public function __construct()
    {
       
    }

    public function getHome()
    {
        return view('frontend.pages.home');
    }

}
