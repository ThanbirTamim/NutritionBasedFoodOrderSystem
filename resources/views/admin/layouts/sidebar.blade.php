<div class="sidenav">
    {{--admin der naam show er jonno side bar e Controller theke user naam ansi who login--}}
    <h4 style="color:white;font-family: Forte">{{ Auth::user()->name }}</h4><br><br>
    <a style="font-family: Forte" href="/">Visit Site</a> {{-- eta diye user er  home e jabo--}}
    <a style="font-family: Forte" href="/home">Dashboard</a> {{-- eta diye admin datbase er  home e jabo--}}
    <a style="font-family: Forte" href="/data/create">Add Item</a> {{-- eta diye admin kono item add korte parbe  --}}
    <a style="font-family: Forte" href="/data">All Food</a> {{-- eta diye admin all food item dekte parbe  --}}
    <a style="font-family: Forte" href="/clientsorder">Clients Order</a>
    <a style="font-family: Forte" href="/admininfo2">All Admin</a>
    <a style="font-family: Forte" href="/aboutsection">About Section</a>
    <a style="font-family: Forte" href="/aboutsection/create ">About Store</a>
    <a style="font-family: Forte" href="/videosection">Video Section</a>
    <a style="font-family: Forte" href="/videosection/create">Video Store</a>

    {{--for logout--}}
    <a style="color: red; font-family: Forte" href="{{ route('logout') }}"
       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>




</div>
