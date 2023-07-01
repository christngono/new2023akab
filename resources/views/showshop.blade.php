@extends('layouts.app')
@section('content')
@include('partials.navbar')
<div class="container-fluid ">
    <div class="row bannershop">
    <img src="/images/products/{{shop.imageBanner}}" height: class='rounded' alt="#" /></div>

   {# end of container #} 
</div>
<div class="container">
    <div class="row mt-5 d-flex justify-content-between">
<div class="col-4">
    <div class="row">
   <div class="col-4">
       <img src="/images/products/{{shop.imageProfil}}" class='card-img rounded profil' alt="#" />
   </div>
   <div class="col-6">
       <h6>{{shop.nameshop}}</h6>
       <p>localisation</p>
       <p>
        <ul class="rating">
            <span><i class="fas fa-star start_co"></i></span>
            <span><i class="fas fa-star start_co"></i></span>
            <span><i class="fas fa-star start_co"></i></span>
            <span><i class="fas fa-star start_co"></i></span>
          </ul>
       </p>

   </div>
</div>


</div>
<div class="col-6">
    <p>{{ shop.description|raw }}</p>
</div>
<div class="col-2 text-right">
    <div>
        <img src="https://picsum.photos/50/50" class='rounded' alt="">
        <p>nom du profil</p>
    </div>
    <a href="b-act"></a>
   
</div>
</div>
{#affiche article#}
<div class="container mt-5">
<div class="row">
 <div class="col-md-2">
      <h2>produits</h2>
      <ul>
          <li>chaussure</li>
          <li>habit</li>
          <li>chapeau</li>
          <li></li>
      </ul>
 </div>
 <div class="col-md-10">
     <div class="row  d-flex justify-content-between">
        <div class="card3 col-6 col-lg-4 col-md-3 col-sm-4 mb-3">
            <a href="">
             <img src="https://picsum.photos/640/360" class='card-img-top'style="height:80%; width: 100%"alt="">
             <div class="card3-name">
               <p class="text-center">maboutique</p>
             </div>
            </a>
          </div>
          <div class="card3 col-6 col-lg-4 col-md-3 col-sm-4 mb-3">
            <a href="">
             <img src="https://picsum.photos/640/360" class='card-img-top'style="height:80%; width: 100%"alt="">
             <div class="card3-name">
               <p class="text-center">ma voiture</p>
             </div>
            </a>
          </div>
          <div class="card3 col-6 col-lg-4 col-md-3 col-sm-4 mb-3">
            <a href="">
             <img src="https://picsum.photos/640/360" class='card-img-top'style="height:80%; width: 100%"alt="">
             <div class="card3-name">
               <p class="text-center">ma maison</p>
             </div>
            </a>
          </div>

     </div>
    </div>
    </div>
</div>

</div>
@include('partials.footer')