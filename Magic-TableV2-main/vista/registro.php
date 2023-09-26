<?php require ('./layout/header.php')?>

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
<?php require ('./layout/footer.php')?>

</html>
