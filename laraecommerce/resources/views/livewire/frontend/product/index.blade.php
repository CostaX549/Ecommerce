

<div>
    
   
          
            
     
     

     
         <!--  Seção de produtos em tendência -->
<!--  Seção de produtos em tendência -->
<br>
<br>
<br>
<section  id="trending" style="padding: 0px;">

    <div class="center-text">
       <h2>Nossos Produtos da Categoria: <span>{{ $category->name }}</span></h2>
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
         


</div> 
           
                
  



