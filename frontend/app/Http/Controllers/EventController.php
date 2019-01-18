<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function view_list (){
        $events_attending =  DB::table('attendee')
            ->selectRaw("attendee.event_company_id as ecid, attendee.user_id as uid")
            ->where('attendee.user_id', Auth::user()->id);

        $events_companies = DB::table('event_company')
                            ->leftJoin(
                                DB::raw( ' ( ' . $events_attending->toSql() . ' ) as attendee '), 'attendee.ecid', '=', 'event_company.id'
                            )
                            ->mergeBindings($events_attending)
                            ->get();
        return view('event/view_list', ['events_companies'=>$events_companies]);
    }

    function attendee_subscribe ($event_id) {
        $event_company = DB::table('event_company')->where('id', $event_id)->first();
        if ($event_company) {
            DB::table('attendee')->insert(
                array(
                    'user_id' => Auth::user()->id,
                    'event_company_id' => $event_company->id
                )
            );    
        }
        return redirect('events');
    }

    function attendee_unsubscribe ($event_id) {
        $event_company = DB::table('event_company')->where('id', $event_id)->first();
        if ($event_company) {
            DB::table('attendee')
                ->where('user_id', Auth::user()->id)
                ->where('event_company_id', $event_company->id)
                ->delete();
        }
        return redirect('events');
    }

}