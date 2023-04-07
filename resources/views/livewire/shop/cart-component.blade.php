<div>
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        {{-- Cuenta los tipos deproductos agregados al carrito --}}
        {{-- {{ \Cart::session(auth()->id())->getContent()->count() }} --}}

        {{-- Cuenta la cantidad de productos agregados al carrito --}}
        {{ \Cart::session(auth()->id())->getTotalQuantity()}} 
</div>
