@extends('dashboard.layout')
@section('css')
 <style>
    img{
        width: 100px;
        /* border-radius: 50%; */
    }
 </style>
@endsection
@section('Content')

   
         @if (Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{Illuminate\Support\Facades\Session::get('success')}}
        </div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">slider Page</h1> 
      
        <!-- Main Content -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Slider Table Data Trash </h6>
                  <a href="{{route('slider.index')}}" class="btn btn-success" style="float: right" >Slider</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliderData as $item )
                                <tr>
                                <td>{{$item->id}}</td>
                                <td>{{Illuminate\Support\str::limit($item->title,9)}}</td>
                                <td>{{Illuminate\Support\str::limit($item->description,30)}}</td>
                                <td><img src="{{asset('uplode/slider/'.$item->image)}}" alt="image"></td>
                                <td>
                                    <form action="{{route('slider.restore', $item->id)}}" method="get">
                                        @csrf
                                        <input type="submit"  value="restore">
                                   </form>
                                </td>
                                <td>
                                    <form action="{{route('slider.delete',['id'=>$item->id])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                       <input type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6">empty</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
@endsection