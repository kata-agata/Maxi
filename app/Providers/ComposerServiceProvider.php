<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        View::composer(
                'sections.offersSection', 'App\Http\ViewComposers\OfferBadgeComposer'
        );
        View::composer(
                'sections.offersShorts', 'App\Http\ViewComposers\OfferShortComposer'
        );
        View::composer(
                'sections.realizations', 'App\Http\ViewComposers\RealizationsComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
