<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class HomeController extends BackendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsWeek = Analytics::performQuery(Period::days(7),"ga:sessions,ga:pageviews,ga:bounceRate,ga:sessionDuration,ga:percentNewSessions,ga:entranceRate,ga:users",['dimensions' => 'ga:dayOfWeek']);
        $analyticsBrowser = Analytics::performQuery(Period::days(7),"ga:sessions",['dimensions' => 'ga:deviceCategory,ga:operatingSystem','sort' => '-ga:sessions']);
        $posts = Post::with('author')->where( 'published_at', '>', Carbon::now()->subDays(90))->latestFirst()->published()->get();
        // dd($posts);
        return view('backend.home',compact('analyticsWeek','analyticsBrowser','posts'));
    }

    public function media()
    {
        return view('backend.partials.media');
    }
}
