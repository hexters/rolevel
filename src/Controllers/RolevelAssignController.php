<?php 

namespace Hexters\Rolevel\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RolevelAssignController extends BaseController {

    public function assign () {
        return view('rolevel::assign.index');
    }

}