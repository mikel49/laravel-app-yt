<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>{{ config('app.name', 'Application Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css"
          integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
   <!-- Liaisons aux fichiers css de Bootstrap -->
	<!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet" />-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.js') }}" rel="stylesheet">
</head>
<body>
    
        
            @include('inc.navbar')

            
            <div class="container">
                @include('inc.errorsuccess')
                @yield('content')
            </div>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
