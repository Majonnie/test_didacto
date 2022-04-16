<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Catalogue</title>
        <link rel="icon" type="image/gif/png" href="storage/images/logos/Burger.png">
        <link rel="stylesheet" href="{{URL::asset('css/variables.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/product.css')}}">
    </head>

    <body>
        <div class="main_wrapper">
            {{-- <h2>[FICHE PRODUIT]</h2> --}}
            <div class="product_div">
                {{-- Si le produit est soldé, un bandeau est ajouté pour l'indiquer à l'utilisateur --}}
                @if($product->is_on_sale == 1)
                    <h2 class="on_sale">EN SOLDE !</h2>
                @endif

                <div class="base">
                    <h2 class="product_name"><b>{{$product->name}}</b></h2>

                    <div class="product_image">
                        <img src="{{asset('images/products/'.$product->image.'.png')}}" alt="{{$product->name}}">
                    </div>
                </div>

                <div class="product_info">
                    <p>{{$product->price}} €</p>
                    <p>{{$product->description}}</p>
                    <p>Quantité : {{$product->quantity}}</p>
                    <p>Catégorie : {{$product->category}}</p>
                    <p>Référence : {{$product->reference}}</p>
                </div>

                <a class="link" href="{{url('catalogue')}}">Retour au catalogue</a>
            </div>
        </div>

    </body>
</html>
