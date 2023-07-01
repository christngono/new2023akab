
@extends('layouts.app')
@section('content')
@include('partials.navbar')
<div class="container">

    <div aria-label="breadcrumb " style="padding-top: 50px;">
       <ol class="breadcrumb ">
         <li class="breadcrumb-item active" aria-current="page">Acceuil</li>
         <li class="breadcrumb-item"><a href="{{path('showCategory',{'name' :product.category})}}">{{product.category}}</a></li>
   
       </ol>
     </div>
    <div class="row mt-2">
          <div class="col-md-12 py-3"><h1>{{product.name| title}}</h1></div>
          <div class='col-md-12'>
             <ul class="rating">
             <span><i class="fas fa-star start_co"></i></span>
             <span><i class="fas fa-star start_co"></i></span>
             <span><i class="fas fa-star start_co"></i></span>
             <span><i class="fas fa-star start_co"></i></span>
             <span>(3/5)</span>
             <span>Ma boutique</span>
          </ul>
         
       </div>
       
    </div>
 <div class="row d-flex justify-content-between ">
 
    <div class="col-md-7 room-gallery">
         <!-- <img src="/images/products/{{product.image}}" alt="image1" height="450px" width="100%" class="rounded gallery-highlight">
         <div class="product-preview py-2">
            <img src="/images/products/{{product.image1}}" alt="" class="product-active rounded"/>
            <img src="/images/products/{{product.image2}}" alt="" class="rounded"/>
            <img src="/images/products/{{product.image3}}" alt="" class="rounded"/>
         </div> -->
         <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="/images/products/{{product.image}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="/images/products/{{product.image2}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/products/{{product.image3}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
 
 
 
    </div>
 
 
 <div class="col-md-4 d-flex align-items-end flex-column bd-highlight ">
      <div class="p-2 bd-highlight">
         <h3 class=" " >{{product.price}} F CFA</h3>
      </div>
      <div class="col-12  bo-b bo-top p-2 bd-highlight">
        <p class="text-end">{{product.salecondition|raw}}</p>
 
      </div>
      <div class=" zone-action col-10 p-2 bd-highlight " >
       <a href='' class='my-2 b-act' id="liveToastBtn" >Contacter</a>
       <a href='' class='b-act-s'>Payer</a>
    </div>
 
    <div class=" p-3" style="z-index: 11">
       <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
           <img src="..." class="rounded me-2" alt="...">
           <strong class="me-auto">Bootstrap</strong>
           <small>11 mins ago</small>
           <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
           Hello, world! This is a toast message.
         </div>
       </div>
     </div>
    
 </div>
 
 </div>
 
 
 <div class="row">
  <div class="col-md-7  col-12 py-3 ">
     <h3>Description</h3>
     <div class="wrapper-code py-4 px-2">{{product.bref|raw}}</div>
  </div>
  <div class="col-md-7 col-12 py-3 ">
    <h3>Avantages</h3>
    <div class="wrapper-avantage py-4 px-2">{{product.salecondition|raw}}</div>
 </div>
 
 
 </div>
                      
   
 </div>
  @include('partials.footer')