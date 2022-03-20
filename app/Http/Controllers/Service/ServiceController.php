<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function viewdetail($service)
    {
        return view('front.buyservice')->with('service',$service);
    }

    public function buyservice(Request $request)
    {
        $service = Service::create($request->all());
        toastr()->success('Request Sent Successfully','Done');
        return redirect()->route('front.services');
    }
}
