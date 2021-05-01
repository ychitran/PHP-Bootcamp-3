@extends('layout.admin_layout')

@section('tittle')
Category
@endsection
@section('content')
<table class="table table-striped text-center">
    <div class="row">
        <div class="col-md-9 col-9">
            <h4>List Category</h4>
            @if(Session::has('success'))
            <p aria-hidden="true" class="text-success"> {{Session::get('success')}}</p>
            @endif
        </div>
        <div class="col-md-3 col-3 text-center">
            <a href="{{ route('categories.create') }}"><button type="button" class="btn btn-outline-info">Add Category</button></a>
        </div>
    </div>
    <thead class="table-success">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Parent_id</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody class="table-light">
        @foreach($categories as $key => $category)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->slug}}</td>
            <td><a href="{{ route('categories.edit', $category->id) }}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('Do you want to Delete {{$category->name}}')"><button type="button" class="btn btn-outline-dark">Delete</button></a>
            </td>
            <td></td>
        </tr>
        @endforeach

    </tbody>
</table>
<br>
<div class="col-md-12" style="margin-bottom: 1rem">
    {{ $categories->links() }}
</div>




@endsection