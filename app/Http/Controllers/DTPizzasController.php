<?php namespace App\Http\Controllers;

use App\models\DTPizzas;
use Illuminate\Routing\Controller;

class DTPizzasController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pizzas
	 *
	 * @return Response
	 */
	public function index()
	{

        return view('content.user.list');

//		$configuration['record'] = $this->apiIndex()->toArray();
//
//		dd($configuration);
//
//		return view('content.view.single', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('content.user.single');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pizzas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pizzas/{id}
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
	 * DELETE /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

//	admin functions starting from this comment

    /**
     * Display a listing of the resource.
     * GET /pizzas
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration['list'] = DTPizzas::get()->toArray();

        return view('content.admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pizzas/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pizzas
     *
     * @return Response
     */
    public function adminStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /pizzas/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        return view('content.admin.single');
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pizzas/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /pizzas/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /pizzas/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        //
    }

//    api functions starting from this comment

    /**
     * Display a listing of the resource.
     * GET /baseapi
     *
     * @return Response
     */
    public function apiIndex()
    {
//        return DTPizzas::all();
    }

    /**
     * Show the form for creating a new resource.
     * GET /baseapi/create
     *
     * @return Response
     */
    public function apiStore()
    {

    }

    /**
     * Display the specified resource.
     * GET /baseapi/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiShow($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * GET /baseapi/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function apiUpdate($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     * DELETE /baseapi/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiDestroy($id)
    {

    }


}