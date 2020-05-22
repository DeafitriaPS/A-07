<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GuestController extends Controller
{
    public function halguest()
    {
        return view('guest/halguest');
    }    
    public function aries()
    {
        return view('guest/ariesguest');
    }

    public function taurus()
    {
        return view('guest/taurusguest');
    }

    public function aquarius()
    {
        return view('guest/aquariusguest');
    }

    public function cancer()
    {
        return view('guest/cancerguest');
    }

    public function capricorn()
    {
        return view('guest/capricornguest');
    }

    public function gemini()
    {
        return view('guest/geminiguest');
    }

    public function leo()
    {
        return view('guest/leoguest');
    }

    public function libra()
    {
        return view('guest/libraguest');
    }

    public function pisces()
    {
        return view('guest/piscesguest');
    }

    public function sagitarius()
    {
        return view('guest/sagitariusguest');
    }

    public function scorpio()
    {
        return view('guest/scorpioguest');
    }

    public function virgo()
    {
        return view('guest/virgoguest');
    }
}