@foreach($product as $prd)
    @if($prd['sub_products'] != null )
        @foreach($prd['sub_products'] as $item)

            <h5>{{$prd['cost']}}</h5>
        @endforeach
   
    @endif
@endforeach 