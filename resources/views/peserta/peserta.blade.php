@extends('layouts.peserta')
@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Peserta</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Peserta</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Welcome Peserta</h6>
@endsection
@section('content')
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Authors table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelompok</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Anggota</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                <p class="text-xs text-secondary mb-0">Organization</p>
                            </td>
                           
                           
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programator</p>
                                <p class="text-xs text-secondary mb-0">Developer</p>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                        <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Executive</p>
                                <p class="text-xs text-secondary mb-0">Projects</p>
                            </td>
                           
                           
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                        <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programator</p>
                                <p class="text-xs text-secondary mb-0">Developer</p>
                            </td>
                         
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                        <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                <p class="text-xs text-secondary mb-0">Executive</p>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                        <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                <p class="text-xs text-secondary mb-0">Developer</p>
                            </td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4"> 
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-right justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted"
                            target="_blank">2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">3</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted"
                            target="_blank">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
