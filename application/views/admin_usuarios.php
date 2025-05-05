<h2>Lista de Usuarios</h2>

<?php if ($mensaje): ?>
    <p><?= html_escape($mensaje) ?></p>
<?php endif; ?>

<?php if (!empty($usuarios)) : ?>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= html_escape($usuario->nombre) ?></td>
                    <td><?= html_escape($usuario->correo) ?></td>
                    <td><?= html_escape($usuario->estado_cuenta) ?></td>
                    <td>
                    <form action="<?php echo site_url('admin/cambiar_estado'); ?>" method="post">
    <input type="hidden" name="id_usuario" value="<?php echo $usuario->id; ?>">
    <select name="estado_cuenta">
        <option value="1" <?php echo ($usuario->estado_cuenta == 1) ? 'selected' : ''; ?>>Activo</option>
        <option value="2" <?php echo ($usuario->estado_cuenta == 2) ? 'selected' : ''; ?>>Por activar</option>
        <option value="3" <?php echo ($usuario->estado_cuenta == 3) ? 'selected' : ''; ?>>Rechazado</option>
    </select>
    <button type="submit">Cambiar Estado</button>
</form>



                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No hay usuarios registrados.</p>
<?php endif; ?>
