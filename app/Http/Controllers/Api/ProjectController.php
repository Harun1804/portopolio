<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $query = Project::latest()->get();
        return $this->resStatus(null,200,"Berhasil Mengambil Data Project",$query);
    }

    public function store(Request $request)
    {
        $request->file('thumbnail')->store('/','google');

        $project = Project::create([
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'tech'      => $request->tech,
            'desc'      => $request->desc,
            'thumbnail' => $this->getImage()
        ]);

        return $this->resStatus(null,200,"Berhasil Menambahkan Data Project",$project);
    }

    private function getImage()
    {
        $files = Storage::disk('google')->allFiles();
        $firstFileName = $files[0];
        $firstFileUrl = Storage::disk('google')->url($firstFileName);
        return $firstFileUrl;
    }

    private function resStatus($param = null, $status = null, $message = null, $result = null)
    {
        $response['response'] = [
            'status'    => $status,
            'message'   => $message,
            'result'    => $result
        ];
        $response['param']  = $param;

        return response()->json($response,$status);
    }
}
