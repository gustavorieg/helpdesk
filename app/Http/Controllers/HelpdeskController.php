<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables as DataTables;

class HelpdeskController extends Controller
{

    public function index(){

        if (Auth::check() != true){
            return view('login');
        }
        
        return view('index');
    }

   public function tickets(){

    if (Auth::check() != true){
        return view('login');
    }
    
    return view('tickets');
   }

   public function ticketsAjax(){

    if (Auth::check() != true){
        return view('login');
    }

    $tickets = Ticket::select();

    return DataTables::of($tickets)->make(true);
   }

   public function abrirTicket(){

    if (Auth::check() != true){
        return view('login');
    }

    return view('newTicket');
   }
}
