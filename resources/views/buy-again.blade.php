<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <style>
        .cart-pic img{
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href=""><i class="fa fa-home"></i> Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="{{url('/Cart')}}">Gi??? h??ng</a></li>
                    <li><a href="{{url('/same-product')}}">S???n ph???m t????ng t???</a></li>
                    <li><a href="{{url('/buy-again')}}">Mua l???i h??ng</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id ="list-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    {{-- <th>H??nh ???nh</th>
                                    <th class=""></th> 
                                    {{-- <th>Gi??</th>
                                    <th>S??? l?????ng</th>
                                    <th>K??ch th?????c</th>
                                    <th>M??u s???c</th>
                                    <th>T???ng</th>
                                    <th>L??u</th> --}}
                                    {{-- <th>X??a</th>--}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                <tr>
                                    <td class="cart-pic-buy-again second-row"><img src="{{$item->image_url}}" alt=""></td>
                                    <td class="cart-title second-row">
                                        <div class="row2">
                                            <div class="col-lg-12 offset-lg-24">
                                                <div class="proceed-checkout">
                                                    <ul>
                                                        <li class="subtotal">T??n s???n ph???m  : <span>{{$item->name}}</span></li>
                                                        <li class="cart-total">Gi?? :<span>{{number_format($item->price)}}???</span></li>
                                                        <li class="cart-total">Gi?? :<span>{{number_format($item->price)}}???</span></li>
                                                        <li class="cart-total">Gi?? :<span>{{number_format($item->price)}}???</span></li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row2">
                                            <div class="col-lg-4 offset-lg-8">
                                                <div class="proceed-checkout">
                                                    <a href="#" class="proceed-btn">Mua l???i h??ng</a>
                                                    <a href="#" class="proceed-btn-2">X??a</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->	

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                        </div>
                        <div class="payment-pic">
                            <img src="assets/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>


     <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <script>
        function DeleteItemListCart(id){
            //console.log(id);
            $.ajax({
                url:'Delete-Item-List-Cart/'+id,
                type:'GET',
            }).done(function(response){
            
                RenderListCart(response);
                alertify.success('X??a s???n ph???m th??nh c??ng');
            });
        }
        
        function SaveItemListCart(id){
            //console.log(id);
            
            $.ajax({
                url:'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type:'GET',
            }).done(function(response){
                //console.log($("#quanty-item-"+id).val());
                if($("#quanty-item-"+id).val() == 0){
                    DeleteItemListCart(id);
                }else{
                    if($("#quanty-item-"+id).val() >= 100){
                        alertify.success('C???p nh???t th???t b???i');
                    }else{
                        RenderListCart(response);
                        alertify.success('C???p nh???t th??nh c??ng');
                    }
                }
                
            });
           
        }
        
        function RenderListCart(response){
            $("#list-cart").empty();
            $("#list-cart").html(response);
            /*-------------------
		    Quantity change
	        --------------------- */
            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function () {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
        }
    </script>
</body>

</html>