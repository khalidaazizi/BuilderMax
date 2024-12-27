@extends('dashboard.layout')
@section('Content')

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Slider Page</h1>
        <!-- Main Content -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Slider Table Data </h6>
                <a href="{{route('slider.index')}}" class="btn btn-warning" style="float: right" >Back</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('slider.update',['id'=> $sliderId->id])}}" method="POST" enctype="multipart/form-data" class="form-group" >
                       @csrf
                       @method('put')
                        <label for="title">title</label>
                        <input type="text" id="title" name="title" value="{{$sliderId->title}}" class="form-control" placeholder="enter title">
                        @error('title')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                        <label for="description">description</label>
                        <textarea name="description" id="description" cols="30" rows="10"  placeholder="enter description" class="form-control">{{$sliderId->description}}</textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                        <label for="image">image</label>
                        <img src="{{asset('uplode/slider/'.$sliderId->image)}}" alt="image" style="width: 100px" class="my-3">
                        <input type="file" id="image" name="image"  value="{{$sliderId->image}}"  class="form-control">
                        @error('image')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <input type="submit" value="submit"  class="btn btn-success mt-2 ">
                    </form>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
@endsection