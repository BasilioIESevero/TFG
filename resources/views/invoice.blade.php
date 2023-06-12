<!DOCTYPE html>
<html>
<head>
    <title>Hotellerie Factura</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">Factura</h1>
</div>
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100"> Id Factura - <span class="gray-color">{{ $order->id }}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Fecha de Factura - <span class="gray-color">{{ $order->created_at->format('d-m-Y') }}</span></p>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    @if($order->envio_type == 1)
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Recogida en tienda</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>Hotellerie</p>
                    <p>03130</p>
                    <p>C/ Burgos,</p>
                    <p>Santa Pola,</p>
                    <p>Alicante</p>
                    <p>Contacto : 921232323</p>
                </div>
            </td>        
        </tr>
    </table>
    @else
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Desde</th>
            <th class="w-50">Para</th>
        </tr>
        <tr>
        <td>
                <div class="box-text">
                    <p>Hotellerie</p>
                    <p>03130</p>
                    <p>C/ Burgos,</p>
                    <p>Santa Pola,</p>
                    <p>Alicante</p>
                    <p>Contacto : 921232323</p>
                </div>
            </td>
            <td>
            @php $address = json_decode($order->envio) @endphp 
                <div class="box-text">
                    <p>{{ $address->city }}</p>
                    <p>{{ $address->address}}</p>        
                    <p>{{ $address->district}}</p>
                    <p>{{ $address->reference}}</p>
                    <p>{{ $order->contact}}</p>
                    <p>{{ $order->phone}}</p>
                </div>
            </td>
           
        </tr>
    </table>
    @endif
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Product Name</th>
            <th class="w-50">Price</th>
            <th class="w-50">Qty</th>
            <th class="w-50">Subtotal</th>
        </tr>
        @foreach ($order->getLines() as $line)
        <tr align="center">
            <td>{{ $line['name']}}</td>
            <td>{{ $line['price']}} €</td>
            <td>{{ $line['qty']}}</td>
            <td>{{ $line['subtotal']}} €</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Envío</p>
                        <p>Total a pagar</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>{{$order->shipping_cost}} €</p>    
                        <p>{{$order->total}} €</p>
                    </div>
                    <div style="clear: both;"></div>
                </div> 
            </td>
        </tr>
    </table>
</div>
</html>