<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Catalogue</title>
        <link rel="icon" type="image/gif/png" href="storage/images/logos/Burger.png">
        <link rel="stylesheet" href="../css/variables.css">
        <link rel="stylesheet" href="../css/product.css">
    </head>

    <body>
        <div class="main_wrapper">
            <h2>[FICHE PRODUIT]</h2>
            <div class="product_div">
                <div class="product_image">
                    <img src="{{asset('images/products/'.$product->image.'.png')}}" alt="{{$product->name}}">
                </div>
                <div class="product_info">
                    <div>
                        <h2><b>{{$product->name}}</b></h2>
                        <p>{{$product->price}} €</p>
                        <p>{{$product->description}}</p>
                        <p>Quantité : {{$product->quantity}}</p>
                        <p>Catégorie : {{$product->category}}</p>
                        <p>Référence : {{$product->reference}}</p>

                        <br>
                        <a href="{{url('catalogue')}}">Retour au catalogue</a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
