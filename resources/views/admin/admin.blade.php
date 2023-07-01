<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')|Administration </title>
    <script src="https://kit.fontawesome.com/2e22c8f32b.js" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    @vite('resources/js/app.js')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-5">
        <a class="navbar-brand" href="#">Akabnam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        @php
           $route = request()->route()->getName(); 
        @endphp
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link"  href="{{route('accueil')}}">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a @class(['nav-link','active'=>str_contains($route, 'shop.')]) href="{{route('admin.shop.index')}}">Gérer les boutiques</a>
            </li>
            <li class="nav-item">
              <a @class(['nav-link','active'=>str_contains($route, 'product.')]) href="{{route('admin.product.index')}}">Gérer les produits et services</a>
            </li>
            <li class="nav-item">
              <a @class(['nav-link','active'=>str_contains($route, 'category.')]) href="{{route('admin.category.index')}}">les catégories</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="my-3">
               @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                 @endforeach
            </ul>
             </div>
        @endif  
        @yield('content')

    </div>
       
  <script>
    document.querySelectorAll('select[multiple]').forEach((el)=>{
	let settings = {plugins:{remove_button: {title :'supprimé'}}};
 	new TomSelect(el,settings);
});
    

  </script>
     
</body>
</html>