







     
<!--  Seção de produtos em tendência -->
<div>
    <section class="trending-product" id="trending">
      
        <div class = "main-wrapper">
            <div class = "container">
                <div class = "product-div">
                    <div class = "product-div-left">
                        <div class = "img-container">
                            <img src="{{ asset($product->productImages[0]->image) }}" alt="">
                        </div>
                       
                    </div>
                    <div class = "product-div-right">
                        <span class = "product-name">{{ $product->name }}</span>
                        <span class = "product-price">R$ {{ $product->selling_price }}</span>
                        <div class = "product-rating">
                            <div class="quantity-container">
                                <button class="quantity-button" id="decrement">-</button>
                                <input class="quantity-input" id="quantity" type="text" value="1">
                                <button class="quantity-button" id="increment">+</button>
                            </div>
                        
                        </div>
                        <p class = "product-description">{{ $product->small_description }}</p>
                        <div class = "btn-groups">
                            <button type = "button" class = "add-cart-btn"><i class='bx bx-cart'></i> adicionar ao carrinho</button>
                            <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>compre agora</button>
                            <div class="heart-icons">
                                @if($isInWishlist)
                                    <i wire:click="removeFromWishlist({{ $product->id }})" class='bx bxs-heart'></i>
                                @else
                                    <i wire:click="addToWishList({{ $product->id }})" class='bx bx-heart'></i>
                                @endif
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  
</div>
{{--  
      <div class="center-text">
            <h2><span>{{ $product->name }}</span></h2>
        </div>
        <div class="productInformations" >
            R${{ $product->selling_price}}
          </div>
    
        <div class="products">
            <div class="row">
                <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">
                    <img src="{{ asset($product->productImages[0]->image) }}" id="singularProductImage" alt="" style="border: 2px solid #2c2c2c;">
                </a>
    
                <div class="product-info">
                    <div class="product-text">
                        @if($product->quantity > 0)
                            <h5>Em estoque</h5>
                        @else
                            <h5 style="background-color: red;">Fora de estoque</h5>
                        @endif
                    </div>
    
<div class="heart-icon">
    @if($isInWishlist)
        <i wire:click="removeFromWishlist({{ $product->id }})" class='bx bxs-heart'></i>
    @else
        <i wire:click="addToWishList({{ $product->id }})" class='bx bx-heart'></i>
    @endif
</div>

<div class="ratting">
    <i class='bx bx-star'></i>
    <i class='bx bx-star'></i>
    <i class='bx bx-star'></i>
    <i class='bx bx-star'></i>
    <i class='bx bxs-star-half'></i>
</div>


</div>
</div>
</div> --}}