
@if(getdate(strtotime($product->end_time))[0] > time())
    <div class="product mb-4">
        <a href="./shop/product/{{$product->id}}">
            <img class="img-fluid" src="./front/img/products/{{$product->productImages[0]->path}}" alt="product">
        </a>
        <div class="cta shadow d-inline-block"><a class="product-btn" href="./shop/product/{{$product->id}}"><i class="fas fa-heart"></i></a></div>
    </div>
    <div class="pro-text">
        <h6 class="pro-title"><a class="reset-anchor" href="">{{$product->name}}</a></h6>
        <p class="pro-price">Current price <span>${{number_format($product->historyAuctions[count($product->historyAuctions) - 1]->price ?? $product->price,2)}}</span></p>
        <div>
            <div class="CountDown-box">
                <input class="timeData" type="hidden" value="{{$product->end_time}}">
                <div class="CountDown"></div>
                <span class="pro-user">{{count($product->historyAuctions)}} <span><i class="fa-solid fa-user"></i></span></span>
            </div>
        </div>
    </div>
@endif
