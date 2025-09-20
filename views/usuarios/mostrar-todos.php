<h1>listado de usuarios </h1>

<?php while ($usuario=$todos_los_usuarios->fetch_object()): ?>
<?= $usuario->nombre ?>
<?php endwhile; ?>


<!-- como ocurre :

1) en el controlador  llamados el model
2) ejecuto el codigo que necesito ( en este caso conseguir_todos)
3) por ultimo llamo la vista para mostrar   -->