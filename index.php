<!--
    Ceaser Cipher
    Created by: Jeremy Locatelli and Brandon Engholm
-->

<html>
    <head>
        <title>Ceaser Cipher</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="cipher2.js"></script>
    </head>
    
    <body>
        <style>
            @import url('css/styles.css');
        </style>
        <div class="jumbotron">
            <h1 class="display-3">Ceaser Cipher</h1>
            <hr class="my-4">
            <p class="lead">Caeser Cipher by: Haley Simmons, Jeremy Locatelli, and Brandon Engholm</p>
        </div>
        <form>
            Text:
            <input type="text" name="input" id="strBox" /><br>
            Offset for Cipher:
            <input type="number" name="offset" id="keyBox"/><br>
            Encrypt Text:
            <input type="radio" name="choice" value="encrypt" id="enc" />
            Decrypt Text:
            <input type="radio" name="choice" value="decrypt" id="dec" />
            <input type="button" onClick="executeCipher();" value="Execute" />
        </form>
        <div id="displayArea">
            <span id="displayBox"></span>
        </div>
        
    </body>
</html>

