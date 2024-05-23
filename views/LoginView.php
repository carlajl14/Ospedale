<?php

class LoginView {
    public function showInformation() {
        echo '<div class="py-16 overflow-hidden lg:py-24 index">
            <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="relative">
                    <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight texto sm:text-6xl">Controla de manera fácil y sencilla tus citas médicas</h2>
                    <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">Con esta aplicación será más fácil acceder a tus citas médicas, tus pruebas, tus medicamentos y mucho más!</p>
                </div>
            </div>
        </div>';
    }
    
    public function showLogin() {
        echo '<main class="container mx-auto flex">
            <div class="container">
                <div class="card" id="card" onmousemove="transformation(event)" onmouseout="stablecard()">
                    <h3 class="title" id="title">Ospedale</h3>
                </div>
            </div>
            <div class="wrapper">
                <div class="bg-animate" id="bg-animate"></div>
                <div class="curved" id="curved"></div>
                <div class="form-wrapper sign-in">
                    <form action="index.php?controller=Login&action=verificarDatos" method="POST">
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
                            <a href="pages/RegisterUser.php">Crear Cuenta</a>
                        </div>
                        <button class="button" type="submit" name="login">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </main>';
    }
}


