@extends('admin.admin')
@section('title', $shop->exists ? "Editer une boutique":"Créer une boutique")
@section('content')
<h1>@yield('title')</h1>

<form class="vsstack gap-2" action="{{route($shop->exists ? 'admin.shop.update': 'admin.shop.store', $shop)}}" method='post'>
@csrf
@method($shop->exists?'put':'post')

<div class="row">
    @include('shared.input', ['class'=>'col','label'=>'Name', 'name'=>'name','value'=>$shop->name])
    @include('shared.input', ['class'=>'col','label'=>'banner', 'name'=>'imagebanner','value'=>$shop->imagebanner])
</div>
<div class="row">
    @include('shared.input', ['class'=>'col', 'label'=>'localisation','name'=>'localisation','value'=>$shop->localisation])
     @include('shared.input', ['class'=>'col','label'=>'Phone','name'=>'phone','value'=>$shop->phone])
     @include('shared.input', ['class'=>'col','label'=>'Note', 'name'=>'note','value'=>$shop->note])
    </div>

    @include('shared.input', ['type'=>'textarea','label'=>'description','name'=>'description','value'=>$shop->description])
   


<div class='mt-2'>
<button class="btn btn-primary">
    @if($shop->exists)
      Modifier
    @else
   créer
    @endif
</button>
</div>
</form>
@endsection