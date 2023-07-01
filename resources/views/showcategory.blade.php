@extends('layouts.app')
@section('content')
@include('partials.navbar')
<div class="container-fluid">

    <div class='row banner_category px-4 py-5'>
      <div class='text-center'><h3>{{products.name}}</h3></div> 
      <div class="text-center">
          <p>{{products.description}}</p>
      </div> 
  </div>
  </div>
  <div class="container">
      <div class="row mt-4">
      <div class="col-md-3">
           <!-- <p>Filtre</p> -->
      </div>
      <div class="col-md-9 mb-5">
            <h3 class="px-2 py-2">Trouver l'article de vos rêves</h3>
            <div class="row d-flex justify-content-between ">
                  {% for product in products.products%}
                  {# <!-- card simple-->  #}
                 <div class="card3 col-6 col-lg-4 col-md-3 col-sm-4 mb-3">
                   <a href="{{ path('show', {'id' :product.id} )}}">
                    <img src="/images/products/{{product.image}}" class='card-img-top'style="height:80%; width: 100%"alt="">
                    <div class="card3-name">
                      <p class="text-center">{{product.name}}</p>
                    </div>
                   </a>
                 </div>
                 {% endfor %}
               
             </div>
      </div>
  
      
  </div>
  
  </div>
  @include('partials.footer')
