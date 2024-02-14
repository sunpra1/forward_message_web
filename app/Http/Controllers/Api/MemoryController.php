<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MemoryController extends Controller
{
    public function index(Request $request)
    {
       return response($request->user()->memories);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'image' => 'required',
            'image.*' => 'image'
        ]);

        if($validator->fails()){
            return response($validator->errors(), 400);
        }else{
            $user = $request->user();
            $memory_image = $request->image;
            $new_image_name = time()."_".$memory_image->getClientOriginalName();
            if(Storage::putFileAs('public/images/memories', $memory_image, $new_image_name)){
                $myMemory = Memory::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'lat' => $request->lat,
                    'lng' => $request->lng,
                    'image' => $new_image_name,
                    'user_id' => $user->id,
                ]);
                return response($myMemory);
            }else{
                return response(["message" => "Failed saving image."], 500);
            }
        }
    }

   
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        if($validator->fails()){
            return response($validator->errors(), 400);
        }else{
            $myMemory = $request->user()->memories()->where('id', $id)->first();

            if(isset($myMemory)){
                $hasFile =  $request->hasFile('image');
                if($hasFile){
                    Storage::delete('public/images/memories/'.$myMemory->image);
                    $memory_image = $request->image;
                    $new_image_name = time()."_".$memory_image->getClientOriginalName();
                    $isFileSaved = Storage::putFileAs('public/images/memories', $memory_image, $new_image_name);
                }

                if(!$hasFile || ($hasFile && isset($isFileSaved) && $isFileSaved)){
                    $myMemory->title = $request->title;
                    $myMemory->description = $request->description;
                    $myMemory->lat = $request->lat;
                    $myMemory->lng = $request->lng;
                    if(isset($new_image_name)){
                        $myMemory->image = $new_image_name;
                    }
                    if($myMemory->save()){
                        return response($myMemory);
                    }else{
                        return response(["message" => "Failed saving memory."], 500);
                    }
                }else{
                    return response(["message" => "Failed saving image."], 500);
                } 
            }else{
                return response(["message" => "Memory not found."], 500);
            }
        }
    }


    public function destroy(Request $request, $id)
    {
        $myMemory = $request->user()->memories()->where('id', $id)->first();
         if(isset($myMemory)){
            Storage::delete('public/images/memories/'.$myMemory->image);
            if ($myMemory->delete()) {
                return response(["message" => "Memory of" . $myMemory->title . " deleted successfully."]);
            }else{
                return response(["message" => "Memory of" . $myMemory->title . " couldn't be deleted."], 500);
            }
        }else{
            return response(["message" => "Memory not found."], 500);
        }
    }
}
