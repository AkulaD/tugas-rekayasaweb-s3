@extends('layouts.app')
@section('title', $work->judul_anime)

@section('content')
<div class="row">
    <span class="mb-1"><a class="text-decoration-none" href="{{ url('/project') }}">Works</a> / {{  $work->judul_anime }}</span>
</div>
<div class="position-relative d-flex align-items-center" style="height: 45vh; overflow: hidden;">
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-image: url('{{ asset('images/' . $work->nama_file_gambar) }}'); background-size: cover; background-position: center; filter: blur(15px) brightness(0.4); transform: scale(1.1); z-index: 1;"></div>
</div>

<div class="container position-relative pb-5 z-3" style="margin-top: -80px;">
    <div class="row g-5">
        
        <div class="col-md-4 col-lg-3 fade-in-up" style="animation-delay: 0.1s;">
            <div class="rounded-4 shadow-lg overflow-hidden border border-4 border-white bg-white" style="aspect-ratio: 2/3;">
                <img src="{{ asset('images/' . $work->nama_file_gambar) }}"
                    class="img-fluid w-100 h-100 object-fit-cover"
                    alt="{{ $work->judul_anime }}">
            </div>
        </div>

        <div class="col-md-8 col-lg-9 fade-in-up pt-md-5 mt-md-4" style="animation-delay: 0.2s;">
            <div class="rounded-4 p-4 p-lg-5 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge px-3 py-2 fs-6 rounded-pill shadow-sm" style="background-color: rgb(65, 88, 194);">{{ $work->tipe }}</span>
                    <span class="badge bg-dark px-3 py-2 fs-6 rounded-pill shadow-sm">{{ $work->genre_utama }}</span>
                </div>

                <h1 class="fw-bold mb-4" style="font-size: clamp(2rem, 4vw, 3rem);">
                    {{ $work->judul_anime }}
                </h1>

                <div class="row g-4 mt-2">
                    <div class="col-sm-6 col-md-4">
                        <div class="text-muted fw-semibold mb-1 fs-6">Release Season</div>
                        <div class="fw-bold fs-5 text-dark">{{ $work->musim_rilis }}</div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="text-muted fw-semibold mb-1 fs-6">Release Year</div>
                        <div class="fw-bold fs-5 text-dark">{{ $work->tahun_rilis }}</div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="text-muted fw-semibold mb-1 fs-6">Episodes</div>
                        <div class="fw-bold fs-5 text-dark">{{ $work->jumlah_episode }}</div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="text-muted fw-semibold mb-1 fs-6">Source Material</div>
                        <div class="fw-bold fs-5 text-dark">{{ $work->sumber_adaptasi }}</div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="text-muted fw-semibold mb-1 fs-6">Director</div>
                        <div class="fw-bold fs-5 text-dark">{{ $work->sutradara }}</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<style>
    .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    .object-fit-cover { object-fit: cover; }
</style>
@endsection