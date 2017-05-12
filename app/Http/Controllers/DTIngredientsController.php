<?php namespace App\Http\Controllers;

use App\models\DTIngredients;
use Illuminate\Routing\Controller;

class DTIngredientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ingredients
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('content.user.list');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ingredients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ingredients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ingredients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

//    admin functions starting from this comment

    /**
     * Display a listing of the resource.
     * GET /ingredients
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration['list'] = DTIngredients::get()->toArray();

        $formRoute = new DTIngredients();

        $configuration['routeName'] = $formRoute->getRoute();

        return view('content.admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /ingredients/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        $formKeys = new DTIngredients();

        $configuration['formKeys'] = $formKeys->getFillable();

        $configuration['routeName'] = $formKeys->getRoute();

        return view('content.admin.item_form', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ingredients
     *
     * @return Response
     */
    public function adminStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /ingredients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        $configuration['item'] = DTIngredients::find($id)->toArray();

        $formRoute = new DTIngredients();

        $configuration['routeName'] = $formRoute->getRoute();

        return view('content.admin.item', $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /ingredients/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     * PUT /ingredients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ingredients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        DTIngredients::destroy($id);
    }

}