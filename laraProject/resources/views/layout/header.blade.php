<div class="container">
    <div class="header">
        <div class="logo" style="display: inline-block; width: fit-content;"> 
            <a href="{{route('home')}}" title="Home"><img src="{{asset('images/logo.png')}}" alt="logo" width="210" height="80"/></a>
        </div>
        @auth    
            <div style="display: inline-block; width: 30%; float: right; margin-top: 0.7%; margin-right: 5%;">
                <button class="logout" style="display: inline-block; float: right;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Esci </button>
                <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <button class="user-option" style="display: inline-block; float: right;"><i class="fa fa-user"></i> ▼</button>
                <div class="option">
                    <button class="opt"><a href="{{ route('profile') }}" class="link-opt"><i class="fa fa-user" style="width: 20px; margin-left: 3px;"></i> I tuoi dati</a></button>
                    @can('isUser')
                    <form method="GET" action="{{route('amici')}}">
                        @csrf

                        <input type="hidden" name="id" value={{Auth::user()->id}}>
                        <button class="opt"><i class="fa fa-user-group" style="width: 20px; margin-left: 3px;"></i> I tuoi amici</button>
                    </form>
                    
                    <button class="opt"><a href="{{ route('miei_blog') }}" class="link-opt"><i class="fa fa-blog" style="width: 20px; margin-left: 3px;"></i> I tuoi blog</a></button>

                    <form method="POST" action="{{route('messaggi')}}">
                        @csrf
                        
                        <input type="hidden" name="id" value={{Auth::user()->id}}>
                        <button type="submit" class="opt"><i class="fa fa-message" style="width: 20px; margin-left: 3px;"></i> Ultimi messaggi</button>
                    </form>
                    @endcan
                    @can('isStaff')
    
                    @endcan
                    @can('isAdmin')

                    @endcan
    
                </div>
            </div>
            <div class="form_search">
                <form method="GET" action="{{route('cerca')}}">
                    <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                    <input type="text" placeholder="Search e-Friend" name="search" class="search">
                </form>
            </div>
        @endauth    
        @guest
            <div style="display: inline-block; float: right; width: 70%; margin-top: 1%;">
                <button class="sign-up" style="display: inline-block; float: right;"> Iscriviti </button>         
                <button class="sign-in" style="display: inline-block; float: right;"> Accesso </button>
            </div>       
        @endguest
    </div>
</div>