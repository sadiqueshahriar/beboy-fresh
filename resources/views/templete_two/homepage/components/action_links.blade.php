<form action="{{route('cart-page')}}" method="POST">
    @csrf
    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
    <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
    <div class="custom_btn">
        <button class="btn btn-sm text-white" data-id="{{$product->id}}"> Buy Now</button>
    </div>
</form>