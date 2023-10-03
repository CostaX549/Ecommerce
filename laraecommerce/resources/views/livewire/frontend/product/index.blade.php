

<div>
    
    <div class="container">
        <div class="filters">
            <!-- Opções de ordenação de preço -->
            <div class="filter-section">
                <h5>Ordenar por Preço:</h5>
                <label>
                    <input type="radio" name="priceSort" wire:model="priceInput" wire:click="applyFilter" value="high-to-low" /> Mais caro ao mais barato
                </label>
                <label>
                    <input type="radio" name="priceSort" wire:model="priceInput" wire:click="applyFilter" value="low-to-high" /> Mais barato ao mais caro
                </label>
            </div>
    
            <!-- Marcas -->
            <div class="filter-section">
                <h5>Marcas:</h5>
                @if($category->brands)
                    @foreach ($category->brands as $brandItem)
                        <label>
                            <input type="checkbox" wire:model="brandInputs" wire:click="applyFilter" value="{{ $brandItem->name }}" /> {{ $brandItem->name }}
                        </label>
                    @endforeach
                @endif
            </div>
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



</div> 
           
                
  



