<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">

    <title>SimSac | Login</title>
</head>
<body>
    <div class="bg-container">
        <div class="ventana">
            <div class="contexto">
                <h2>inicia sesion</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem autem, molestias voluptates dolores, voluptatem impedit, blanditiis consequuntur quo atque omnis architecto quisquam ex at! Mollitia veniam repellat magnam voluptates ad.</p>
                <a href="">Lee mas sobre nosotros</a>
            </div>
            <div class="login">

                <form class="cont" method="POST" action="actions/validar.php">
                    <h2>Login</h2>

                    
                    <div class="entradas">
                        <div class="elementos">
                            <span>NOMBRE</span>
                            <input type="text" name="nombre" placeholder="nombre" id="">    
                        </div>
                        
                        <div class="elementos">
                            <span>CONTRASEÑA</span>
                            <input type="text" name="pass"placeholder="contraseña" id="">    
                        </div>
                        
                    </div>
 
                    <div class="acciones">
                        <input type="submit">
                        <a href="">Registrarse</a>
                    </div>
                    
                </form>



            </div>
           
        </div>
        <img src="img/fondo.jpg" alt="">
    </div>
</body>
</html>