<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>{{ $carrito->id }}</h2>

    @foreach ($lines as $lines)
        <h3>{{ App\Models\Product::find($lines->product_id)->name }} - {{ $lines->units }} - Subtotal:
            {{ App\Models\Product::find($lines->product_id)->price * $lines->units }}€</h3>

        <h3>Subtotal con Impuestos: {{ App\Models\Product::find($lines->product_id)->price * $lines->units * 0.21 }}€
        </h3>

        <h3>Total: {{ App\Models\Product::find($lines->product_id)->price * $lines->units * 1.21 }}</h3>
    @endforeach

</body>

</html>
