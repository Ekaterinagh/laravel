<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Salon;


class BannerViewComposer{
	public function compose(View $view){
		$salons=Salon::all();
		$view->with('salons',$salons);
	}
}



