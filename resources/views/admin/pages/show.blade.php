@extends('admin.app')

@section('content')

<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title">
            <h3>Perfil do Agente</h3>
        </div>
    </div>

    <div class="row layout-spacing">

        <!-- Content -->
        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

            <div class="user-profile layout-spacing">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">Informações</h3>
                        <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                    </div>
                    <div class="text-center user-info">
                        <img src="{{ asset('assets/img/90x90.jpg') }}" alt="avatar">
                        <p class="">{{ $user->agent->name_company }}</p>
                    </div>
                    <div class="user-info-list">

                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> {{ $user->name }}
                                </li>                                
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>São Paulo
                                </li>
                                <li class="contacts-block__item">
                                    <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{ $user->agent->email_company }}</a>
                                </li>
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{ $user->agent->phone_company }}
                                </li>
                                <li class="contacts-block__item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <div class="social-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="social-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="social-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>                                    
                    </div>
                </div>
            </div>           

        </div>

        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

            <div class="bio layout-spacing ">
                <div class="widget-content widget-content-area">
                    <h3 class="">Bio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta lacus a nibh cursus, quis finibus lorem dictum. Etiam iaculis malesuada felis, non gravida neque accumsan sit amet. Pellentesque rutrum dictum enim, sed iaculis dui commodo vel. Phasellus sit amet ex in nulla gravida placerat. Nunc eget mauris lectus. Donec ac ante turpis. Curabitur semper orci nec interdum eleifend. Cras imperdiet malesuada placerat. Ut efficitur nibh nec ligula consectetur, ac semper nisi fermentum. Nulla volutpat eget mi sit amet commodo.</p>

                    <div class="bio-skill-box">

                        <div class="row">
                            
                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Lorem ipsum dolor sit amet</h5>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                                
                                <div class="d-flex b-skills">
                                    <div>
                                    </div>
                                    <div class="">
                                        <h5>Lorem ipsum dolor sit amet</h5>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
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

@endsection


@push('custom-styles')
<link href="{{ asset('assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
<style>
 .user-profile .widget-content-area .user-info-list ul.contacts-block {
    max-width: 100%;
}

</style>

@endpush