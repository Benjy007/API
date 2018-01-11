<?php
namespace Fuel\Migrations;

class comentario
{

    function up()
    {
        \DBUtil::create_table('comentario', array(
            'id' => array('type' => 'int', 'constraint' => 11,'auto_incremental'=> true),
            'descripcion' => array('type' => 'varchar', 'constraint' => 50),
            'id_usuarios' => array('type' => 'int', 'constraint' => 11),
            'id_comentarios' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('comentario');
    }
}