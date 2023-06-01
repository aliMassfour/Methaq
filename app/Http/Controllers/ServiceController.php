<?php

namespace App\Http\Controllers;

use App\Http\HttpRequest\HttpRespons;
use Illuminate\Http\Request;

use App\Http\ImageUploader\ImageUploader;

class ServiceController extends Controller
{
    //
    use ImageUploader;
    use HttpRespons;
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'descreption' => 'required',


        ]);

        $service = new \App\Models\Service();
        $service->name = $request->get('name');
        $service->descreption = $request->get('descreption');
        if ($request->hasFile('image')) {
            $service->image = $this->store_imaeg($request->file('image'));
        } else {
            $service->image = '';
        }
        if ($service->save()) {
            return $this->success([
                'service' => $service,

            ]);
        } else {
            return $this->error([], 'error occured', 500);
        }
    }
    public function index()
    {
        $services = \App\Models\Service::all();
        if (sizeof($services) > 0) {
            return $this->success([
                'services' => $services,

            ]);
        } else {
            return $this->success([], 'not found any services');
        }
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'descreption' => 'required',

        ]);
        $service = \App\Models\Service::find($id);
        $service->name = $request->get('name');
        $service->descreption = $request->get('descreption');
        if ($request->hasFile('image')) {
            $service->image = $this->store_imaeg($request->file('image'));
        } else {
            $service->image = '';
        }
        if ($service->save()) {
            return $this->success([
                'service' => $service,
            ], 'update the service success');
        } else {
            return $this->error([], 'wromg happend please try again', 500);
        }
    }
    public function delete($id)
    {
        $service = \App\Models\Service::find($id);
        if ($service->delete()) {
            return $this->success([], 'deleted success');
        } else {
            return $this->error([], 'wrong happened try again', 500);
        }
    }
}
