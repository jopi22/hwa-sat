<?php


namespace App\Helpers;

use App\Models\History;
use Request;

class LogActivity
{
    public static function addToLog($subject)
    {
        $date = date("YdmHi");
        $user_id = auth()->user()->id;
        $token = $user_id . $date;
        $log['subject'] = $subject;
        $log['token'] = $token;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['agent'] = Request::header('user-agent');
        History::create($log);
    }


    public static function logActivityLists()
    {
        return History::latest()->get();
    }
}
