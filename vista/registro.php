<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Regístrate</title>
    <link rel="icon" href="../asset/images/cubiertos.png" type="image/png">
</head>
<header>
    <div id="logo-div">
        <a href="../index.php">
        <img src="../asset/images/logo_white.png" class="logo">
        </a>
    </div>
    
    <input type="checkbox" id="check">
    <label for="check" class="mostrar-menu">
        &#8801
    </label>
    <nav class="menu">
        <a href="./nosotros.php">Nosotros</a>
        <a href="restaurants.php">Restaurantes</a>
        <a href="#">Ordenar</a>
        <a href="inicio-Sesion.php">Inicia sesión</a>
        <label for="check" class="esconder-menu">
            &#215
        </label>
    </nav>
</header>

<body class="background">

        <form class="form">
        <img src="../asset/images/logo.png" class="logo" alt="Magic Table Logo">
            <h2 class="formTitle">Regístrate</h2>
            <p class="formParagraph">¿Ya tienes una cuenta? <a href="inicio-Sesion.php">Inicia sesión</a></p>

            <div class="formContainer">

                <div class="formGroup">
                    <input type="text" id="name" class="formInput" 
                      required placeholder=" ">
                    <label for="name" class="formLabel">Nombre y Apellidos:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="tel" id="Telefono" class="formInput" 
                    required="" placeholder=" " pattern="[0-9]+" minlength="10" maxlength="10" >
                    <label for="user" class="formLabel">Telefono:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="email" id="email" class="formInput" 
                    required placeholder=" ">
                    <label for="user" class="formLabel">Correo:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="date" id="birthday" class="formInput" 
                      required placeholder=" ">
                    <label for="birthday" class="formLabel">Fecha de Cumpelaños:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="text" id="userName" class="formInput" 
                      required placeholder="">
                    <label for="userName" class="formLabel">Usuario:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="password" id="password" class="formInput"
                    required="" minlength="8"  placeholder=" ">
                    <label for="password" class="formLabel">Contraseña:</label>
                    <span class="formLine"></span>
                </div>

                <div class="formGroup">
                    <input type="password" id="passwordConfirm" class="formInput" 
                    requiered="" minlength="8" placeholder=" ">
                    <label for="password" class="formLabel">Confirmar contraseña:</label>
                    <span class="formLine"></span>
                </div>

                <input style="background-color:#001A57" type="submit" class="formSubmit" value="Registrarse"> 

            </div>

 
        </form>
        <br>

</body>
<footer>

     <p > Correo electrónico: tu-correo@example.com </p>
</footer>

</html>
