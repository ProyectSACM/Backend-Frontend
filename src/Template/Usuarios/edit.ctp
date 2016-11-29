<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Seguro que quieres eliminar el usuario # {0}?', $usuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellido');
            echo $this->Form->input('correo');
            echo $this->Form->input('contrasena');
            echo $this->Form->input('rol', ['options' => ['admin' => 'Administrador', 'editor' => 'Editor']]);
            echo $this->Form->input('creado');
            echo $this->Form->input('modificado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
