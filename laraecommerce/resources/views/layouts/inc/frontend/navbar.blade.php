<header>
    <a href="" class="logo"><img src="image/logo.png" alt=""></a>
  
    <ul class="navmenu">
        <li><a href="/">home</a></li>
        <li><a href="/collections">categorias</a></li>
        <li><a href="/wishlist">produtos</a></li>
        <li><a href="">page</a></li>
        <li><a href="">Docs</a></li>
    </ul>
  
    <div class="nav-icon">
        <a href="#"><i class='bx bx-search'></i></a>
        <a href="/login"><i class='bx bx-user'></i></a>
        <a href="{{ url('cart')}}"><i class='bx bx-cart'><div class="counter">(@livewire('frontend.cart.cart-count'))</div></i></a>
        
        <a href="{{ url ('wishlist')}}"><i class='bx bx-heart'><div class="counter">(@livewire('frontend.wishlist-count'))</div></i></a>
        <a href="/orders"><i class='bx bx-shopping-bag'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
 
    </div>
  </header>