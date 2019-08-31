<?php 

namespace Hexters\Rolevel\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Hexters\Rolevel\Helpers\Menu;

class RolevelAssignController extends BaseController {

    protected $role;
    protected $menu;

    public function __construct(Menu $menu) {
        $this->role = app()->make(config('rolevel.models.roles'));
        $this->menu = $menu;
    }

    public function assign () {
        $data['roles'] = $this->role->all();
        return view('rolevel::assign.index', $data);
    }

    public function detail($id) {
        $data['role'] = $this->role->findOrFail($id);
        $data['menu'] = $this->menu;
        return view('rolevel::assign.detail', $data);
    }

}