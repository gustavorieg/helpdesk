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
            <a href="/abrirticket"><i class="fa-solid fa-user-plus"></i> Novo Ticket</button></a>
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
                        <li>{{$allTickets->count()}} <span style="color:#888888; font-size: 14px; font-weight: 100">Total Tickets</span></li>
                        <li>{{$ticketsAbertos->count()}} <span style="color:#888888; font-size: 14px; font-weight: 100">Abertos</span></li>
                        <li>{{$ticketsProgresso->count()}} <span style="color:blue; font-size: 14px; font-weight: 100">Em Progresso</span></li>
                        <li>{{$ticketsAtrasados->count()}} <span style="color:red; font-size: 14px; font-weight: 100">Atrasados</span></li>
                        <li>{{$ticketsFechados->count()}} <span style="color:green; font-size: 14px; font-weight: 100">Fechados</span></li>
                    </ul>
                </div>
                <div class="table-tickets">
                    <table id="myTable" class="display pageResize nowrap" >
                        <thead> 
                            <tr>
                                <th>Requisitante</th>
                                <th>Título</th>
                                <th>Prioridade</th>
                                <th>Atribuido</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
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
    <script src="//cdn.datatables.net/plug-ins/1.13.7/features/scrollResize/dataTables.scrollResize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({   
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
                    },
                    scrollResize: true,
                    scrollY: 100,
                    scrollCollapse: true,
                    paging: true,
                    processing: true,
                    serverSide: true,
                    "ajax": "{{route('tickets.ajax')}}",
                    "columns": [
                        {"data": 'requisitante'},
                        {"data": 'titulo'},
                        {"data": 'prioridade'},
                        {"data": 'atribuido'},
                        {"data": 'status'},
                    ],
                    createdRow: function(row, data) {
                        $(row).on('click', function() {
                            window.location.href = '/ticket/' + data.id; 
                        });
                    }
            });
        })
    </script>
@endsection

