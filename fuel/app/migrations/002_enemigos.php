<?php
namespace Fuel\Migrations;

class enemigos
{

    function up()
    {
        \DBUtil::create_table('enemigos', array(
            'id' => array('type' => 'int', 'constraint' => 11,'auto_incremental'=> true),
            'nombre' => array('type' => 'varchar', 'constraint' => 50),
            'descripcion' => array('type' => 'varchar', 'constraint' => 50),
            'id_niveles' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('enemigos');
    }
}