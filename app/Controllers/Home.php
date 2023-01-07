<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function orderafterpayment()
    {
        return view('orderafterpayment');
    }

    public function orderprocesspayment()
    {
        return view('orderprocesspayment');
    }
}
