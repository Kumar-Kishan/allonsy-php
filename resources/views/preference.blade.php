@section('navbar_content')
<li><form class="navbar-form" action="{{ url('/bloodrequests/search')}}" method="POST">
    <div class="input-group">
        {{csrf_field()}}
        <input type="text" class="form-control" name="query" placeholder="Search">
        <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
        </button>
        </div>
    </div>
</form></li>
<li>
    <a href="{{ url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ url('/logout')}}" method="POST" style="display:none">
    {{ csrf_field()}}
    </form>
</li>
@endsection