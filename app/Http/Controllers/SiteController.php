<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $fullname = 'Nattawut Kruaytong';
        $email = 'nattawut_kru@nacc.go.th';
        return view('about', [
            'fullname' => $fullname,
            'email' => $email
        ]);
    }
}
