<div>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: calc(100vh - 60px);">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <p class="fs-2 fw-semibold mb-0 animate-fade-in">Boardmate</p>
                <p class="fs-6 fw-medium mt-0 mb-0 animate-fade-in" style="animation-delay: 0.1s;">Connecting tenants with safe and convenient boarding homes.</p>
                <p class="fs-6 fw-medium mt-0 animate-fade-in" style="animation-delay: 0.2s;">Discover more rental options across our available locations <i class="bi bi-geo-alt"></i>.</p>

                <div class="d-flex gap-2 flex-wrap animate-fade-in" style="animation-delay: 0.3s;">
                    <x-buttons.button-dark>
                        Get Started
                    </x-buttons.button-dark>

                    <x-buttons.button-outline-dark>
                        Explore
                    </x-buttons.button-outline-dark>
                </div>

                <!-- Feature -->
                <div class="d-flex flex-wrap gap-2 justify-content-start mt-3">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-white border border-success rounded feature-box shadow-sm animate-float" style="animation-delay: 0.4s;">
                        <i class="bi bi-shield-check feature-icon text-success"></i>
                        <span class="fw-medium feature-label">Safe &amp; Secure</span>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-white border border-primary rounded feature-box shadow-sm animate-float" style="animation-delay: 0.5s;">
                        <i class="bi bi-search feature-icon text-primary"></i>
                        <span class="fw-medium feature-label">Easy Search</span>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-white border border-info rounded feature-box shadow-sm animate-float" style="animation-delay: 0.6s;">
                        <i class="bi bi-people feature-icon text-info"></i>
                        <span class="fw-medium feature-label">Trusted Community</span>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-white border border-warning rounded feature-box shadow-sm animate-float" style="animation-delay: 0.7s;">
                        <i class="bi bi-phone feature-icon text-warning"></i>
                        <span class="fw-medium feature-label">24/7 Support</span>
                    </div>
                </div>
                
                <!-- Platforms -->
                <div class="d-flex flex-column gap-2 mt-3 animate-fade-in" style="animation-delay: 0.8s;">
                    <span class="small fw-medium">Connect with us.</span>
                    <div class="d-flex gap-2 flex-wrap">
                        <x-buttons.button-dark>
                            <i class="bi bi-threads"></i> <span class="d-none d-sm-inline">Threads</span>
                        </x-buttons.button-dark>

                        <x-buttons.button-dark>
                            <i class="bi bi-meta"></i> <span class="d-none d-sm-inline">Meta</span>
                        </x-buttons.button-dark>

                        <x-buttons.button-dark>
                            <i class="bi bi-twitter-x"></i> <span class="d-none d-sm-inline">Twitter</span>
                        </x-buttons.button-dark>

                        <x-buttons.button-dark>
                            <i class="bi bi-instagram"></i> <span class="d-none d-sm-inline">Instagram</span>
                        </x-buttons.button-dark>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="row g-2 d-none d-md-flex animate-float" style="animation-delay: 0.9s;">
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <img src="{{asset('images/image1.png')}}" alt="Property 1"
                            class="img-fluid border border-dark rounded w-100"
                            style="height: 340px; max-height: 340px; object-fit: cover;" />
                    </div>
                    <div class="col-12 col-sm-6 d-flex flex-column justify-content-between gap-2">
                        <img src="{{asset('images/image2.webp')}}" alt="Property 2"
                            class="img-fluid border border-dark rounded w-100"
                            style="height: 165px; object-fit: cover;" />
                        <img src="{{asset('images/image3.jpeg')}}" alt="Property 3"
                            class="img-fluid border border-dark rounded w-100"
                            style="height: 165px; object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* small, consistent feature boxes */
        .feature-box {
            width: 96px;
            height: 96px;
            padding: .4rem;
        }

        .feature-icon {
            font-size: 1.25rem;
            margin-bottom: .25rem;
        }

        .feature-label {
            font-size: .75rem;
            line-height: 1;
        }

         /* Fade-in animation - sharp */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            opacity: 0;
        }

        /* Floating animation - sharp */
        @keyframes floatIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: floatIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
        }

        /* Mobile adjustments */
        @media (max-width: 576px) {
            .feature-box {
                width: 80px;
                height: 80px;
                padding: .3rem;
            }

            .feature-icon {
                font-size: 1rem;
                margin-bottom: .15rem;
            }

            .feature-label {
                font-size: .65rem;
            }
        }
    </style>
</div>