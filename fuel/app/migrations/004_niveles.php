<?php
namespace Fuel\Migrations;

class niveles
{

    function up()
    {
        \DBUtil::create_table('niveles', array(
            'id' => array('type' => 'int', 'constraint' => 11,'auto_incremental'=> true),
            'titulo' => array('type' => 'varchar', 'constraint' => 50),
            'numerofotos' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('niveles');
    }
}