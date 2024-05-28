@extends('app.app')

@section('content')
<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title">
            <h3>Editar Perfil</h3>
        </div>
    </div>
        
    <div class="account-settings-container layout-top-spacing">
        <form action="{{ route('app.atualizar-perfil', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">

                        {{-- Informações da Empresa --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Empresa</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input name="logo_company" type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('/img/agentes/'.$user->agent->logo_company) }}" data-max-file-size="2M" />
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Logo</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Nome</label>
                                                                    <input type="text" name="name_company" class="form-control mb-4" id="name_company" placeholder="Nome Empresa" value="{{ $user->agent->name_company }}">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Telefone</label>
                                                                    <input type="text" name="phone_company" class="form-control mb-4" id="phone_company" placeholder="(11) 99999-9999" value="{{ $user->agent->phone_company }}">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="profession">E-mail</label>
                                                            <input type="email" name="email_company" class="form-control mb-4" id="email_company" placeholder="empresa@emial.com.br" value="{{ $user->agent->email_company }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Informações do Contato --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Contato</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Nome</label>
                                                        <input type="text" name="name" class="form-control mb-4" id="name" placeholder="Nome do contato" value="{{ $user->name }}">
                                                        @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">E-mail</label>
                                                        <input type="email" name="email" class="form-control mb-4" id="email" placeholder="contato@email.com.br" value="{{ $user->email }}">
                                                        @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
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

                    
                    <button type="submit" id="multiple-messages" class="btn btn-primary">Atualizar Perfil</button>

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