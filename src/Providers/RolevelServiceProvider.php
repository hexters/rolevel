<?php 
    
namespace Hexters\Providers\Rolevel;
use Hexters\Rolevel\Helpers\Permission;

use Illuminate\Support\ServiceProvider;

use App\User;

class RolevelServiceProvider extends ServiceProvider {
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Config/rolevel.php' => config_path('rolevel.php'),
            __DIR__ . '/../Migrations/' => database_path('migrations'),
            __DIR__ . '/../Models/' => base_path('/app'),
            __DIR__ . '/../Roles/' => app_path('/Roles')
        ], 'rolevel');
        
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/rolevel.php', 'rolevel'
        );
        

        /**
         * Gate for access permission
         */
        if(is_array(Permission::keys())) {
            foreach(Permission::keys() as $key) {
                Gate::define($key, function(User $user) use ($slug) {
                    foreach($user->roles as $role) {
                        return in_array($key, $role->permissions->toArray());
                    }
                });
            }
        }

    }
}