<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{url('feed')}}">
        <img src="images/allonsyyy.png" class="img-responsive navbar-brand"/>
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('userprofile')}}">User Profile </a></li>
        {{ $company or $company = false}}
        @if($company != false)<li><a href="{{url('/company')}}"><div class="row">{{ $company->name }}</div></a></li>
        @endif
          
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/settings')}}">Settings</a></li>
            <li><a href="{{ url('company/create') }}">Create a company</a></li>

            <li class="divider"></li>
           <!-- <li><a href="javascript:;">Logout</a></li> -->

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
{{--             
            <li><a href="javascript:;">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">One more separated link</a></li> --}}
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-center" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <!--<ul class="nav navbar-nav ">
        <li><a href="javascript:;">Link</a></li>
      </ul>-->
    </div>
  </div>
</nav>

