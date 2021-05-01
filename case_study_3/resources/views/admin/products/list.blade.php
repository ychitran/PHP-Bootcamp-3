@extends('layout.admin_layout')

@section('tittle')
Product
@endsection





@section('content')
<table class="table table-striped text-center">
    <div class="row">
        <div class="col-md-9 col-9">
            <h4>List Product</h4>
            @if(Session::has('success'))
            <p aria-hidden="true" class="text-success"> {{Session::get('success')}}</p>
            @endif
        </div>
        <div class="col-md-3 col-3 text-center">
            <a href="{{route('products.create')}}"><button type="button" class="btn btn-outline-info">Add Product</button></a>
        </div>
    </div>
    <thead class="table-success">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Images</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>

        </tr>
    </thead>



</table>
<br>
<div class="col-md-12" style="margin-bottom: 1rem">

</div>




@endsection