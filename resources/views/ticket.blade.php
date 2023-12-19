@extends('layouts.main')

@section('title', 'Helpdesk - Ticket')

@section('TicketAtivo', 'ativo')

@section('content')
    
    <div class="tit-ticket">
        <div class="icon-suporte">
            <div class="icon-ticket">
                <i class="fa-solid fa-headset"></i></li>
            </div>
            <div class="suporte-msg">
                <div class="tit-suporte">
                    <h1>{{$ticket->titulo}}</h1>
                </div>
                <div class="desc-suporte">
                    <p>Gerencie o ticket por aqui!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-tickets" style="height: auto">
        <div class="conteudo-tickets" style="height: auto">
            <div class="titulo-suporte">
                <p>Ticket</p>
            </div>
            <div class="box-table-info">
                <form action="/ticket/edit/{{$ticket->id}}" method="post">
                    @csrf
                    <div class="conteudo-table-ticket">
                        <div class="input-menor-dis">
                            <div class="input-dis">
                                <label>Título</label>
                                <input type="text" name="titulo" value="{{$ticket->titulo}}" disabled>
                            </div>
                            <div class="input-dis">
                                <label>Prioridade</label>
                                <input type="text" name="prioridade" value="{{$ticket->prioridade}}" disabled>
                            </div>
                            <div class="input-dis">
                                <label>Departamento</label>
                                <input type="text" name="departamento" value="{{$ticket->departamento}}" disabled>
                            </div>
                            <div class="input-dis">
                                <label>Status</label>
                                <input type="text" name="status" value="{{$ticket->status}}" disabled>
                            </div>
                            <div class="input">
                                <label for="">Atribuir para</label><br>
                                <select name="atribuido">
                                    @foreach($users as $user)
                                        <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="input-desc-dis">
                            <div class="input-dis">
                                <label>Descricão</label>
                                <input type="text" name="descricao" value="{{$ticket->descricao}}" disabled>
                            </div>
                        </div>
                        <div class="button-submit">
                            <button>Enviar</button>
                        </div>
                        <div class="container-errorsForm">
                            @if ($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>- {{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

