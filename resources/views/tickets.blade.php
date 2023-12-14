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
                    <h1>Suporte</h1>
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
    <div class="container-tickets">
        <div class="conteudo-tickets">
            <div class="titulo-suporte">
                <p>Suporte</p>
            </div>
            <div class="box-table-info">
                <div class="info-tickets">
                    <ul>
                        <li>30 <span style="color:#888888; font-size: 14px; font-weight: 100">Total Tickets</span></li>
                        <li>8 <span style="color:#888888; font-size: 14px; font-weight: 100">Abertos</span></li>
                        <li>14 <span style="color:blue; font-size: 14px; font-weight: 100">Em Progresso</span></li>
                        <li>2 <span style="color:red; font-size: 14px; font-weight: 100">Atrasados</span></li>
                        <li>20 <span style="color:green; font-size: 14px; font-weight: 100">Fechados</span></li>
                    </ul>
                </div>
                <div class="table-tickets" style="max-height: 100%">
                    <table id="myTable" class="display" style="">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Prioridade</th>
                                <th>Departamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                    pageResize: true,
                    scrollCollapse: true,
                    scrollY: '100%',
                    lengthChange: false,
                    info: false,
                    processing: true,
                    serverSide: true,
                    "ajax": "{{route('tickets.ajax')}}",
                    "columns": [
                        {"data": 'titulo'},
                        {"data": 'prioridade'},
                        {"data": 'departamento'},
                    ]
            });
        })
    </script>
@endsection

