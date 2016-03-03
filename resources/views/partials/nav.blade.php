<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">License MS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li {!! menuActiveRoute('home')  !!}><a href="{{ url('/home') }}">Home</a></li>
                <li {!! menuActiveRoute('license')  !!}><a href="{{ url('/license') }}">Trade License</a></li>
                <li {!! menuActiveRoute('worker')  !!}><a href="{{ url('/worker') }}">Workers</a></li>
                <li {!! menuActiveRoute('other')  !!}><a href="{{ url('/other') }}">Other</a></li>
                <li {!! menuActiveRoute('reports')  !!}><a href="{{ url('/reports') }}">Reports</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</nav>