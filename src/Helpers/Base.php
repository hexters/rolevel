<?php 

namespace Hexters\Rolevel;

class Base {

    public function file () {
        return require_once( app_path('/Roles/menu_and_permissions.php') );
    }

}