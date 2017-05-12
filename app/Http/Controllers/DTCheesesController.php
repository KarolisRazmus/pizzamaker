<?php namespace App\Http\Controllers;

use App\models\DTCheeses;
use Illuminate\Routing\Controller;

class DTCheesesController extends Controller {

    /**
     * Display a listing of the resource.
     * GET /cheeses
     *
     * @return Response
     */
    public function index()
    {
        return view('content.user.list');
    }

    /**
     * Show the form for creating a new resource.
     * GET /cheeses/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /cheeses
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /cheeses/{id}
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
     * GET /cheeses/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     * PUT /cheeses/{id}
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
     * DELETE /cheeses/{id}
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
     * GET /cheeses
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration['list'] = DTcheeses::get()->toArray();

        $formRoute = new DTcheeses();

        $configuration['routeName'] = $formRoute->getRoute();

        $configuration['delete'] = "app.cheeses.delete";

        return view('content.admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /cheeses/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        $formKeys = new DTcheeses();

        $configuration['formKeys'] = $formKeys->getFillable();

        $configuration['routeName'] = $formKeys->getRoute();

        return view('content.admin.item_form', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     * POST /cheeses
     *
     * @return Response
     */
    public function adminStore()
    {
        $data = request()->all();

        $formKeys = new DTcheeses();

        $configuration['formKeys'] = $formKeys->getFillable();

        $configuration['routeName'] = $formKeys->getRoute();

        foreach($configuration['formKeys'] as $key=> $value) {

            if (!isset($data[$value])) {

                $configuration['error'] = ['message' => trans('Please write ' . $value)];

                return view('content.admin.item_form', $configuration);
            }
        }

        DTCheeses::create($data);

        $configuration['comment'] = ['message' => trans('Great success!')];

        return view('content.admin.item_form',  $configuration);
    }

    /**
     * Display the specified resource.
     * GET /cheeses/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        $configuration['item'] = DTcheeses::find($id)->toArray();

        $formRoute = new DTcheeses();

        $configuration['routeName'] = $formRoute->getRoute();

        return view('content.admin.item', $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /cheeses/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $formKeys = new DTcheeses();

        $configuration['formKeys'] = $formKeys->getFillable();

        $configuration['routeName'] = $formKeys->getRoute();

        $configuration['item'] = DTCheeses::find($id);

        dd($configuration);









        $configuration['pizza_ingridients']= $configuration['pizza']->pizzasConnections->pluck('ingridients_id')->toArray();

        $configuration['pizza'] = $configuration['pizza']->toArray();

        //dd($configuration);

        return view('content.form_pizza_edit', $configuration);
    }


    /**
     * Update the specified resource in storage.
     * PUT /cheeses/{id}
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
     * DELETE /cheeses/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        DTcheeses::destroy($id);
    }

    public function getFormData()
    {

    }

}