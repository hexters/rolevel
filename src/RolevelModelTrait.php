<?php 

namespace Hexters\Rolevel;

trait RolevelModelTrait {

    public function roles () {
        return $this->hasMany(Role::class, 'user_id');
    }

}