@extends('layout.admin_layout')

@section('tittle')
Category
@endsection
@section('content')
<div class="row">
    <div class="col-md-9 col-9">
        <h4>Edit Category</h4>
    </div>
    <div class="col-md-3 col-3 text-center">
        <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-outline-dark">Return</button></a>
    </div>
</div>
<br>
<form method="POST" action="{{ route('categories.update', $category->id)}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputParent_id1">Parent_ID</label>
        <select class="form-control" id="exampleInputParent_id1" name="parent_id">
            <option>{!! $htmlOption !!}</option>

        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputSlug">Slug</label>
        <input type="text" class="form-control" value="{{$category->slug}}" id="exampleInputSlug" placeholder="Slug" name="slug">
    </div>

    <br>
    <button type="submit" class="btn btn-outline-secondary">Submit</button>
</form>



@endsection