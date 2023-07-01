@extends('admin.admin')
@section('title', $category->exists ? "Editer une categorie":"Créer une catégorie")
@section('content')
<h1>@yield('title')</h1>

<form class="vsstack gap-2" action="{{route($category->exists ? 'admin.category.update': 'admin.category.store', $category)}}" method='post'>
@csrf
@method($category->exists?'put':'post')

<div class="row">
    @include('shared.input', ['class'=>'col','label'=>'Nom de la categorie', 'name'=>'category','value'=>$category->category])

<div class='mt-2'>
<button class="btn btn-primary">
    @if($category->exists)
      Modifier
    @else
   créer
    @endif
</button>
</div>
</form>
@endsection