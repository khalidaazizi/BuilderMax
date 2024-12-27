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
                <h6 class="m-0 font-weight-bold text-primary"> Slider Table Data </h6>
                  <a href="{{route('slider.create')}}" class="btn btn-success ml-2" style="float: right" >Create</a>
                   <a href="{{route('slider.trash')}}" class="btn btn-danger" style="float: right" >Trash</a>
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
                                <td><a href="{{route('slider.edit',['id'=>$item->id])}}">edit</a></td>
                                <td>
                                    <form action="{{route('slider.destroy',['id'=>$item->id])}}" method="POST">
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
                        <tfoot>
                           {{$sliderData->links()}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
@endsection