<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ospedale</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/loginstyle.css"/>
        <link rel="stylesheet" href="css/cardstyle.css"/>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <main class="container mx-auto flex">
            <div class="container">
                <div class="card" id="card" onmousemove="transformation(event)" onmouseout="stablecard()">
                    <h3 class="title" id="title">Ospedale</h3>
                </div>
            </div>
            <div class="wrapper">
                <div class="bg-animate" id="bg-animate"></div>
                <div class="curved" id="curved"></div>
                <div class="form-wrapper sign-in">
                    <form action="#" method="POST">
                        <h1 class="text-center text-3xl pb-10 text-white">Ospedale</h1>
                        <p class="text-center text-2xl text-white">Sign In</p>
                        <div class="input-box">
                            <input type="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="forgot-pass">
                            <a href="#" class="mr-7">¿Olvidaste tu contraseña?</a>
                            <a href="#">Crear Cuenta</a>
                        </div>
                        <button class="button" type="submit">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">Ospdale - Todos los derechos reservados
        <?php echo date('Y'); ?>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/cardscript.js"></script>
</body>
</html>
