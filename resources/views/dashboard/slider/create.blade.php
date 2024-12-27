@extends('dashboard.layout')
@section('Content')

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Create Slider Page</h1>
        <!-- Main Content -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Slider Table Data </h6>
                <a href="{{route('slider.index')}}" class="btn btn-warning" style="float: right" >Back</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" class="form-group" >
                       @csrf
                        <label for="title">title</label>
                        <input type="text" id="title" name="title" class="form-control"  placeholder="enter title">
                        @error('title')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                        <label for="description">description</label>
                        <textarea name="description" id="description" cols="30" rows="10"  placeholder="enter description" class="form-control"></textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                        <label for="image">image</label>
                        <input type="file" id="image" name="image"  class="form-control">
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