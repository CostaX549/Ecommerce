<?php

namespace App\Livewire\Frontend\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class View extends Component
{
    public $category, $product, $prodColorSelectedQuantity;
    public $isInWishlist = false;

    public function addToWishList($productId)
    {
        if (Auth::check()) {
            if (Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {
                $this->dispatch('message', title: 'Já foi adicionado a lista de desejo', type: 'warning');
                return false;
            } else {
                $wishlist = Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->isInWishlist = true; // Defina como true após adicionar com sucesso
                $this->dispatch('message', title: 'Adicionado à lista de desejos com sucesso.', type: 'success');
            }
        } else {
            $this->dispatch('message', title:'Por favor faça login para continuar.', type:  'info');
            return false;
        }
    }

    public function colorSelected($productColorId)
    {
        $productColor = $this->product->productColors()->where('id', $productColorId)->first();
        $this->prodColorSelectedQuantity = $productColor->quantity;

        if ($this->prodColorSelectedQuantity == 0) {
            $this->prodColorSelectedQuantity = 'ForaDeEstoque';
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
        
        // Verifique se o produto já está na lista de desejos do usuário
        if (Auth::check()) {
            $userId = auth()->user()->id;
            $productId = $this->product->id;

            if (Wishlist::where('user_id', $userId)->where('product_id', $productId)->exists()) {
                $this->isInWishlist = true;
            }
        }
    }

    public function render()
    {

    
     
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product,
        
            
        ]);
    }

    public function removeFromWishlist($productId)
    {
    
        if (auth()->check()) {
            $userId = auth()->user()->id;
    
            $wishlistItem = Wishlist::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();
    
            if ($wishlistItem) {
               
                $wishlistItem->delete();
    
              
                $this->isInWishlist = false;
    
              
                $this->dispatch('message', title: 'Item removido da lista de desejos.', type: 'success');
            } else {
               
                $this->dispatch('message', title: 'Item não encontrado na lista de desejos.', type:'warning');
            }
        } else {
            $this->dispatch('message', title: 'Por favor faça login para continuar.', type: 'info');
        }
    }
}
