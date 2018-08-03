<?php 
	
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class PagesController extends Controller
	{
		public function index(){
			$title = "Welcome To Laravel!";
			/*return view('pages.index', compact('title')); one way*/
			return view('pages.index')->with('title', $title);
		}

		public function about(){
			$title = "About Us";
			return view('pages.about')->with('title', $title);
		}

		public function services(){
			$data = array(
				'title' => 'Services',
				'services' => ['Web Design', 'Programming', 'SED']
			);
			return view('pages.services')->with($data);
		}
	}

 ?>