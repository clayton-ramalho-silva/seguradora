@extends('admin.app')

@section('content')
<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title">
            <h3>Lista de Agentes</h3>
        </div>
    </div>
    
    <div class="row layout-top-spacing" id="cancel-row">
    
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table id="default-ordering" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Contato</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Localização</th>                                
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item Agente -->
                            @foreach ($users as $user)
                                
                            <tr>
                                <td>{{ $user->agent->name_company }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->agent->phone_company }}</td>
                                <td>{{ $user->agent->email_company }}</td>
                                <td>São Paulo</td>                                
                                <td class="">
                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="{{ route('admin.show-agente', $user->id) }}">Vizualizar</a>
                                            <a class="dropdown-item" href="{{ route('admin.editar-agente', $user->id) }}">Editar</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Ver Leads</a>                                            
                                            <a class="dropdown-item" href="{{ route('admin.deletar-agente', $user->id) }}">Deletar</a>
                                        </div>
                                    </div>

                                    
                                </td>
                            </tr>

                            @endforeach
                            <!-- Fim Item Agente -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Empresa</th>
                                <th>Contato</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Localização</th>
                                
                                <th class="invisible"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection

@push('custom-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
<style>
    .table-hover:not(.table-dark) tbody tr:hover{
        background-color: #f1f2f3 !important;
        transform: none;
    }
</style>
    
@endpush

@push('custom-scripts')
<script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Página _PAGE_ de _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Buscar...",
               "sLengthMenu": "Resultados :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );
    </script>
    
@endpush