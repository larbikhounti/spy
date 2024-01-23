<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class WebCaptureController extends Controller
{
    public function capture(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'country.*' => 'required|int',
        ]);
        try {
            Artisan::call('screenshot:capture', [
                'url' => $request->url,
                'user_id' => Auth()->user()->id,
                'country' => $request->country,
            ]);
            $output = Artisan::output();
            dd($output);
            // Process the output or return it as needed
            return redirect()->back()->with($output, 'Screenshot captured successfully');
        } catch (\Exception $e) {
            // Handle exceptions, log errors, or return an error response
           dd($e);
        }
    }
}
