* Informations affichées :
    - Catalogue :
        - name
        - image
        - price

    - Fiche produit :
        - image
        - name
        - price
        - description
        - quantity
        - category
        - reference

        - is_on_sale -> voir section suivante
        - is_visible -> voir section suivante

* Gestions des états (soldés, visibles) :
    - Si le produit est soldé, rajouter un bandeau dans sa fiche et sur son aperçu
      dans le catalogue.
    - Si le produit n'est pas visible, ne pas l'afficer dans le catalogue
      ET remplacer sa fiche produit par un message comme "Nous sommes désolés,
      ce produit n'est pas disponible pour le moment."

Todo list :
- Gérer l'état is_visble -> fait