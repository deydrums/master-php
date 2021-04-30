<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">
        <!-- CABECERA -->
        <header id = "header">
            <div id = "logo">
                <img src="assets/images/camiseta.png" alt="Camiseta LOGO"/>
            
                <a href="index.php">
                    <h1>Tienda de camisetas</h1>
                </a>
                
            </div>
        </header>
        <!-- MENU -->
        <nav id = "menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Categoria 5</a>
                </li>
                <li>
                    <a href="index.php">Categoria 6</a>
                </li>
            </ul>

        </nav>
        <div id="content">
        <!-- BARRA LATERAL -->
        <aside id = "lateral">
            <div id = "login" class = "block_aside">
                <h3>Entrar a la web</h3>
                <form action="" method = "POST">
                    <label for="email">E-mail</label>
                    <input type="email" name="email">

                    <label for="password">Password</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>

                </form>
            </div>

        </aside>
        <!-- CONTENIDO CENTRAL -->
        <div id="central">
            <h1>Productos destacados</h1>
            <div class="product">
                <img src="assets/images/camiseta.png" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/images/camiseta.png" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/images/camiseta.png" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
        </div>
        <!-- PIE DE PAGINA -->
        <footer id="footer">
            <p>Desarrollado por David Garcia &copy; <?=date('Y')?> </p>
        </footer>
        </div>
    </div> <!-- fin contenedor-->
</body>
</html>