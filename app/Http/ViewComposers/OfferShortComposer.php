<?php
namespace App\Http\ViewComposers;


use App\Http\Controllers\CardController;

class OfferShortComposer
{
    public function compose($view)
    {
        $view->with('cards', CardController::cardsData() );
    }
}