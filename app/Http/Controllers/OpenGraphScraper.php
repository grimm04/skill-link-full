<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenGraph;

class OpenGraphScraper extends Controller
{
   public function OpenGraphcs(Request $request)
   { 
		$og = OpenGraph::title('AppleCookie')
		    ->type('article')
		    ->image('http://example.org/apple.jpg')
		    ->description('Welcome to the best apple cookie recipe never created.')
		    ->url(); 
		dd($og->renderTags());
		// return($og);
   }
}
