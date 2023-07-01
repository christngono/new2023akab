@extends('admin.admin')
@section('title', $product->exists ? "Editer un produit":"Créer un produit")
@section('content')
<h1>@yield('title')</h1>

<form class="vsstack gap-2" action="{{route($product->exists ? 'admin.product.update': 'admin.product.store', $product)}}" method='post'>
@csrf
@method($product->exists?'put':'post')

<div class="row">
    @include('shared.input', ['class'=>'col','label'=>'Name', 'name'=>'name','value'=>$product->name])
    @include('shared.input', ['class'=>'col','label'=>'Price', 'name'=>'price','value'=>$product->price])
</div>
<div class="row">
    @include('shared.input', ['class'=>'col', 'label'=>'View','name'=>'view','value'=>$product->view])
    @include('shared.input', ['class'=>'col','label'=>'Image', 'name'=>'image','value'=>$product->image])
    @include('shared.input', ['class'=>'col','label'=>'Number like','name'=>'numberlike','value'=>$product->numberlike])
</div>
<div class="row">
    @include('shared.select', ['class'=>'col','label'=>'Category','name'=>'category','value'=>$product->category()->pluck('id'), 'multiple'=>'true', 'options'=>$category])
    @include('shared.select', ['class'=>'col','label'=>'Boutique', 'name'=>'shop','value'=>$product->shop()->pluck('id'), 'multiple'=>'true','options'=>$shop])
   
</div>

    @include('shared.input', ['type'=>'textarea','label'=>'Bref','name'=>'bref','value'=>$product->bref])
    @include('shared.input', ['type'=>'textarea','label'=>'Avantage','name'=>'avantage','value'=>$product->avantage])
    @include('shared.input', ['type'=>'textarea','label'=>'Salecondition','name'=>'salecondition','value'=>$product->salecondition])
    @include('shared.checkbox', ['label'=>'Is sale?','name'=>'is_sold','value'=>$product->is_sold])


<div class='mt-2'>
<button class="btn btn-primary">
    @if($product->exists)
      Modifier
    @else
   créer
    @endif
</button>
</div>
</form>
@endsection