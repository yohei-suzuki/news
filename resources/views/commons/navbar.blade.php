<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/">Index</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- search -->
                    <li>
                        <a href="#">
                            <form method="get" action="{{ route('news.search') }}">
                                {{ csrf_field() }}
                                <input type="test" name="word" value="{{ old('ward') }}">
                                <input type="submit" value="検索">
                            </form>
                        </a>
                    </li>
                    <!-- search end -->

                    <!-- user menu -->
                    @if (Auth::check())
                    <?php $user = Auth::user(); ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ $user->name }} 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.index') }}">mypage</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <li><a href="{{ route('login') }}">login</a></li>
                        <li><a href="{{ route('register') }}">regster</a></li>
                    @endif
                    <!-- user menu end -->
                </ul>
            </div>
        </div>
    </nav>
</header>