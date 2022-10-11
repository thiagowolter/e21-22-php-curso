<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }
        label{
            color: white;
            display: inline-block;
            width: 200px;
        }
        .form-product{
            color: black;
            width: 400px;
            border: 2px solid greenyellow ;
            border-radius: 5%;
            margin-bottom: 20px;
        }
        input.enviar{
            color: white;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

        @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">X</button>

            {{session()->get('message')}}

            </div>

        @endif

            <h1 class="title">Adicionar produto</h1><br>
        

        <form class="form-product" action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data"">

            @csrf

            <div style="padding:15px;">
                <label>Produto</label>
                <input type="text" name="title" placeholder="Insira um produto" required>
            </div>

            <div style="padding:15px;">
                <label>Preço</label>
                <input type="text" name="price" placeholder="Insira o preço" required>
            </div>

            <div style="padding:15px;">
                <label>Descrição</label>
                <input type="text" name="des" placeholder="Insira a descrição" required>
            </div>

            <div style="padding:15px;">
                <label>Quantidade</label>
                <input type="text" name="quantity" placeholder="Insira a quantidade" required>
            </div>

            <div style="padding:15px;">
                <input class="enviar" type="file" name="file">
            </div>

            <div style="padding:15px;">
                <input class="enviar" type="submit">
            </div>

        </form>
        </div>
    </div>

    <!-- partial -->
    @include('admin.script')
</body>

</html>