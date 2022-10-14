@include('user.header');

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*"> <a style="color:red;" href="/allproducts">Todas Camisas</a></li>
                        <li>
                            <form class="form-inline" action="{{url('search')}}" method="get">
                                @csrf
                                <input class="form-control" type="search" name="search" placeholder="Pesquisar Produto">

                                <input style="margin:5px;" class="btn btn-success" type="submit" value="Procurar">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">X</button>

                {{session()->get('message')}}

            </div>

            @endif
            @foreach($data as $product)

            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$product->title}}</h4>
                        </a>
                        <h6>R$ {{$product->price}}</h6>
                        <p>{{$product->description}}</p>


                        <form action="{{url('addcart',$product->id)}}" method="POST">

                            @csrf

                            <input style="width:85px;" type="number" value="1" min="1" class="form-control" name="quantity">

                            <br>

                            <input class="btn btn-primary" type="submit" value="Comprar">
                        </form>
                    </div>
                </div>
            </div>

            @endforeach
            @if(method_exists($data,'links'))
            <div class="d-flex justify-content-center">
                {!! $data->links() !!}
            </div>
            @endif
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>


</body>

</html>