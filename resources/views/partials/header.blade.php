<header>
    <div class="container-fluid">
        <div class="row d-flex flex-row bg-blue">
            <div class="col-12 text-end">
                <a href="/" class="text-decoration-none mx-2 text-white"><span>DC POWER VISA</span></a><span></span>
                <a href="/" class="text-decoration-none mx-2 text-white"><span>ADDITIONAL DC SITES</span></a><span></span>
            </div>
        </div>
        <div class="row d-flex flex-row m-2">
            <div class="col-2 d-flex justify-content-end">
                <img src="{{Vite::asset('/resources/images/dc-logo.png')}}" alt="dc-logo">
            </div>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey {{Route::currentRouteName() === 'homepage' ? 'active': ''}}">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="{{ route('comic.index')}}" class="m-3 text-decoration-none text-grey">COMICS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">MOVIES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">TV</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">GAMES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">VIDEOS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">FANS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">NEWS</a>
                    </li>
                    <li>
                        <a href="/" class="m-3 text-decoration-none text-grey">SHOP</a>
                    </li>
                </ul>
            </div>

            <div class="col-2 d-flex align-items-center">
                <div class="search d-flex">
                    <input type="text" class="form-control bar" placeholder="Search">
                    <i class="fa fa-search align-self-center"></i>
                </div>
            </div>
        </div>
    </div>
</header>