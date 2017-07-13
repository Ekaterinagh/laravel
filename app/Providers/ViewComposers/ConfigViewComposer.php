<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use Auth;
use Config;

class ConfigViewComposer{
	public function compose(View $view){
		$title=config('app.name');
		//$description
		//$keywords
		$view->with('title',$title);
	}
}



