<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">

        <table style="margin: top 20px;">
            <tr style="background-color:grey ; align-items:center; ">
                <td style="padding:20px ;">Title</td>
                <td style="padding:20px ;">Description</td>
                <td style="padding:20px ;">Quantity</td>
                <td style="padding:20px ;">Price</td>
                <td style="padding:20px ;">Image</td>
                <td style="padding:20px ;">Update</td>
                <td style="padding:20px ;">Delete</td>
            </tr>

            @foreach($data as $product)

            <tr align="center" style="background-color:black;">
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <img height="120px" width="70px" src="/productimage/{{$product->image}}" alt="/productimage/{{$product->image}}">
                </td>

                <td>
                    <a class="btn btn-primary" href="{{url('updateproduct',$product->id)}}">Update</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>

        </div>
    </div>

    <!-- partial -->
    @include('admin.script')
</body>

</html>