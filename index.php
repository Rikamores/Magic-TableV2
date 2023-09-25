<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="icon" href="./asset/images/cubiertos.png" type="image/png">
    <title>Magic Table</title>
</head>

<header>
  
    <a href="./index.php">
        <img src="./asset/images/logo_white.png" class="logo" alt="Magic Table Logo">
    </a>
   
    <input type="checkbox" id="check">
    <label for="check" class="mostrar-menu">&#8801</label>

    <nav class="menu">
        <a href="./vista/nosotros.php">Nosotros</a>
        <a href="./vista/restaurants.php">Restaurantes</a>
        <a href="#">Ordenar</a>
        <a href="./vista/inicio-Sesion.php">Inicio sesión</a>
        <label for="check" class="esconder-menu">  &#215 </label>
    </nav>

</header>

<body class="background">
    <button style="background-color:#C0C0C0" class="botton-reserva" 
            onclick="window.location.href='./asset/vista/restaurants.html'">Realiza tu orden ya !</button>
        <div class="content">
            <div>
                 <img src="./asset/images/welcome-font.png" class="welcome-font" alt="Welcome Font" >
            </div>
             

        </div>
</body>

<footer>
    <p>Correo electrónico: tu-correo@example.com</p>
</footer>

</html>
