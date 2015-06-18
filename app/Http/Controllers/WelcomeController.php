<?php namespace App\Http\Controllers;

use App\BusinessArea;
use Hlogeon\Scms\Models\Type;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return \Response
	 */
	public function index()
	{
        $types = Type::all();
		return redirect(route('hlogeon-scms.list', ['model' => $types[0]->id]));
	}


    public function listAreas()
    {
        return \View::make('business_area.list', [
            'models' => BusinessArea::all(),
        ]);
    }


    public function showArea($id)
    {
        $model = BusinessArea::find($id);
        return \View::make('business_area.view', compact('model'));
    }

}
