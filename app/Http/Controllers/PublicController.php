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


		$requiredImages1 = array();


		for($i =1; $i <= 49; $i++ ){
			$url = url("images/conference/$i.jpg");
			$image = ['src' => $url,'w' =>1200, 'h' =>900  ];
			array_push($requiredImages1,$image);
		}

		$requiredImages1 = json_encode($requiredImages1,JSON_UNESCAPED_SLASHES);


		$requiredImages2 = array();


		for($i =1; $i <= 29; $i++ ){
			$url = url("images/health/$i.jpg");
			$image = ['src' => $url,'w' =>1200, 'h' =>900  ];
			array_push($requiredImages2,$image);
		}

		$requiredImages2 = json_encode($requiredImages2,JSON_UNESCAPED_SLASHES);


		$requiredImages3 = array();


		for($i =1; $i <= 14; $i++ ){
			$url = url("images/pvc/$i.jpg");
			$image = ['src' => $url,'w' =>1200, 'h' =>900  ];
			array_push($requiredImages3,$image);
		}

		$requiredImages3 = json_encode($requiredImages3,JSON_UNESCAPED_SLASHES);


		$requiredImages4 = array();


		for($i =1; $i <= 13; $i++ ){
			$url = url("images/sdg/$i.jpg");
			$image = ['src' => $url,'w' =>1200, 'h' =>900  ];
			array_push($requiredImages4,$image);
		}

		$requiredImages4 = json_encode($requiredImages4,JSON_UNESCAPED_SLASHES);

		$requiredImages5 = array();


		for($i =1; $i <= 6; $i++ ){
			$url = url("images/water/$i.jpg");
			$image = ['src' => $url,'w' =>1200, 'h' =>900  ];
			array_push($requiredImages5,$image);
		}
		$requiredImages5 = json_encode($requiredImages5,JSON_UNESCAPED_SLASHES);


		return view('causes.manage',[
			'requiredImages1' => $requiredImages1,
			'requiredImages2' => $requiredImages2,
			'requiredImages3' => $requiredImages3,
			'requiredImages4' => $requiredImages4,
			'requiredImages5' => $requiredImages5,
		]);
    }

	public function causeDetails( $cause ) {
		return view('causes.details');
    }

	public function team() {
		return view('team');
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
		$member->pop = $request->input('pop');
		$member->politically_inclined = $request->input('politically_inclined');
		$member->highest_education = $request->input('highest_education');
		$member->address = $request->input('address');
		$member->wish = $request->input('wish');
		$member->save();
		session()->flash('success','Request Submitted. We will get back to you');
		return redirect()->back();
    }
}
