@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')



<div id="myEcommerceCarousel" class="owl-carousel">
  @foreach($sliders as $sliderItem)
  <div class="item">
      <img src="{{ asset("$sliderItem->image") }}" alt="">
      <div class="text-overlay">
          <div class="main-text">
              <h5>Coleção de Inverno</h5>
              <h1>{{ $sliderItem->title }}</h1>
              <p>{{ $sliderItem->description }}</p>
              <a href="{{ $sliderItem->link }}" class="main-btn">{{ $sliderItem->text }}<i class='bx bx-right-arrow-alt'></i></a>
          
          </div>
          
      </div>
  </div>
  
@endforeach

</div>

     
<!--  Seção de produtos em tendência -->

<section class="trending-product" id="trending">

   <div class="center-text">
      <h2>Nossos <span>Produtos</span> em alta</h2>
   </div>

   <div class="products">
    @foreach($products as $productItem)
      <div class="row">
        <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">   
          <img src="{{ asset($productItem->productImages[0]->image) }}" alt="">
        </a>
          <div class="product-text">
            @if($productItem->quantity > 0)
              <h5>Em estoque</h5>
              @else
              <h5 style="background-color: red;">Fora de estoque</h5>
              @endif
          </div>
          <div class="heart-icon">
              <i class='bx bx-heart'></i>
          </div>
          <div class="ratting">
              <i class='bx bx-star'></i>
              <i class='bx bx-star'></i>
              <i class='bx bx-star'></i>
              <i class='bx bx-star'></i>
              <i class='bx bxs-star-half'></i>
          </div>
          <div class="price">
              <h4>{{ $productItem->name }}</h4>
              <p>R$ {{ $productItem->selling_price }}</p>
          </div>
      </div>
      @endforeach
  
   </div> 
</section>

<!--    Client-Review-section -->

<section class="client-reviews">
<div class="reviews">
  <h3>Client Reviews</h3>
  <img src="image/team-1.jpg" alt="">
  <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris  <br> nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  voluptate velit  esse cillum dolore eu fugiat  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt <br> in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <h2>Mark Jevenue</h2>
  <p>CEO of Addle</p>
</div>
</section>

<!-- update-news-section -->
<section class="Update-news">
<div class="up-center-text">
  <h2>Novas Atualizações</h2>
</div>

<div class="update-cart">
  <div class="cart">
      <img src="/image/bl-1.png" alt="">
      <h5>01 oct 2023</h5>
      <h4>Let's start bring sale on this summer vacation.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
      <h6>Continue lendo...</h6>
  </div>
  <div class="cart">
      <img src="/image/bl-2.png" alt="">
      <h5>01 oct 2023</h5>
      <h4>Let's start bring sale on this summer vacation.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
      <h6>Continue lendo...</h6>
  </div>
  <div class="cart">
      <img src="/image/bl-3.png" alt="">
      <h5>01 oct 2023</h5>
      <h4>Let's start bring sale on this summer vacation.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
      <h6>Continue lendo...</h6>
  </div>
</div>
</section>

@endsection