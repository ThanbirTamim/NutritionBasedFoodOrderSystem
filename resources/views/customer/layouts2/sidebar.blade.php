<div class="sidenav">
    {{--admin der naam show er jonno side bar e Controller theke user naam ansi who login--}}
    <h4 style="color:white;font-family: Forte">{{ Auth::user()->name }}</h4><br><br>
    <a style="font-family: Forte" href="/">Main Home</a> {{-- eta diye user er  home e jabo--}}
    <a style="font-family: Forte" href="/customer">Food Menu</a> {{-- eta diye admin datbase er  home e jabo--}}
    <a style="font-family: Forte" href="/customer/cart">Your Food Store</a> {{-- eta diye admin datbase er  home e jabo--}}
    <a style="font-family: Forte" href="/customer/transaction">Your Transaction</a> {{-- eta diye admin datbase er  home e jabo--}}

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
