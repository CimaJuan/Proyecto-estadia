
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="btn" style="background-color: #888b8d" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
