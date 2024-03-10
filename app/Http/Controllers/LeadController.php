<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function index(){

        return view('home', ['leads' => Lead::all()]);
    }
}
