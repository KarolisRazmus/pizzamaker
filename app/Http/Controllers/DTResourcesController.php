<?php

namespace App\Http\Controllers;

use App\models\DTResources;
use Illuminate\Http\Request;

class DTResourcesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $configuration['auth']=(auth()->user());
        $dataFromModel = new DTResources();
        $configuration['tableName'] = $dataFromModel->getTableName();

        return view('game', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     * POST /resources
     *
     * @return Response
     */
    public function store()

    {
        $data = request()->all();
        $dataFromModel = new DTResources();

        $configuration['tableName'] = $dataFromModel->getTableName();

        foreach($configuration['fields'] as $key=> $value) {
            if (!isset($data[$value])) {
                $configuration['error'] = ['message' => trans('Please enter ' . $value)];
                return view('game', $configuration);
            }
        }

        DTResources::create($data);




        $configuration['comment'] = ['message' => trans('Record added successfully')];
        return view('game',  $configuration);

    }

}
