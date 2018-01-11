<?php
namespace Fuel\Migrations;

class usuarios
{

    function up()
    {
        \DBUtil::create_table('usuarios', array(
            'id' => array('type' => 'int', 'constraint' => 11,'auto_incremental'=> true),
            'nombre' => array('type' => 'varchar', 'constraint' => 50),
            'email' => array('type' => 'varchar', 'constraint' => 50),
            'contraseña' => array('type' => 'varchar', 'constraint' => 50),
            'puntuacion' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('usuarios');
    }
}