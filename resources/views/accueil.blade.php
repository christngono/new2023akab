@extends('layouts.app')

@section('content')
@include('partials.navbar')
<style>
       .message_p{
          font-size:1.2rem;
       }
</style>


    <div class="container">
      <div class="row text-center ">
        <div class="col-md-12 mt-3 mb-3 rounded banner_simple px-4 py-5">
          <h3>Lancez votre activite en ligne</h3>
          <p class="col-md-8 message_p mx-auto col-12">Passez moins de temps à gérer votre boutique et plus de temps sur ce qui vous amuse. Nous vous aidons à developper votre activité</p>
        </div>
      </div>  
      </div>
 

      <div class="container mt-5 mb-5 ">
        <h2 class='pb-3 title-article'>Trouvez l'article de vos rêves</h2>
       
        <div class="row mi-h">

     
         
        <div class="card1 col-6 col-lg-3 col-md-3 col-sm-4" style="max-width:300px" >
        <a href="#">
          <img src="#" class="card-img-top rounded"  style="width: 100%" alt="...">
          <div class="card-body">
            <h5 class="card-name">#</h5>
            <p class="card-shop">#</p>
            <ul class="rating">
              <span><i class="fas fa-star start_co"></i></span>
              <span><i class="fas fa-star start_co"></i></span>
              <span><i class="fas fa-star start_co"></i></span>
              <span><i class="fas fa-star start_co"></i></span>
             
            </ul>
            <div class="card-price"><span class=''>10 000F CFA</span></div>
            
          </div>
              </a>
      </div>
  
   <!-- /end card simple-->  
    </div>
    </div>


    <!-- banniere simple--> 
     <div class="container-fluid">
      <div class="row text-center ">
        <div class="col-md-12 mt-5 mb-5 banner_simple_vert px-4 py-5">
          <h3>Créez votre boutique.</h3>
          <p class="col-md-8 message_p mx-auto col-12">Rejoignez une place de marché créative sur laquelle des milliers d'acheteurs 
            sont impatients de découvrir ce que vous allez proposer</p>
        </div>
      </div> 
      </div>
  <!-- /end_banniere simple--> 
    <div class="container mi-h ">
      <h2 class='text-center pb-3 '>Découvrez nos meilleurs services</h2>
     
         <div class="row d-flex justify-content-between">
  
           <!-- card simple-->  
          <div class="card3 col-6 col-lg-4 col-md-3 col-sm-4 mb-3">
            <a href="#">
             <img src="#" class='card-img-top'style="height:80%; width: 100%"alt="">
             <div class="card3-name">
               <p class="text-center">#</p>
             </div>
            </a>
          </div>
     
      </div>
      </div>
     

      <div class="container">
        <div class="col-md-12">
          <h2 class="titre text-center">Il nous ont font confiance</h2>
   
        </div>
        <div class="col-md-8 mx-auto">
          <p class=" text-center ">Créez votre boutique sur Akabnam, on vous accompagne à augmenter vos ventes et à gérer vos opérations quotidiennes.</p>
        </div>
       
          <div class="row pt-5 d-flex justify-content-between banner_simple">
         
            
            <div class="col text-center">
              <a href="#">
                  <img src="#" class="rounded-circle" width="100px" height="100px" alt="alt">
                  <div>{#}</div>
                </a>
            </div>
         
                
          </div>
      </div>
      @include('partials.footer')
 

 