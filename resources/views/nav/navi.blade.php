@yield('contenttwo')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('event.index') }}">event <span class="sr-only">(current)</span></a>
      </li>
      <!--@auth()--> 
     @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">user</a>
      </li>
      @endif
      <!--@endauth--> 
      <li class="nav-item">
      <a class="nav-link" href="{{ route('galeri.index') }}">galeri <span class="sr-only">(current)</span></a>
      </li>
      
     
    </ul>
  </div>
</nav>