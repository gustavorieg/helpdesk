@extends('layouts.main')

@section('title', 'Helpdesk - Tickets')

@section('TicketAtivo', 'ativo')

@section('content')

    <div class="tit-ticket">
        <div class="icon-suporte">
            <div class="icon-ticket">
                <i class="fa-solid fa-headset"></i></li>
            </div>
            <div class="suporte-msg">
                <div class="tit-suporte">
                    <h1>Abrir Ticket</h1>
                </div>
                <div class="desc-suporte">
                    <p>Bem-vindo a abertura de ticket</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-tickets">
        <div class="conteudo-tickets">
            <div class="titulo-suporte">
                <p>Abrir Ticket</p>
            </div>
            <div class="box-table-info">
                <div class="contaudo-table-ticket">

                </div>
            </div>
        </div>
    </div>
@endsection

