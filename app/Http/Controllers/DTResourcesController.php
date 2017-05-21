<?php

namespace App\Http\Controllers;

use App\models\CoreModel;
use App\models\DTResources;
use App\models\DTUsersResourcesConnections;
use Illuminate\Http\Request;

class DTResourcesController extends Controller
{

//    /**
//     * Display a listing of the resource.
//     * GET /ingredients
//     *
//     * @return Response
//     */
//
//    public function index()
//    {
//
//    }
//
//    public function adminIndex()
//    {
//        $dataFromModel = new DTPads();
//
//        $configuration['list'] = DTPads::get()->toArray();
//        $configuration['tableName'] = $dataFromModel->getTableName();
//
//        if($configuration['list'] == [])
//        {
//            $configuration['error'] = ['message' => trans("Create some " . $configuration['tableName'] . ", then go to list")];
//            return view('admin.list', $configuration);
//        }
//
//        return view('admin.list', $configuration);
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     * GET /ingredients/create
//     *
//     * @return Response
//     */
    public function create()
    {
        $configuration['auth']=(auth()->user());
        $dataFromModel = new DTResources();
        $configuration['tableName'] = $dataFromModel->getTableName();

        return view('game', $configuration);
    }

//    public function adminCreate()
//    {
//
//        $dataFromModel = new DTPads();
//
//        $configuration['fields'] = $dataFromModel->getFillable();
//        $configuration['tableName'] = $dataFromModel->getTableName();
//        $configuration['list'] = DTPads::get()->toArray();
//
//        return view('admin.createform', $configuration);
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     * POST /resources
//     *
//     * @return Response
//     */

    public function store()
    {
        $resource = request()->file('image');

        $newDTResourcesController = new DTUploadController();
        $record = $newDTResourcesController->upload($resource);

        DTUsersResourcesConnections::create([
           "users_id" => auth()->user()->id,
           "resources_id" => $record->id,
        ]);



//        $data = request()->all();
//        $dataFromModel = new DTResources();
//
//        $configuration['tableName'] = $dataFromModel->getTableName();
//
//        foreach($configuration['fields'] as $key=> $value) {
//            if (!isset($data[$value])) {
//                $configuration['error'] = ['message' => trans('Please enter ' . $value)];
//                return view('game', $configuration);
//            }
//        }
//
//
//
//        DTResources::create($data);
//
//
//
//        $configuration['comment'] = ['message' => trans('Record added successfully')];
//        return view('game',  $configuration);

    }

//    public function adminStore()
//    {
//        return 'adminStore';
//
//        $data = request()->all();
//        $dataFromModel = new DTResources();
//
//        $configuration['fields'] = $dataFromModel->getFillable();
//        $configuration['tableName'] = $dataFromModel->getTableName();
//
//        foreach($configuration['fields'] as $key=> $value) {
//            if (!isset($data[$value])) {
//                $configuration['error'] = ['message' => trans('Please enter ' . $value)];
//                return view('admin.createform', $configuration);
//            }
//        }
//
////        DTPads::create($data);
//        $configuration['comment'] = ['message' => trans('Record added successfully')];
//        return view('admin.createform',  $configuration);
//
//    }
//
//    /**
//     * Display the specified resource.
//     * GET /ingredients/{id}
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    public function adminShow($id)
//    {
//        $dataFromModel = new DTPads();
//
//        $configuration['record'] = DTPads::find($id)->toArray();
//        $configuration['tableName'] = $dataFromModel->getTableName();
//
//
//        return view('admin.single', $configuration);
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     * GET /ingredients/{id}/edit
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function edit($id)
//    {
//
//    }
//
//    public function adminEdit($id)
//    {
//
//        return view('admin.editform');
//
//    }
//
//    /**
//     * Update the specified resource in storage.
//     * PUT /ingredients/{id}
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function update($id)
//    {
//
//    }
//
//    public function adminUpdate($id)
//    {
//
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     * DELETE /ingredients/{id}
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
//
//    public function adminDestroy($id)
//    {
//        if (DTPads::destroy($id)) {
//            return json_encode(["success" => true, "id" => $id]);
//        }
//    }

}
