
<!-- BARRA LATERAL -->
<aside id = "lateral">
    <div id = "login" class = "block_aside">
        <?php if(!isset($_SESSION['identity'])): ?>

        
        <h3>Entrar a la web</h3>
        <form action="<?=base_url?>usuario/login" method = "POST">
            <label for="email">E-mail</label>
            <input type="email" name="email">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">

        </form>
        <?php else: ?>    
            <h3><?="Hola de nuevo, <br>".$_SESSION['identity']->nombre." ".$_SESSION['identity']->apellidos?></h3>
        <?php endif; ?>

        <ul>
            <li><a href="#">Mis pedidos</a></li>
            <li><a href="#">Gestionar pedidos</a></li>
            <li><a href="#">Gestionar categorias</a></li>
        </ul>

    </div>

</aside>
<!-- CONTENIDO CENTRAL -->
<div id="central">