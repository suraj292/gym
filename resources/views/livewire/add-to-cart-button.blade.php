<div>
    <button class="mb-1 add-to-cart-btn push-btn theme-button theme-button w-full" onclick="addToCart({{$product}})">
        <span class="push-btn-surface w-full">
            <span >Add to Cart</span>
            @if($product->discount)
                <span >₹{{ $product->price - $product->discount }}</span>
                &nbsp;&nbsp;
                <span style="text-decoration: line-through">₹{{ $product->price }}</span>
            @else
                <span>₹{{ $product->price }}</span>
            @endif
        </span>
    </button>
    <br>
    <br>
    @php
        $user = auth()->user();
        if ($user) {
            $route = route('public.cart');
        } else {
            $route = route('public.login');
        }
    @endphp
    <a href="{{ $route }}" class="mb-1 add-to-cart-btn push-btn theme-button theme-button w-full">
        <span class="push-btn-surface w-full">
            <span >Go to Cart</span>
        </span>
    </a>
</div>
