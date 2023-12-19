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
    <div class="container-tickets" style="height: auto">
        <div class="conteudo-tickets" style="height: auto">
            <div class="titulo-suporte">
                <p>Abrir Ticket</p>
            </div>
            <div class="box-table-info">
                <form action="" method="post">
                    @csrf
                    <div class="conteudo-table-ticket">
                        <div class="inputs">
                            <div class="input">
                                <label for="">Prioridade<span>*</span></label><br>
                                <select name="prioridades">
                                    <option value="Muito Alta">Muito Alta</option>
                                    <option value="Alta">Alta</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Baixa">Baixa</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="">Departamento<span>*</span></label><br>
                                <select name="departamentos">
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Faturamento">Faturamento</option>
                                    <option value="Compras">Compras</option>
                                    <option value="Compras">T.I</option>
                                    <option value="Compras">Marketing</option>
                                    <option value="Compras">Televendas</option>
                                    <option value="Compras">Trade</option>
                                    <option value="Compras">RH</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-desc">
                            <div class="input-titulo">
                                <label for="">Título<span>*</span></label>
                                <input type="text" name="titulo">
                            </div>
                            <div class="input-texto">
                                <label for="">Descrição<span>*</span></label>
                                <input type="text" name="descricao">
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

