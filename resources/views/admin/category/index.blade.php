@extends('admin.admin')
@section('title', 'Toutes les catégories')
@section('content')

<div class="d-flex justify-content-between align-items-center">
<h1>@yield('title')</h1>
<a href="{{route('admin.category.create')}}" class='btn btn-primary'>Ajouter une catégorie</a>
</div>
<table class="table table-striped">
<thead>
    <tr>
        <th>nom</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($categories as $category)
          <tr>
            <td>{{$category->category}}</td>
            
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                   <a href="{{Route('admin.category.edit', $category)}}" class='btn btn-primary'>Editer</a>
                   <form action="{{Route('admin.category.destroy', $category)}}" method="post">
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

{{$categories->links()}}
@endsection

