@extends('layouts.main')

@section('title', 'Helpdesk - Tickets')

@section('TicketsAtivo', 'ativo')

@section('content')

    <div class="tit-ticket">
        <div class="icon-suporte">
            <div class="icon-ticket">
                <i class="fa-solid fa-headset"></i></li>
            </div>
            <div class="suporte-msg">
                <div class="tit-suporte">
                    <h1>Tickets</h1>
                </div>
                <div class="desc-suporte">
                    <p>Bem-vindo ao Admin Dashboard</p>
                </div>
            </div>
        </div>
        <div class="box-novo-ticket">
            <button><i class="fa-solid fa-user-plus"></i> Novo Ticket</button>
        </div>
        
    </div>

@endsection

