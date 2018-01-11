<?php
namespace Fuel\Migrations;

class fotos
{

    function up()
    {
        \DBUtil::create_table('fotos', array(
            'id' => array('type' => 'int', 'constraint' => 11,'auto_incremental'=> true),
            'url' => array('type' => 'varchar', 'constraint' => 50),
           'id_niveles' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('fotos');
    }
}