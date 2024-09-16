@extends('backend.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-4">
            <a href="{{route('create.socialmedia')}}" class="btn btn-primary mb-2">
                <i class="fa fa-plus-circle me-2"></i> Social Media</a>
        </div>
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Social Media Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Tiktok</th>
                                <th class="ac px-4" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($file as $key=>$site)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$site->facebook}}</td>
                                <td>{{$site->instagram}}</td>
                                <td>{{$site->tiktok}}</td>
                                <td>
                                    <a href="{{route('edit.socialmedia',$site->id)}}"><i class="fa fa-edit text-light px-4"
                                            title="Edit"></i></a>
                                    <a href="{{route('delete.socialmedia',$site->id)}}"><i class="fa fa-trash"
                                            onclick="return confirm('Are you sure you want to delete?')"
                                            title="Delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection