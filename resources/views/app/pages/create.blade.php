@extends('app.app')

@section('content')
<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title">
            <h3>Novo Lead</h3>
        </div>
    </div>
        
    <div class="account-settings-container layout-top-spacing">
        <form action="{{ route('app.store-lead') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">

                        {{-- Informações da Cliente --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Cliente</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">                                                
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Nome</label>
                                                                    <input type="text" name="name_client" class="form-control mb-4" id="name_client" placeholder="Nome Clente">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Telefone</label>
                                                                    <input type="text" name="phone_client" class="form-control mb-4" id="phone_client" placeholder="(11) 99999-9999">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="profession">E-mail</label>
                                                            <input type="email" name="email_client" class="form-control mb-4" id="email_client" placeholder="cliente@email.com.br">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="account-settings-footer">
                
                <div class="as-footer-container">

                    
                    <button type="submit" id="multiple-messages" class="btn btn-primary">Adicionar Lead</button>

                </div>

            </div>
        </form>
    </div>

    </div>
@endsection

@push('custom-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('custom-scripts')
<script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{ asset('assets/js/users/account-settings.js') }}"></script>
@endpush