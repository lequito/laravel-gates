<x-layouts.main-layout>
    <div class="container">
        <div class="row">
            <div class="col">

                <ul class="display-6">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        @can('userIsAdmin')
                            <li><a href="{{route('only_admin') }}">Somente admins</a></li>    
                        @endcan

                        @can('userIsUser')
                            <li><a href="{{ route('only_users') }}">Somente usuários</a></li>    
                        @endcan
                    @endguest
                </ul>
            </div>
        </div>
   
        <div class="row">
            <div class="col">
                @can('userIsAdmin')
                    <p>Admin</p>
                @endcan
    
                @can('userIsAdmin')
                    <p>Admin</p>
                @else
                    <p>User sem privilégio</p>
                @endcan
    
                @cannot('userIsAdmin')
                    <p>OK</p>
                @endcannot
            </div>
        </div>

        @canany(['userIsAdmin', 'userIsUser'])
            <p>Olá!</p>
        @endcanany
    </div>


    

    
</x-layouts.main-layout>
