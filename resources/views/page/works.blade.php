@extends('layouts.app')
@section('title', 'Project')

@section('content')
<div class="container py-1 pb-5">
    
    <div class="mb-4 fade-in-up text-center text-md-start">
        <h4 class="fw-bold" style="font-size: 1.8rem; color: rgb(65, 88, 194); letter-spacing: 2px;">WORKS</h4>
    </div>

    <form action="{{ url()->current() }}" method="GET" class="mb-5 fade-in-up" id="filterForm">
        <div class="row g-3 justify-content-center">
            
            <div class="col-12 col-md-6">
                <input type="text" name="search" id="searchInput" class="form-control rounded-3 shadow-sm border-0 bg-light" placeholder="Search anime title..." value="{{ request('search') }}">
            </div>
            
            <div class="col-12 col-md-3">
                <select name="musim" id="musimSelect" class="form-select rounded-3 shadow-sm border-0 bg-light">
                    <option value="">All Seasons</option>
                    @foreach($musims as $m)
                        <option value="{{ $m }}" {{ request('musim') == $m ? 'selected' : '' }}>{{ $m }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-12 col-md-3">
                <select name="tipe" id="tipeSelect" class="form-select rounded-3 shadow-sm border-0 bg-light">
                    <option value="">All Types</option>
                    @foreach($tipes as $t)
                        <option value="{{ $t }}" {{ request('tipe') == $t ? 'selected' : '' }}>{{ $t }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>
    </form>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        @forelse($works as $work)
            <div class="col fade-in-up">
                <a href="{{ route('project.detail', $work->id) }}" class="text-decoration-none">
                    <div class="card bg-transparent border-0 h-100 poster-card" style="cursor: pointer;">
                        <div class="overflow-hidden position-relative rounded-3 shadow-sm" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('images/' . $work->nama_file_gambar) }}"
                                class="img-fluid w-100 h-100 object-fit-cover"
                                style="transition: transform 0.4s ease, filter 0.4s ease;"
                                onmouseover="this.style.transform='scale(1.08)'; this.style.filter='brightness(0.7)';"
                                onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';"
                                alt="{{ $work->judul_anime }}">
                            
                            <div class="position-absolute top-0 start-0 p-2">
                                <span class="badge bg-danger shadow-sm" style="font-size: 0.7rem;">{{ $work->tipe }}</span>
                            </div>
                            
                            <div class="position-absolute bottom-0 start-0 w-100 p-2 bg-dark bg-opacity-75 text-white" style="backdrop-filter: blur(4px);">
                                <div class="fw-bold mb-1 text-truncate" title="{{ $work->judul_anime }}" style="font-size: 0.85rem;">{{ $work->judul_anime }}</div>
                                <div class="text-light fw-medium" style="font-size: 0.75rem;">{{ $work->musim_rilis }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h5 class="text-muted fw-bold mt-4">No works found matching your criteria.</h5>
                <a href="{{ url()->current() }}" class="btn btn-outline-primary mt-3 rounded-pill px-4">Reset Filter</a>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-5 fade-in-up">
        {{ $works->links('pagination::bootstrap-5') }}
    </div>

</div>

<style>
    .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .object-fit-cover { object-fit: cover; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('filterForm');
        const searchInput = document.getElementById('searchInput');
        const musimSelect = document.getElementById('musimSelect');
        const tipeSelect = document.getElementById('tipeSelect');

        musimSelect.addEventListener('change', function() {
            form.submit();
        });

        tipeSelect.addEventListener('change', function() {
            form.submit();
        });

        let typingTimer;
        const doneTypingInterval = 500;

        searchInput.addEventListener('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(function() {
                form.submit();
            }, doneTypingInterval);
        });

        const end = searchInput.value.length;
        searchInput.setSelectionRange(end, end);
        searchInput.focus();
    });
</script>
@endsection