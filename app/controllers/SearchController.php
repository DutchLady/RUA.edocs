<?php

class SearchController extends BaseController {

	public function showSearch()
	{
		//If user is logged in
		if (Confide::user()) 
		{
			return View::make('search/query')->with('title', ': Search');
		}
		else
		{
			return Redirect::action('UserController@login')->with('warning', 'You are not allowed to perform a search, please log in');
		}
	}
	
    public function do_search()
    {
    	if (Confide::user())
    	{
	        $term = Input::get( 'searchterm' );
	        $results = SphinxSearch::search($term)->get();
		    return View::make('search/query', array('results' => $results, 'title' => ': Search Results', 'term' => $term));
		}
		else
		{
			return Redirect::action('SearchController@showSearch');
		}
    }
}