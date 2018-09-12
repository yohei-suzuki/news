@if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }} 
        
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
@else
    <a href="{{ route('login') }}">login</a>
@endif