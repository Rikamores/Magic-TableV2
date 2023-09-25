  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Inicio Sesión</title>
    <link rel="icon" href="../asset/images/cubiertos.png" type="image/png">
</head>
<header>
  
    <a href="../index.php">
        <img src="../asset/images/logo_white.png" class="logo" alt="Magic Table Logo">
    </a>
   

<input type="checkbox" id="check">
<label for="check" class="mostrar-menu">&#8801</label>

<nav class="menu">
    <a href="./nosotros.php">Nosotros</a>
    <a href="restaurants.php">Restaurantes</a>
    <a href="#">Ordenar</a>
    <a href="inicio-Sesion.php">Inicio sesión</a>
    <label for="check" class="esconder-menu">
        &#215
    </label>
</nav>

</header>

<body class="background">

    

        <form class="form">
        <a href="./index.php">
        <img src="../asset/images/logo.png" class="logo" alt="Magic Table Logo">
    </a>
            <h2 class="formTitle">Inicia Sesión</h2>
            <p class="formParagraph">¿Aún no tienes una cuenta? <a href="registro.php">Creala Aquí</a></p>

            <div class="formContainer">
                
                <div class="formGroup">
                    <input type="user" id="user" class="formInput" 
                     minlength="6"  maxlength="10" placeholder=" ">
                    <label for="user" class="formLabel">Usuario:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="password" id="password" class="formInput" 
                    minlength="8"  required placeholder=" ">
                    <label for="password" class="formLabel">Contraseña:</label>
                    <span class="formLine"></span>
                </div>

                <input style="background-color:#001A57" type="submit" class="formSubmit" value="Entrar"> 

                <p class="formParagraph">¿Olvidaste tu contraseña? <a href="#">Recuperala Aquí</a></p>

            </div>

           
            
        </form> 
        <br>

</body>
<footer>
    
     <p > Correo electrónico: tu-correo@example.com </p>
</footer>



</html>
    
    
