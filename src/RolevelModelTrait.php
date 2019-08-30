<?php 

namespace Hexters\Rolevel;

trait RolevelModelTrait {

    public function roles () {
        return $this->belongsToMany(Role::class);
    }

}