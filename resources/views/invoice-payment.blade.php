<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Invoice Payment</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <div class="card-header p-4">
                <a class="pt-2 d-inline-block" href="index.html" data-abc="true"></a>
                <div class="float-right">
                    <h3 class="mb-0">Hóa đơn</h3>
                    Date: 12 Jun,2019
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">Từ:</h5>
                        <h3 class="text-dark mb-1">Shopp Thầy Hóa</h3>
                        <div>29,Trần Đại Nghĩa</div>
                        <div>Hai Bà Trưng,Hà Nội</div>
                        <div>Email: dung.dt194521@sis.hust.edu.vn</div>
                        <div>SDT: 0988716998</div>
                    </div>
                    <div class="col-sm-6 ">
                        <h5 class="mb-3">Đến:</h5>
                        <h3 class="text-dark mb-1">Akshay Singh</h3>
                        <div>478, Nai Sadak</div>
                        <div>Chandni chowk, New delhi, 110006</div>
                        <div>Email: info@tikon.com</div>
                        <div>SDT: +91 9895 398 009</div>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Mặ hàng</th>
                                <th>Mô tả</th>
                                <th class="right">Giá</th>
                                <th class="center">Số lượng</th>
                                <th class="right">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $item)
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">{{$item->name}}</td>
                                <td class="left">Kích thước : {{$item->size}} + Màu sắc :{{$item->color}}</td>
                                <td class="right">{{$item->price}}</td>
                                <td class="center">{{$item->quanty}}</td>
                                <td class="right">{{$item->total_price}}</td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td class="center">2</td>
                                <td class="left">Iphone 8X</td>
                                <td class="left">Iphone 8X with extended warranty</td>
                                <td class="right">$1200</td>
                                <td class="center">10</td>
                                <td class="right">$12,000</td>
                            </tr>
                            <tr>
                                <td class="center">3</td>
                                <td class="left">Samsung 4C</td>
                                <td class="left">Samsung 4C with extended warranty</td>
                                <td class="right">$800</td>
                                <td class="center">10</td>
                                <td class="right">$8000</td>
                            </tr>
                            <tr>
                                <td class="center">4</td>
                                <td class="left">Google Pixel</td>
                                <td class="left">Google prime with Amazon prime membership</td>
                                <td class="right">$500</td>
                                <td class="center">10</td>
                                <td class="right">$5000</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Tổng số tiền</strong>
                                    </td>
                                    <td class="right">{{number_format($totalPrice)}}₫</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Discount (20%)</strong>
                                    </td>
                                    <td class="right">$5,761,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">VAT (10%)</strong>
                                    </td>
                                    <td class="right">$2,304,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong class="text-dark">{{number_format($totalPrice)}}₫</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <form action="{{url('/Cart')}}" method="get">
                    @csrf
                    <button type="submit">ok</button>
                </form>
            </div>
            <div class="card-footer bg-white">
                <p class="mb-0">Shop Thầy Hóa, Hai Bà Trưng, Hà Nội</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
