<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\dashboard\Slider;
use App\Http\Requests\slider\CreateSliderRequest;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $sliderData = Slider::withoutTrashed()->paginate(5); 
       return view('dashboard.slider.index',compact('sliderData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSliderRequest $request)
    {    
        // Ensure image  exists
         if($request->hasFile('image')){
           $image = $request->file('image')->getClientOriginalName();
           $image = time().'.'.$image; 
           $path = $request->file('image')->move('uplode/slider',$image);
        }
        // create data
       $slider = Slider::create([
         'title'=>$request->title,
         'description'=>$request->description,
         'image'=>$image
       ]);
       session::flash('success', 'successfully create ');
       return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $sliderId = slider::findOrfail( $id);
        return view('dashboard.slider.edit',compact('sliderId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrfail($id);
        
        if($request->hasFile('image')){
              // Ensure image field exists
            if (!empty($slider->image) && file_exists('uplode/slider/' . $slider->image)) {
                 // Check if it's a file, not a directory
                if (is_file('uplode/slider/' . $slider->image)){
                    unlink('uplode/slider/' . $slider->image);
                }
            }
             // Handle the new image upload
           $image = $request->file('image')->getClientOriginalName();
           $image = time().'.'.$image; 
           $path = $request->file('image')->move('uplode/slider',$image);

        } else{
            // show the older image
            $image = $slider->image; 
        }

        // update data
         Slider::where('id','=', $id)->update([
         'title'=>$request->title,
         'description'=>$request->description,
         'image'=>$image
        ]);

        session::flash('success', 'successfully update');
        return redirect()->route('slider.index');
    }

   
    public function destroy(string $id)
    {
        Slider::findOrfail($id)->delete();
        session::flash('success','successfully delete');
        return redirect()->route('slider.index');
        
    }

    public function trash(){
        $sliderData = Slider::onlyTrashed()->get();
        return view('dashboard.slider.trash',compact('sliderData')); 
    }

    public function delete($id){
        $slider = Slider::onlyTrashed()->findOrFail($id);
        // return $slider;
        $imagePath = 'uplode/slider/' . $slider->image;
        if (!empty($slider->image) && file_exists($imagePath)) {
            unlink($imagePath);
        }
       $slider->forceDelete();
       session::flash('success','successfully delete');
       return redirect()->route('slider.trash');
    
    }
    
    public function restore($id){
       Slider::onlyTrashed()->findOrfail($id)->restore();
        session::flash('success','successfully restore');
        return redirect()->route('slider.index');
    }
}