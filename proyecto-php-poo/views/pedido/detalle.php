<h1>Detalle del pedido</h1>

<?php if(isset($pedido)): ?>
        <h3>Direccion del envio</h3>
        Provincia: <?=$pedido->provincia?> <br>
        Ciudad: <?=$pedido->localidad?> <br>       
        Direccion: <?=$pedido->direccion?> <br>     
        <br>  
        <h3>Datos del pedido</h3>
        Numero de pedido: <?=$pedido->id?> <br>
        Total a pagar: Q.<?=$pedido->coste?> <br>
        Productos: <br>
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while($producto = $productos->fetch_object()): ?>
                <tr>
                    <td>            
                        <?php if($producto->imagen != null): ?>
                            <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito" />
                        <?php else: ?>
                            <img src="<?=base_url?>assets/images/camiseta.png" class="img_carrito"/>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
                    </td>
                    <td>
                        <?=$producto->precio?>
                    </td>       
                    <td>
                        <?=$producto->unidades?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

<?php endif; ?>