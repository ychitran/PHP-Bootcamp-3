@extends('layout.admin_layout')

@section('tittle')
Menu
@endsection

@section('content')
<table class="table table-striped text-center">
    <div class="row">
        <div class="col-md-9 col-9">
            <h4>List Menu</h4>
            @if(Session::has('success'))
            <p aria-hidden="true" class="text-success"> {{Session::get('success')}}</p>
            @endif
        </div>
        <div class="col-md-3 col-3 text-center">
            <a href="{{ route('menus.create') }}"><button type="button" class="btn btn-outline-info">Add Menu</button></a>
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
        @foreach($menus as $key => $menu)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$menu->name}}</td>
            <td>{{$menu->parent_id}}</td>
            <td>{{$menu->slug}}</td>
            <td><a href="{{ route('menus.edit', $menu->id) }}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                <a href="{{ route('menus.destroy', $menu->id) }}" onclick="return confirm('Do you want to Delete {{$menu->name}}')"><button type="button" class="btn btn-outline-dark">Delete</button></a>
            </td>
            <td></td>
        </tr>
        @endforeach

    </tbody>

</table>
<br>
<div class="col-md-12" style="margin-bottom: 1rem">
    {{ $menus->links() }}
</div>




@endsection