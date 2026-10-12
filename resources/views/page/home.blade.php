@extends('layouts.app')
@vite(['resources/css/home.css'])
@section('title', 'Home')

@section('content')
    <div class="row align-items-center" style="min-height: 85vh; ">
        <div class="col-md-5">
            <div class="text-banner">
                <h1 class="fw-bold" style="font-size: 3rem; color: rgb(65, 88, 194);">{{ $textBanner['title'] }}</h1>
                <h4 class="fw-bold">{{ $textBanner['subtitle'] }}</h4>
                <p class="my-3 text-muted" style="text-align: justify; width: 80%;">{{ $textBanner['description'] }}</p>
            </div>
        </div>

        <div class="col-md-7 position-relative">
            <div id="slide-bg-1" class="banner-bg" style="background-image: url('{{ $banners[0]['image'] }}'); opacity: 0.65;"></div>
            <div id="slide-bg-2" class="banner-bg" style="background-image: url('{{ $banners[1]['image'] }}'); opacity: 0;"></div>
            
            <div class="slide-indicator">
                <span id="slide-title" class="fw-bold text-muted">{{ $banners[0]['title'] }}</span>
                <div class="d-flex gap-2 mt-2">
                    <div class="indicator-line"><div class="indicator-progress" id="progress-0"></div></div>
                    <div class="indicator-line"><div class="indicator-progress" id="progress-1"></div></div>
                    <div class="indicator-line"><div class="indicator-progress" id="progress-2"></div></div>
                </div>
            </div>

            <div class="poster-container">
                <img src="{{ asset('images/Lycoris Recoil.jpg') }}" class="poster poster-1 shadow-lg rounded-3" alt="Poster 1">
                <img src="{{ asset('images/Make Heroine ga Oosugiru!.jpg') }}" class="poster poster-2 shadow-lg rounded-3" alt="Poster 2">
                <img src="{{ asset('images/High School Fleet Movie.jpg') }}" class="poster poster-3 shadow-lg rounded-3" alt="Poster 3">
                <img src="{{ asset('images/Hachigatsu no Cinderella Nine PV.jpg') }}" class="poster poster-4 shadow-lg rounded-3" alt="Poster 4">
            </div>
        </div>
    </div>

    <div class="my-5" style="padding-top: 5rem;">
        <div class="text-center">
            <h4 class="text-muted fw-bold">LIST WORKS</h4>
        </div>
        <div class="d-flex flex-nowrap overflow-x-auto" style="padding-top: 2rem;">
            @foreach ($works as $work)
                <div class="col-4 col-md-2 mx-2 card-container">
                    <div class="card h-100 box-shadow">
                        <img src="images/{{ $work->nama_file_gambar }}" class="card-img-top" alt="{{ $work->title }} Poster" style="object-fit: cover; height: 100%;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h4 class="fw-bold mb-4 border-start border-4 border-primary ps-3 text-uppercase">UPCOMING</h4>
                
                <div class="card border-0 shadow-sm p-3 p-md-4 rounded-4 fade-in-up">
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-md-4 col-lg-3">
                            <img src="{{ asset('images/msl4.png') }}"
                                alt="Mashle: Sanma Taisou Shinkakusha Saishuu Shiken-hen"
                                class="img-fluid rounded-3 shadow-sm w-100 object-fit-cover"
                                style="max-height: 380px;">
                        </div>
                        
                        <div class="col-12 col-md-8 col-lg-9 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary px-3 py-2 rounded-pill">A-1 Pictures</span>
                                    <span class="badge bg-dark px-3 py-2 rounded-pill">2027</span>
                                </div>
                                
                                <h4 class="fw-bold text-dark mb-1">Mashle: Sanma Taisou Shinkakusha Saishuu Shiken-hen</h4>
                                <p class="text-muted small mb-3">Third season of Mashle</p>
                                <hr class="my-3 text-secondary opacity-25">
                                
                                <p class="text-secondary lh-base mb-0" style="text-align: justify;">
                                    Mashle: Season 3 (Sanma Taisou Shinkakusha Saishuu Shiken-hen) follows Mash Burnedead as he faces the Divine Visionary Final Exam, a fierce competition between three elite magic schools. While Mash relies on his muscle power to secure the title, the villainous organization Innocent Zero launches a full-scale assault to capture him. Produced by A-1 Pictures, the anime is scheduled to premiere in January 2027.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="d-flex align-items-center mb-4">
                    <h2 class="fw-bold text-primary mb-0">NEWS</h2>
                </div>

                <div class="list-group list-group-flush border-top border-bottom">
                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">We will participate in the "Entertainment Industry Research Expo Vol.2" on August 31, 2026!</h6>
                            <small class="text-muted">2026.08.24</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Notice regarding management enhancement and 2nd batch recruitment for animation studio "FLINT BASE"</h6>
                            <small class="text-muted">2026.08.21</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">[Important Warning] Please beware of suspicious emails impersonating our company name</h6>
                            <small class="text-muted">2026.08.18</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">[Career Recruitment] Career mid-service recruitment has started for 7 job types!</h6>
                            <small class="text-muted">2026.07.31</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">ANIME EXPO 2026 Event Report Published!</h6>
                            <small class="text-muted">2026.07.24</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 px-0 d-flex justify-content-between align-items-center border-bottom text-decoration-none">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">[2027 New Graduate Recruitment] Entry applications are now closed</h6>
                            <small class="text-muted">2026.05.15</small>
                        </div>
                        <i class="bi bi-play-fill text-primary fs-5 ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = @json($banners);
        
        let currentIndex = 0;
        let activeBg = 1;
        
        const bg1 = document.getElementById('slide-bg-1');
        const bg2 = document.getElementById('slide-bg-2');
        const titleElement = document.getElementById('slide-title');
        
        const progresses = [
            document.getElementById('progress-0'),
            document.getElementById('progress-1'),
            document.getElementById('progress-2')
        ];

        function startProgress() {
            progresses.forEach(p => {
                p.style.transition = 'none';
                p.style.width = '0%';
            });
            
            setTimeout(() => {
                progresses[currentIndex].style.transition = 'width 4.9s linear';
                progresses[currentIndex].style.width = '100%';
            }, 50);
        }

        function nextSlide() {
            titleElement.style.opacity = 0;
            currentIndex = (currentIndex + 1) % slides.length;
            
            const nextBg = activeBg === 1 ? bg2 : bg1;
            const currentBg = activeBg === 1 ? bg1 : bg2;
            
            nextBg.style.backgroundImage = `url('${slides[currentIndex].image}')`;
            nextBg.style.opacity = 0.65;
            currentBg.style.opacity = 0;
            
            activeBg = activeBg === 1 ? 2 : 1;

            setTimeout(() => {
                titleElement.textContent = slides[currentIndex].title;
                titleElement.style.opacity = 1;
            }, 500);

            startProgress();
        }

        startProgress();
        setInterval(nextSlide, 5000);
    });
</script>
@endsection