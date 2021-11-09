<?php

namespace App\Http\Controllers;

use App\Models\Certif;
use Illuminate\Http\Request;


class CertifController extends Controller
{
    public function index()
    {
        return view('certifs', [
        "title" => "Certifs",
        "certifs" => Certif::all()
    ]);
    }

}
