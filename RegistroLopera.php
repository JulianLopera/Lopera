<?php include ("ConexionLopera.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>NO NODE.JS</title>
</head>
<body>
    <marquee behavior="scroll" direction="left" scrollamount="15"><h1>SING UP</h1></marquee>

<div id="formulario">
    <form action="save.php" method="POST">

            <h2>PLEASE SIGN UP</h2>
            <hr>

        <P>
            <input class="email" type="text" placeholder="Name" autocomplete="off" name="name">
        </P>    

        <p>
            <input type="text" placeholder="Lastname" autocomplete="off" name="lastname">
        </p>

        <p>
            <input class="email" type="email" placeholder=" Example123@gmail.com" autocomplete="off" name="email">
        </p>

        <p>
            <input class="email" type="password" placeholder=" Password" name="password">
        </p>

        <p>
            <input type="text" placeholder="Tel" maxlength="10" autocomplete="off" name="tel">
        </p>

        <p>
            <input id="fecha" type="date" name="date">
        </p>

        <p>
            <input type="text" placeholder="Id" autocomplete="off" name="id">
        </p>

        <button id="boton" type="submit" name="signup">Sign up</button>
    </form>
</div>

    <script src="script.js"></script>
</body>


</html>