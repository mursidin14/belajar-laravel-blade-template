<?php

namespace App\Providers;

use App\Models\Person;
use App\services\SayHello;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SayHello::class, function() {
            return new SayHello();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('hello', function($expresion) {
            return "<?php echo 'Hello' . $expresion ?>";
        });

        Blade::stringable(Person::class, function (Person $person) {
            return "$person->name : $person->addres";
        });
    }
}
