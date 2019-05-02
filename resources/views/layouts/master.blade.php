
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
 <!--Import materialize.css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>

 <!--Let browser know website is optimized for mobile-->
 <meta charset=utf-8>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="@yield('class-body')">
    @yield('nav')
    
    @yield('conteudo-view')


    @yield('footer')
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>    
</html>