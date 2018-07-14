<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bus Tickating</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- bootswatch template css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
     <!-- Zebra Date picker CSS -->
    <link rel="stylesheet"  href="{{ asset('Zebra_Datepicker/dist/css/default/zebra_datepicker.min.css') }}" rel="stylesheet">

  <!-- Select2 CSS -->
  <link rel="stylesheet"  href="{{ asset('select2-4.0.6/dist/css/select2.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel"  >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Jovy Coaches') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @else
                        <ul class="navbar-nav mr-auto">
                        @inject('user', 'App\Http\Controllers\HomeController')
                        
                            
                            @if($user->is_admin())
                                <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('schedulelist') }}">Schedules</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('routelist') }}">routes</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('bookings') }}">Bookings </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('townlist') }}">Towns </a>
                                </li> 
                                
                            @else
                                <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('home') }}">home</a>
                                </li>
                            @endif
                        </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
 
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap Js -->
    
    <script src="{{ asset('vendorbootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendorbootstrap/js/bootstrap.min.js') }}"></script>


    <!-- DataTables JavaScript -->
<script>
$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true,
        drawCallback: function () {
            $('#dataTables-example_wrapper .row:last-child').addClass('mb-1 align-items-baseline');
        }
    });

     $('#dataTables-ex1').DataTable({
        responsive: true,
        drawCallback: function () {
            $('#dataTables-ex1_wrapper .row:last-child').addClass('mb-1 align-items-baseline');
        }
    });

     $('#dataTables-ex2').DataTable({
        responsive: true,
        drawCallback: function () {
            $('#dataTables-ex2_wrapper .row:last-child').addClass('mb-1 align-items-baseline');
        }
    });
});
</script>
<script type="text/javascript"src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/responsive.bootstrap4.js') }}"></script>
 <!-- Zebra Datepicker JavaScript -->
<script type="text/javascript" src="{{ asset('Zebra_Datepicker/dist/zebra_datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Zebra_Datepicker/custom.js') }}"></script>

 <!-- select2 JavaScript -->
<script type="text/javascript" src="{{ asset('select2-4.0.6/dist/js/select2.min.js') }}"></script>


<script>
function matchCustom(params, data) {
    // If there are no search terms, return all of the data
    if ($.trim(params.term) === '') {
      return data;
    }

    // Do not display the item if there is no 'text' property
    if (typeof data.text === 'undefined') {
      return null;
    }

    // `params.term` should be the term that is used for searching
    // `data.text` is the text that is displayed for the data object
    if (data.text.indexOf(params.term) > -1) {
      var modifiedData = $.extend({}, data, true);
      modifiedData.text += ' (matched)';

      // You can return modified objects from here
      // This includes matching the `children` how you want in nested data sets
      return modifiedData;
    }

    // Return `null` if the term should not be displayed
    return null;
}

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();

});
</script>
</body>
</html>
