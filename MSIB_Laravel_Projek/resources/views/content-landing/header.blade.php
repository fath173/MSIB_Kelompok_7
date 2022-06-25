<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('assets/landing/images/vaksin3.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">About <span>VaksinMed</span></div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('landing-home') }}">Home</a></li>
                                @if (Request::is('about'))
                                    <li>About Us</li>
                                @elseif (Request::is('search-kk'))
                                    <li>Search By KK</li>
                                @elseif (Request::is('search-nik'))
                                    <li>Search By NIK</li>
                                @else
                                    Search
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
