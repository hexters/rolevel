<?php 

namespace Hexters\Rolevel;

class Permission extends Base {

    public function findKeys ($menus = []) {
        
        $permissions = [];
        foreach($menus as $menu) {
            if(isset($menu['permissions']) && is_array($menu['permissions'])) {
                foreach($menu['permissions'] as $permissison) {
                    if(isset($permissison['uniqkey'])) {
                        $permissions[] = $permissison['uniqkey'];
                    }
                }
            }

            if(isset($menu['childs'])) {
                if($this->keys($menu['childs'])) {
                    $permissions[] = $this->keys($menu['childs']);
                }
            }
        }
        return count($permissions) > 0 ? $permissions : null;
    }

    public function keys() {
        return $this->findKeys($this->file());
    }

}