<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracks;
use App\AgendaSessions;
use App\Events;
use JavaScript;
use Carbon\Carbon;

class AgendaController extends Controller
{
   public function index(Request $request){


     $events = Events::all();
     $tracks = Tracks::where('event_id', \Config::get('unleash.admin.default_event_id'))
		->orderBy('order', 'asc')
		->get();

     $eventsData = [];
     foreach ($events as $event) {
       
       $start = Carbon::parse($event->first_day['numberFormat']);
       $end = Carbon::parse($event->second_day['numberFormat']);

       $tmp = (object)array(
        'id' => $event->id,
        'year' => $start->year,
        'month' => $start->month,
        'day1' => $start->day,
        'day2' => $end->day,
		'day0' => '0',		
      );
        array_push($eventsData, $tmp);
      
     }

     JavaScript::put([
        'default_event_id' => \Config::get('unleash.admin.default_event_id'),
		'timesyntax' => 'default',
        'default_event_code' => \Config::get('unleash.admin.default_event'),
        'default_day' => \Config::get('unleash.admin.default_agenda_day'),
        'eventdata' => $eventsData
      ]);

    return view('london.pages.agenda_beta', [
                  
                  'events' => $events,
                  'AgendaTracks' =>$tracks
              ]);
   
   }   
   
  public function usagenda(Request $request){


     $events = Events::all();
     $tracks = Tracks::where('event_id', 3)
		->orderBy('order', 'asc')
		->get();

     $eventsData = [];
     foreach ($events as $event) {
       
       $start = Carbon::parse($event->first_day['numberFormat']);
       $end = Carbon::parse($event->second_day['numberFormat']);

       $tmp = (object)array(
        'id' => $event->id,
        'year' => $start->year,
        'month' => $start->month,
        'day1' => $start->day,
        'day2' => $end->day,
		'day0' => '14'	
      );
        array_push($eventsData, $tmp);
      
     }

     JavaScript::put([
        'default_event_id' => 3,
        'default_event_code' => 'US18',
        'default_day' => 15,
		'timesyntax' => 'us',
        'eventdata' => $eventsData
      ]);

    return view('lasvegas.pages.agenda_beta', [
                  
                  'events' => $events,
                  'AgendaTracks' =>$tracks
              ]);
   
   }      

  public function getSessions(Request $request, $trackId){

  	$sessions = Tracks::where('id',$trackId)->with('event', 'sessions.speakers')
												->OrderBy('event.start_time')->get();

  	return $sessions;

  }

  public function search(Request $request){

     $facets = '';

     if ($request->filled('eventid')){
        $facets .= 'event:'.$request->eventid;
     } else {
         return response('Missing eventid', 400);
     }

      if ($request->filled('day')){
        $facets .= ' AND start_time.day:'.$request->day;
     } 


    if($request->filled('tracks')){

        $facets .= ' AND (';

      try{
        $tracks = json_decode($request->tracks);

        $firstInLine = 0;
        foreach ($tracks as $key => $track) {

          if($firstInLine == 0){
             $facets .= 'tracks:'.$track;
             $firstInLine++;
           }else {
            $facets .= ' OR tracks:'.$track;
           }
         
        } //end foreach
         $facets .=')';

      } catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    }//if tracks

 if ($request->filled('keyword')){
   $keyword = $request->keyword;
 }else {
  $keyword = '';
 }

      $params = [
                  'filters' => $facets,
                  'hitsPerPage' => 150,
                  'page' => 0,			  

              ];

     $result = AgendaSessions::search($keyword)->with($params)->get();
    return $result->load('speakers')->load('tracks');
    
  }  
  
  public function searchTest(Request $request){

     $facets = '';

     if ($request->filled('eventid')){
        $facets .= 'event:'.$request->eventid;
     } else {
         return response('Missing eventid', 400);
     }

      if ($request->filled('day')){
        $facets .= ' AND start_time.day:'.$request->day;
     } 


    if($request->filled('tracks')){

        $facets .= ' AND (';

      try{
        $tracks = json_decode($request->tracks);

        $firstInLine = 0;
        foreach ($tracks as $key => $track) {

          if($firstInLine == 0){
             $facets .= 'tracks:'.$track;
             $firstInLine++;
           }else {
            $facets .= ' OR tracks:'.$track;
           }
         
        } //end foreach
         $facets .=')';

      } catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    }//if tracks

 if ($request->filled('keyword')){
   $keyword = $request->keyword;
 }else {
  $keyword = '';
 }

      $params = [
                  'filters' => $facets,
                  'hitsPerPage' => 150,
                  'page' => 0,			  

              ];

     $result = AgendaSessions::search($keyword)->with($params)->get();
	 
   $res = $result->load('speakers')->load('tracks');
	
	
   $res[0]->session_description= '&lt;p&gt;Text here&lt;/p&gt;';
   
   return $res;

    return response()->json($res, 200, ['JSON_HEX_TAG']);	

    
  }   
}
