<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Catalogue</title>
        <link rel="icon" type="image/gif/png" href="{{URL::asset('images/logos/shopping_bag.png')}}">
        <link rel="stylesheet" href="{{URL::asset('css/variables.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/product.css')}}">
    </head>

    <body>
        <div class="main_wrapper">
            {{-- On n'affiche la fiche du produit que s'il est visible --}}
            @if($product->is_visible == 1)
                <div class="product_div">
                    {{-- Si le produit est soldé, un bandeau est ajouté pour l'indiquer à l'utilisateur --}}
                    @if($product->is_on_sale == 1)
                        <h2 class="on_sale">EN SOLDE !</h2>
                    @endif

                    {{-- Affichage du nom et de l'image du produit --}}
                    <div class="base">
                        <h2 class="product_name"><b>{{$product->name}}</b></h2>

                        <div class="product_image">
                            <img src="{{asset('images/products/'.$product->image.'.png')}}" alt="{{$product->name}}">
                        </div>
                    </div>

                    {{-- Affichage des autres informations du produit --}}
                    <div class="product_info">
                        <p>{{$product->price}} €</p>
                        <p>{{$product->description}}</p>
                        <p>Quantité : {{$product->quantity}}</p>
                        <p>Catégorie : {{$product->category}}</p>
                        <p>Référence : {{$product->reference}}</p>
                    </div>

                    {{-- Lien de redirection vers le catalogue --}}
                    <a class="link" href="{{url('/')}}">Retour au catalogue</a>
                </div>
            {{-- Si le produit n'est pas visible, on affiche un message spécifique à la place de sa fiche --}}
            @else
                <div class="not_visible">
                    <h2>Nous sommes désolés, le produit <span>{{$product->name}}</span> n'est pas disponible pour le moment.</h2>
                    <h3><a href="{{url('/')}}">Retour au catalogue</a></h3>
                </div>
            @endif
        </div>

    </body>
</html>
