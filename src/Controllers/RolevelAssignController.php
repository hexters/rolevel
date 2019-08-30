<?php 

namespace Hexters\Rolevel\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RolevelAssignController extends BaseController {

    protected $role;

    public function __construct() {
        $this->role = app(config('rolevel.model.role'));
    }

    public function assign () {
        return view('rolevel::assign.index');
    }

}