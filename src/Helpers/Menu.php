<?php 

namespace Hexters\Rolevel\Helpers;

class Menu extends Base {

    public function findKeys ($menus = []) {
        
        $keys = [];
        foreach($menus as $menu) {
            if(isset($menu['uniqkey'])) {
                $keys[] = $key['uniqkey'];
            }

            if(isset($menu['childs'])) {
                if($this->keys($menu['childs'])) {
                    $keys[] = $this->keys($menu['childs']);
                }
            }
        }
        return count($keys) > 0 ? $keys : null;
    }

    public function keys() {
        return $this->findKeys($this->file());
    }
}