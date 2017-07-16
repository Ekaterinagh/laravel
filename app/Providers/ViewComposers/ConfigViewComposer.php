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
		$curent_page=$_SERVER['REQUEST_URI'];
		//echo $curent_page;
		$view->with('title',$title)
			 ->with('keywords',$keywords)
			 ->with('description',$description)
			 ->with('curent_page',$curent_page);
	}
}



