<li>
    <a href=" {{ route('operator.dashboard') }} "><i class="fa fa-home"></i>Dashboard</a>
</li>

<li>
    <a href=" {{ route('operator.jurusan') }} "><i class="fa fa-home"></i>Manajemen Jurusan</a>
</li>

<li>
    <a href=" {{ route('operator.alumni') }} "><i class="fa fa-graduation-cap"></i>Manajemen Alumni</a>
</li>

<li style="padding-left:2px;">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off text-danger"></i>{{__('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</li>
