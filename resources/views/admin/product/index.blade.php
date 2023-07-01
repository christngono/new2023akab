@extends('admin.admin')
@section('title', 'tous les produits')
@section('content')

<div class="d-flex justify-content-between align-items-center">
<h1>@yield('title')</h1>
<a href="{{route('admin.product.create')}}" class='btn btn-primary'>Ajouter un produit</a>
</div>
<table class="table table-striped">
<thead>
    <tr>
        <th>name</th>
        <th>price</th>
        <th>image</th>
        <th>bref</th>
        <th>salecondition</th>
        <th>avantage</th>
        <th>view</th>
        <th>numberlike</th>
        <th>is_sold</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{number_format($product->price, thousands_separator:' ')}} F</td>
            <td>{{$product->image}}</td>
            <td>{{$product->bref}}</td>
            <td>{{$product->salecondition}}</td>
            <td>{{$product->avantage}}</td>
            <td>{{$product->view}}</td>
            <td>{{$product->nnumberlike}}</td>
            <td>{{$product->is_sold}}</td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                   <a href="{{Route('admin.product.edit', $product)}}" class='btn btn-primary'>Editer</a>
                   <form action="{{Route('admin.product.destroy', $product)}}" method="post">
                            @csrf
                            @method("DELETE")
                                <button class="btn btn-danger">Supprimer</button>
                   </form>
                </div>
            </td>
          </tr>

    @endforeach
</tbody>
</table>

{{$products->links()}}
@endsection

