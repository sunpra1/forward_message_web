<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MyMemory;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MyMemoryController extends Controller
{
    public function index()
    {
       return response(MyMemory::all());
    }

    
    public function store(Request $request)
    {
       $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'image' => 'required',
            'image.*' => 'image'
        ]);

        $memory_image = $request->image[0];
        $new_image_name = time()."_".$memory_image->getClientOriginalName();
        if(Storage::putFileAs('public/images/memories', $memory_image, $new_image_name)){
            $myMemory = MyMemory::create([
                'title' => $request->title,
                'description' => $request->description,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'image' => $new_image_name,
            ]);
            response($myMemory);
        }else{
            response(["message" => "Failed saving image."], 500);
        } 
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        $myMemory = MyMemory::find($id);

        if($request->hasFile('image')){
            Storage::delete('public/images/memories/'.$myMemory->image);
            $memory_image = $request->image[0];
            $new_image_name = time()."_".$memory_image->getClientOriginalName();
        }

        if(Storage::putFileAs('public/images/memories', $memory_image, $new_image_name)){
            $myMemory->title = $request->title;
            $myMemory->description = $request->description;
            $myMemory->lat = $request->lat;
            $myMemory->lng = $request->lng;
            if(isset($new_image_name)){
                $myMemory->image = $new_image_name;
            }
            if($myMemory->save()){
                response($myMemory);
            }else{
                response(["message" => "Failed saving memory."], 500);
            }
        }else{
            response(["message" => "Failed saving image."], 500);
        } 

    }


    public function destroy($id)
    {
       $myMemory = MyMemory::find($id);
       Storage::delete('public/images/memories/'.$myMemory->image);
       if ($myMemory->delete()) {
            response(["message" => "memory " . $myMemory->title . " deleted successfully."]);
       }else{
            response(["message" => "memory " . $myMemory->title . " couldn't be deleted."], 500);
       }
    }
}
