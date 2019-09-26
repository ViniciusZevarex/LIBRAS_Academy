
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
    <script>
        $(document).ready(function() {
            var max_fields = 4; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click

                e.preventDefault();
                var length = wrapper.find("input:text").length;

                if (x <= max_fields) { //max input box allowed
                    x++; //text box increment
                $(wrapper).append("<div class='row' id='alternativa" + (length+1) + "'><div class='input-field col s10'><input id='title' type='text' name='alternativa[]'><label for='alternativa" + (length+1) + "'>Alternativa " + (length+1) +":</label></div> <a href='#' class='waves-effect waves-light btn-large col s1 red remove_field'><i class='material-icons right'>delete</i></a></div>"); //add input box
                }
            });

            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })

        });
    </script>
</body>    
</html>