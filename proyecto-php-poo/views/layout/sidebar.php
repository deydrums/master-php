
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
             
            <?php if(isset($_SESSION['admin'])): ?>
            
            <li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
            <li><a href="#">Gestionar productos</a></li>
            <li><a href="#">Gestionar pedidos</a></li>
            
            <?php endif;?>

            <?php if (isset($_SESSION['identity'])): ?>
                <li><a href="#">Mis pedidos</a></li>
                <li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>

            <?php else: ?>  
                <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
            <?php endif; ?>


        </ul>

    </div>

</aside>
<!-- CONTENIDO CENTRAL -->
<div id="central">