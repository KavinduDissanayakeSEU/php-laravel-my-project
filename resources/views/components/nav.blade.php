<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('product') }}">Products</a>
          </li>
          
          

          <li class="nav-item">
            @if (Auth::user())
            
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                               @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-jet-responsive-nav-link>
            </form>

            @else
            <span><a href="{{ route('login') }}"> Login</a></span>

            <span><a href="{{ route('register') }}"> Register</a></span>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>