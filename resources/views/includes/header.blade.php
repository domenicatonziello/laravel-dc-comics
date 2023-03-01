<header>
    <div class="info"></div>
    <div class="container navbar">
        <div class="nav-left">
            <a href="{{route('home')}}">
                <img src="{{ asset('dc-logo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="nav-center">
            <ul>    
                    <li> <a href="#"> Characters </a> </li>
                    <li class="{{ request()->routeIs('comics*') ? 'active' : ''  }}"> <a href="{{ route('comics.index') }}"> Comics </a> </li>
                    <li> <a href="#"> Movie </a> </li>
                    <li> <a href="#"> Tv </a> </li>
                    <li> <a href="#"> Games </a> </li>
                    <li> <a href="#"> Collectibles</a> </li>
                    <li> <a href="#"> Videos</a> </li>
                    <li> <a href="#"> Fans </a> </li>
                    <li> <a href="#"> News </a> </li>
                    <li> <a href="#"> Shop </a> </li>
            </ul>
        </div>
        <div class="nav-right">
            <input type="search" placeholder="Search"> 
        </div>
    </div>
</header>