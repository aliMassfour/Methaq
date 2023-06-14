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

    public function index()
    {

        $services = \App\Models\Service::all();

        return view('practice-areas')->with([
            'services' => $services
        ]);
    }

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
            // return $this->success([
            //     'service' => $service,

            // ]);
            return redirect(route('admin.index'));
        } else {
            return $this->error([], 'error occured', 500);
        }
    }


    public function edit($id)
    {
        $service = \App\Models\Service::find($id);
        return view('service_works.service_edit')->with('service', $service);
    }
    public function update(Request $request, $id)
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
        }
        if ($service->save()) {
            return redirect(route('admin.index'));
        } else {
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        $service = \App\Models\Service::find($id);
        $imagePath = public_path($service->image);
        if ($service->delete()) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
                return redirect(route('admin.index'));
            } else {
                return redirect()->back();
            }
        }
    }
}
