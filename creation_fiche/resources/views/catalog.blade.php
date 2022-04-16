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
            <h2>Bienvenue sur notre site !<br>
                Sélectionnez un produit pour accéder à toutes ses informations.</h2>
            <div class="catalog">
                @foreach ($products as $product)
                    {{-- On n'affiche que les produits visibles --}}
                    @if($product->is_visible == 1)
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
                                <p>Prix : {{$product->price}} €</p>
                            </div>

                            @php $product_id = $product->id @endphp
                            <a class="link" href="{{url('produit', ['id'=>$product_id])}}">Voir la fiche produit</a>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

    </body>
</html>
