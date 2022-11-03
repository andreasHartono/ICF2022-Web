@extends('layouts.mainweb')

@section('title')
    ICF 2022 - Detail Team {{ $team->nama_tim }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('content')
    <section id="dashboard" style="width: 90%; margin: 0 auto;">
        <div class="container dashboard-container">
            <div class="row">
                <h3 style="color: #fff !important;">Selamat Datang, Tim {{ $team->nama_tim }}</h3>
            </div>

            <div>
                @php
                    date_default_timezone_set('Asia/Jakarta');
                    $startDate = $event->tanggal_start;
                    $endDate = $event->tanggal_end;
                    $startDateTimestamp = strtotime($startDate);
                    $endDateTimestamp = strtotime($endDate);
                @endphp

                <div class="row mt-3">
                    <div class="col-lg-12 text-center mb-3">
                        <h3 style="color: #fff !important;">Anggota</h3>
                    </div>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <form action={{ url('updateteam/' . $team->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-2 justify-content-evenly">
                    @foreach ($team->teamDetail as $item)
                        <input type="hidden" name="{{ 'idAnggota' . $loop->index }}" value="{{ $item->id }}">
                        <div class="col-lg-4 mb-3 daftar-anggota">
                            <div class="row mb-3">
                                <a href="{{ asset('files/' . $item->image) }}" class="btn myBtn" target="_blank"
                                    style="width: 80%; margin: 0 auto; color: #fff !important;">Check Me</a>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-5">Nama</div>
                                <div class="col-7">{{ $item->nama }}</div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-5">No HP</div>
                                <div class="col-7">{{ $item->no_hp }}</div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-5">Email</div>
                                <div class="col-7">{{ $item->email }}</div>
                            </div>
                            @if ($team->events_id == 6)
                                <div class="row justify-content-between">
                                    <div class="col-5">ID Mobile Legend</div>
                                    <div class="col-7">{{ $item->idgame }}</div>
                                </div>
                            @endif

                            @if ($team->status != 'accepted')
                                <div class="row mt-3">
                                    <label class="text-center label-ganti-kp">Ganti Kartu Pelajar</label>
                                    <input type="file"
                                        class="myInputFile @error('imgAnggota' . $loop->index) is-invalid @enderror"
                                        accept="application/pdf,image/*" name="{{ 'imgAnggota' . $loop->index }}"
                                        id="imgAnggota2">

                                </div>
                                @error('imgAnggota' . $loop->index)
                                    <div class="invalid-feedback text-center">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <h3 style="color: #fff !important;">Status</h3>
                        @if ($team->status != 'accepted')
                            <h4 class="status ditolak" style="font-weight: 700; text-transform: uppercase;">
                                {{ $team->status }}</h4>
                            <p class="keterangan">{{ $team->keterangan }}</p>
                            <button type="submit" class="btn myBtn dark">Simpan Perubahan</button>
                        @else
                            <h4 class="status diterima" style="font-weight: 700; text-transform: uppercase;">
                                {{ $team->status }}</h4>
                        @endif
                        <br><br><br>
                    </div>
                </div>
            </form>
            @if ($team->events_id == 5 && $team->status == 'accepted' && time() >= $startDateTimestamp && time() <= $endDateTimestamp)
                <a href="#upload_{{ $team->id }}" class="btn myBtn dark d-grid gap-5" data-bs-toggle="modal"
                    style="width: 80%; margin: 0 auto; color: #fff !important;">Upload
                    File Jawaban</a>
                <!-- Modal -->
                <div class="modal fade" id="upload_{{ $team->id }}" tabindex="-1"
                    aria-labelledby="modalPendaftaranLabel" aria-hidden="true">
                    <link rel="stylesheet" href="{{ asset('assets/css/popup.css') }}">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalPendaftaranLabel">Silahkan Kirim File Jawaban
                                    Dalam Bentuk PDF Dengan Format NamaTim_JawabanComprog.pdf (Maksimal 3 MB)
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form role="form" method="POST" action="{{ url('uploadjawabancomprog/' . $team->id) }}"
                                class="mt-5" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="form-group">
                                            <label class="myLabel width-90" style="text-align:left;">Upload File
                                                Jawaban</label>
                                            <input type="file" accept="application/pdf" name="file_jawaban"
                                                id="file soal formFileMultiple"
                                                class="myInputFile width-90 @error('file_jawaban') is-invalid @enderror"
                                                style="color:navy;">
                                            <input type="hidden" name="idteam" value="{{ $team->id }}" />
                                            @error('file_jawaban')
                                                <div class="invalid-feedback text-center">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="modal-footer p-0">
                                            <input type="submit" class="btn myBtn width-90 mt-5 text-light"
                                                style="background: red !important; color: white !important;"
                                                id="btn-submit" value="Submit Jawaban">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
