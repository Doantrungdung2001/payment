{{-- @if(Session::has("Cart") != null)

<div class="select-items">
    <table>
        <tbody>
            @foreach(Session::get('Cart')->product as $item)
            <tr>
                <td class="si-pic"><img src="assets/img/products/{{$item['productInfo']->img}}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{number_format($item['productInfo']->price)}}₫ x {{$item['quanty']}}</p>
                        <h6>{{$item['productInfo']->name}}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
</div>
@endif --}}
@if(Session::has("Cart") != null)
    <div class="select-items">
        <table>
            <tbody>
                                                    @foreach(Session::get('Cart')->product as $item)
                                                    <tr>
                                                        <td class="si-pic"><img src="assets/img/products/{{$item['productInfo']->img}}" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{number_format($item['productInfo']->price)}}₫ x {{$item['quanty']}}</p>
                                                                <h6>{{$item['productInfo']->name}}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                    {{-- @foreach($product as $prd)
                        @if($prd['sub_products'] != null )
                            @foreach($prd['sub_products'] as $item)
                            <td class="si-pic"><img src="{{$item['image_url']}}" alt=""></td>
                            <td class="si-text">
                                <div class="product-selected">
                                    <p>{{number_format($prd['cost'])}}₫</p>
                                    <h6>{{$prd['name']}}</h6>
                                </div>                                   
                            </td>
                            <td class="si-close">
                                <i class="ti-close" data-id="{{$item['id']}}"></i>
                            </td>                                    
                                                               
                            @endforeach
                        @endif
                    @endforeach      --}}
                </tbody>
            </table>
        </div>
    <div class="select-total">
        <span>total:</span>
             <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
        </div>
@endif
                                                    
