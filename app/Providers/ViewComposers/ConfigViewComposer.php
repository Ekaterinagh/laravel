<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use Auth;
use Config;

class ConfigViewComposer{
	public function compose(View $view){
		$title=config('app.name');
		$keywords=config('app.keywords');
		$description=config('app.description');
		$view->with('title',$title);
		$view->with('keywords',$keywords);
		$view->with('description',$description);
	}
}



