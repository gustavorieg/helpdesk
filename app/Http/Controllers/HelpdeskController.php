<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Models\Ticket;
use Carbon\Carbon;
use DateTime;
use Illuminate\Foundation\Auth\User;
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
    
    $allTickets = Ticket::all();
    $ticketsAbertos = Ticket::where('status', 'aberto');
    $ticketsAtrasados = Ticket::where('prazo', '<', Carbon::today());
    $ticketsProgresso = Ticket::where('atribuido', '<>', '');
    $ticketsFechados = Ticket::where('status', 'fechado');

    return view('tickets', ['allTickets' => $allTickets, 'ticketsAbertos' => $ticketsAbertos, 'ticketsAtrasados' => $ticketsAtrasados, 'ticketsProgresso' =>  $ticketsProgresso, 'ticketsFechados' => $ticketsFechados]);
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

   public function ticketStore(TicketFormRequest $request){
    
    if (Auth::check() != true){
        return view('login');
    }

    $ticket = new Ticket;

    $ticket->name = Auth::user()->name;
    $ticket->titulo = $request->titulo;
    $ticket->descricao = $request->descricao;
    $ticket->prioridade = $request->prioridades;
    $ticket->departamento = $request->departamentos;
    $ticket->status = "aberto";
    $ticket->prazo = Carbon::today()->addDays(5);

    $ticket->save();

    return redirect('tickets');
   }

   public function ticket($id){

    if (Auth::check() != true){
        return view('login');
    }

    $users = User::all();
    $ticket = Ticket::FindOrFail($id);
    return view('ticket', ['ticket' => $ticket, 'users' => $users]);
   }
}
