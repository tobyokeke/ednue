<?php

namespace App\Http\Controllers;

use App\member;
use Illuminate\Http\Request;

class PublicController extends Controller
{
	public function index() {
		return view('welcome');
    }

	public function about() {
		return view('about');
    }

	public function causes() {
		return view('causes.manage');
    }

	public function causeDetails( $cause ) {
		return view('causes.details');
    }

	public function contact() {
		return view('contact');
    }

	public function postJoin( Request $request ) {
		$member = new member();
		$member->name = $request->input('name');
		$member->phone = $request->input('phone');
		$member->email = $request->input('email');
		$member->dob = $request->input('dob');
		$member->politically_inclined = $request->input('politically_inclined');
		$member->highest_education = $request->input('highest_education');
		$member->address = $request->input('address');
		$member->wish = $request->input('wish');
		$member->save();
		session()->flash('success','Request Submitted. We will get back to you');
		return redirect()->back();
    }
}
