<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('assets/landing/images/about.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">About <span>CareMed</span></div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('landing-home') }}">Home</a></li>
                                <li>{{ Request::is('about') ? 'About Us' : '' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
