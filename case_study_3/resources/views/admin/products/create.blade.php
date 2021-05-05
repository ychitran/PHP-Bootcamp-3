@extends('layout.admin_layout')

@section('tittle')
Product
@endsection

@section('css')
<link href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-9 col-9">
        <h4>Add Product</h4>
    </div>
    <div class="col-md-3 col-3 text-center">
        <a href="{{route('products.index')}}"><button type="button" class="btn btn-outline-dark">Return</button></a>
    </div>
</div>
<br>
<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Name Product</label>
        <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputPrice">Price</label>
        <input type="text" name="price" class="form-control" id="exampleInputPrice" aria-describedby="emailHelp" placeholder="Enter Price">
    </div>
    <div class="form-group">
        <label for="exampleInputImage">Images</label>
        <input type="file" name="feature_image_path" class="form-control-file" id="exampleInputImage" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputImage">Images Details</label>
        <input type="file" name="image_path" multiple class="form-control-file" id="exampleInputImage" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputParent_id1">Parent_ID</label>
        <select class="form-control" id="exampleInputParent_id1" name="category_id">
            <option value="0" hidden>Please choose Parent ID</option>
            <option>{!! $htmlOption !!}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputParent_id1">Tag</label>
        <select class="form-control tags_select_choose" multiple="multiple" name="tags[]">
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputImage">Content</label>
        <textarea name="content" class="form-control my-editor"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-secondary">Add</button>
</form>

@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<script src="{{ asset('backend/admin/product/add/add.js')}}"></script>

@endsection