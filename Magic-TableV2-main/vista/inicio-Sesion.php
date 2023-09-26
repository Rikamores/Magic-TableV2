<?php require ('./layout/header.php')?>

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

<?php require ('./layout/footer.php')?>

</html>
    
    
