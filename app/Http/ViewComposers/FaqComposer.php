<?php
namespace App\Http\ViewComposers;


use DB;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\App;
class FaqComposer
{
    public function compose($view)
    {
        $view->with('faqs', FaqController::faqData());
    }
}
