<x-layouts.main-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                @guest
                    <ul>
                        <li><a href="{{ route('login')}}">Login</a></li>
                    </ul>
                @endguest
            </div>
        </div>
    </div>
</x-layouts.main-layout>