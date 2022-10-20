<div class="container">
    <div class="header">
        <div class="logo"> 
            <a href="{{route('home')}}" title="Home"><img src="{{asset('images/logo.png')}}" alt="logo" width="210" height="80"/></a>
        </div>
        @auth    
            <div class="form_search">
                <form method="GET" action="{{route('cerca')}}">
                    @csrf
                    <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="Search e-Friend" name="search" class="search">
                </form>
            </div>
            <button class="user-option"><i class="fa fa-user"></i> ▼</button>
            <div class="option">
                <button class="opt"><a href="{{ route('profile') }}" class="link-opt"><i class="fa fa-user" style="width: 20px; margin-left: 3px;"></i> I tuoi dati</a></button>
                <button class="opt"><i class="fa fa-user-group" style="width: 20px; margin-left: 3px;"></i> I tuoi amici</button>
                <button class="opt"><i class="fa fa-blog" style="width: 20px; margin-left: 3px;"></i> I tuoi blog</button>
                <button class="opt"><i class="fa fa-message" style="width: 20px; margin-left: 3px;"></i> Ultimi messaggi</button>
            </div>
            <button class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Esci </button>
            <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth    
        @guest
            <button class="sign-in"> Accesso </button>
            <button class="sign-up"> Iscriviti </button>                  
        @endguest
    </div>
</div>