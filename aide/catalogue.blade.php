<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Catalogue</title>
        <link rel="icon" type="image/gif/png" href="storage/images/logos/Burger.png">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/catalogue.css">
    </head>

    @include('layout.header')

    <body>
        <div class="main_wrapper">
            @if (isset($category))
            <h2 class="welcome">{{strtoupper($category)}}</h2>
            @else
            <h2 class="welcome">Bienvenue sur what2eat, le site de commande rapide de spécialités culinaires !</h2>
            @endif
            <div class="catalog">
                @foreach ($products as $product)
                    @if (isset($category))
                        @if (strtolower($product->category) == $category)  
                            <div class="product_div">
                                <div class="product_image">
                                    <img src="{{asset('storage/images/products/'.$product->image)}}" alt="{{$product->name}}">
                                </div>
                                <div class="product_info">
                                    <div>
                                        <h2><b>{{$product->name}}</b></h2>
                                        <@php $product_id = $product->id @endphp
                                        <a href="{{url('product', ['id'=>$product_id])}}"><p>Voir la spécialité</p></a>>
                                    </div>
                                    @if ($product->stock > 0)
                                    <form action="/cart" method="post">
                                        @csrf
                                        <input type="hidden" name="product_quantity" value="1">
                                        <input type="hidden" name="product_id" value="{{$product_id}}">
                                        <input type="submit" value="ACHETER" class="button">
                                    </form>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="product_div">
                            <div class="product_image">
                                <img src="{{asset('storage/images/products/'.$product->image)}}" alt="{{$product->name}}">
                            </div>
                            <div class="product_info">
                                <div>
                                    <h2><b>{{$product->name}}</b></h2>
                                    @php $product_id = $product->id @endphp
                                    <a href="{{url('product', ['id'=>$product_id])}}"><p>Voir la spécialité</p></a>
                                @if ($product->stock > 0)
                                </div>
                                <form action="/cart" method="post">
                                    @csrf
                                    <input type="hidden" name="product_quantity" value="1">
                                    <input type="hidden" name="product_id" value="{{$product_id}}">
                                    <input type="submit" value="ACHETER" class="button">
                                </form>
                                @else
                                <p>Hors stock</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

        @include('layout.footer')

    </body>
</html>