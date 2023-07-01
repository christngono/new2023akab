@extends('admin.admin')
@section('title', 'Toutes les boutiques')
@section('content')

<div class="d-flex justify-content-between align-items-center">
<h1>@yield('title')</h1>
<a href="{{route('admin.shop.create')}}" class='btn btn-primary'>Ajouter un produit</a>
</div>
<table class="table table-striped">
<thead>
    <tr>
        <th>name</th>
        <th>imagebanner</th>
        <th>description</th>
        <th>localisation</th>
        <th>note</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($shops as $shop)
          <tr>
            <td>{{$shop->name}}</td>
            <td>{{$shop->description}}</td>
            <td>{{$shop->localisation}}</td>
            <td>{{$shop->note}}</td>
            <td>{{$shop->phone}}</td>
            
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                   <a href="{{Route('admin.shop.edit', $shop)}}" class='btn btn-primary'>Editer</a>
                   <form action="{{Route('admin.shop.destroy', $shop)}}" method="post">
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

{{$shops->links()}}
@endsection

