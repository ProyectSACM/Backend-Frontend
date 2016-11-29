<?php

use Phinx\Migration\AbstractMigration;

class Usuario extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        /*
            Recordar que una vez que la tabla tenga datos no se puede revertir
            Para crear una migracion desde la consola: bin/cake bake migration [titulo_migracion] [campo]:[tipo]
        */
        $table = $this->table('usuarios');
        $table->addColumn('nombre', 'string', array('limit' => 50))
              ->addColumn('apellido', 'string', array('limit' => 50))
              ->addColumn('correo', 'string', array('limit' => 50))
              ->addColumn('contrasena', 'string')
              ->addColumn('rol', 'enum', array('values' => 'admin, editor'))
              ->addColumn('creado', 'datetime')
              ->addColumn('modificado', 'datetime')
              ->create();

        /*
            Para relacionar una tabla (llave foranea): 
            $reftable = $this->table([tabla]);
            $reftable->addColumn('[campo]_[camporel]', [tipo], array('signed' => 'disable'))
                     ->addForeingKey('[campo]_[camporel]', [tablarel], [camporel], array('delete' => 'CASCADE', 'update' => 'NO ACTION'))
                     ->update();

                     **Se realiza el update para modificar la tabla**
        */


    }
}
