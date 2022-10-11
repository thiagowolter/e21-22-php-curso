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
        form{
            color: black;
        }
        input.enviar{
            color: black;
            background: white;
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
            <h1 class="title">Adicionar produto</h1><br>
        

        <form action="" style="color: black;">

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
                <input type="file" name="file">
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