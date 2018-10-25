<?php
namespace App\Http\ViewComposers;


use DB;
use App\Http\Controllers\BadgeController;

class OfferBadgeComposer
{
    public function compose($view)
    {
        $view->with('badges', BadgeController::badgesData());
    }
}