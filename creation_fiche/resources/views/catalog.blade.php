<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Catalogue</title>
        <link rel="icon" type="image/gif/png" href="storage/images/logos/Burger.png">
        <link rel="stylesheet" href="{{URL::asset('css/variables.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/catalog.css')}}">
    </head>

    <body>
        <div class="main_wrapper">
            <h2>[CATALOGUE]</h2>
            <div class="catalog">
                @foreach ($products as $product)
                        <div class="product_div">
                            {{-- Si le produit est soldé, un bandeau est ajouté pour l'indiquer à l'utilisateur --}}
                            @if($product->is_on_sale == 1)
                                <h2 class="on_sale">EN SOLDE !</h2>
                            @endif

                            <h2 class="product_name"><b>{{$product->name}}</b></h2>

                            <div class="product_image">
                                <img src="{{asset('images/products/'.$product->image.'.png')}}" alt="{{$product->name}}">
                            </div>
                            <div class="product_info">
                                <p>Prix : {{$product->price}} €</p>

                                @php $product_id = $product->id @endphp
                                <a href="{{url('produit', ['id'=>$product_id])}}">Voir la fiche produit</a>
                            </div>
                        </div>
                @endforeach
            </div>

        </div>

    </body>
</html>
