<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>IST 351</title>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="ist351index.css">
    <script>
        var i = 0;
        var txt = "Senior from Macon, avid coffee drinker and music lover.";
        var speed = 30;

        function typewriter() {
            if (i < txt.length) {
                document.getElementById("animatedtext").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typewriter, speed);
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="one-half column" style="margin-top: 25%; width: 50%;float: left;">
                <h4>Gabriel Jones</h4>
                <h2>IST 351 Fall 2018</h2>
                <p>Details<button style="margin-left:1rem" onclick="typewriter()">?</button></p>
                <p id="animatedtext"></p>
                <br>
                <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwebclass.cs.mercer.edu%2F~jones_gt%2F"><img src="http://www.w3.org/Icons/valid-html401-blue" alt="icon_w3">
                </a>
                <p>This page is HTML compliant.</p>
            </div>
            <div class="one-half column" style="margin-top: 25%; float:right; width: 50%;">
                <h4>HW1: Webclass Setup</h4>
                <h5>[<a href="/~jones_gt">Link</a>]</h5>
        <br>
                <h4>HW2: Restaurant with JS</h4>
                <h5>[<a href="/~jones_gt/Restaurant">Link</a>]</h5>
        <br>
                <h4>HW3: PHP Loops and Functions</h4>
                <h5>[<a href="/~jones_gt/phpMathTables">Link</a>]</h5>
        <br>
            </div>
        </div>
    </div>
</body>

</html>
