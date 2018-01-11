<?php
namespace Fuel\Migrations;

class superar
{

    function up()
    {
        \DBUtil::create_table('superar', array(
            'id_usuarios' => array('type' => 'int', 'constraint' => 11),
            'id_niveles' => array('type' => 'int', 'constraint' => 11),
        ), array('id_usuarios','id_niveles'));
    }

    function down()
    {
       \DBUtil::drop_table('superar');
    }
}