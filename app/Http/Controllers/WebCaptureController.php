<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class WebCaptureController extends Controller
{
    public function capture(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'country.*' => 'required|int',
        ]);
        try {
           
            $countryIds = $this->stringToArray($this->runScrapingProccess($request));
            // Process the output or return it as needed
           
            //return redirect('dashboard')->with('test', $test);
            return response()->view('dashboard', [
                'countryList' => Country::whereIn('id', $countryIds)->get(),
                'countries' => Country::get(),
            ]);
        } catch (\Exception $e) {
            // Handle exceptions, log errors, or return an error response
           dd($e);
        }
    }

    public function stringToArray($string)
    {
        $string = str_replace("'", '"', $string);
        $array = json_decode($string,true);
        return $array;
    }

    public function runScrapingProccess($request)
    {
        Artisan::call('screenshot:capture', [
            'url' => $request->url,
            'user_id' => Auth()->user()->id,
            'country' => $request->country,
        ]);
       //dd(Artisan::output());
        return Artisan::output();

    }
}
