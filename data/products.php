<?php

$products = array(
  'Alimentaire' => array( //Categorie
    array( //Produi
      'id' => 1,
      'name' => 'Pâtes', 
      'description' => 'De superbes pâtes, à déguster chez soi.',
      'avis' => array( //Avis
        array(
          'text' => 'Super produit',
          'author' => 'RapideEtDangereux',
          'date' => '08/02/2020'
        ),
        array(
          'text' => 'Jamais vu des pâtes de cette qualité.',
          'author' => 'Patrice',
          'date' => '06/02/2020'
        ),
        array(
          'text' => 'Une surprise gustative',
          'author' => 'Titouan',
          'date' => '08/02/2020'
        ),
      )
    ),
    array( //Produit
      'id' => 2,
      'name' => 'Riz',
      'description' => 'Riz digne de la gastronomie française.',
      'avis' => array( //avis
        array( 
          'text' => 'Un produit à la hauteur de sa description',
          'author' => 'Raphael',
          'date' => '08/02/2020'
        ) 
      ),
    ),
    array(
      'id' => 3,
      'name' => 'Sushis',
      'description' => 'Plat japonais connu dans le monde. (meilleur plat de l\'univers selon votre formateur, et c\'est une vérité absolue)',
      'avis' => array(
        array(
          'text' => 'Super produit',
          'author' => 'RapideEtDangereux',
          'date' => '08/02/2020'
        ),
        array(
          'text' => 'Jamais vu des sushis de cette qualité.',
          'author' => 'Patrice',
          'date' => '06/02/2020'
        ),
        array(
          'text' => 'Une surprise gustative',
          'author' => 'Titouan',
          'date' => '08/02/2020'
        ),
      )
    ),
    array(
      'id' => 4,
      'name' => 'Baguettes de pain',
      'description' => 'Croustillant et appétissant'
    )
  ),
  'Cosmétique' => array(
    array(
      'id' => 5,
      'name' => 'Crème Inconnue',
      'description' => 'Une crème dont on ne connait pas du tout les effets. Vous pouvez la tester, mais il y a sûrement des risques.'
    )
  ),
  'Bandes dessinées' => array(
    array(
      'id' => 6,
      'name' => 'Attaque des titans',
      'description' => 'Un chef d\'oeuvre. Le meilleur manga au monde. (et votre formateur ne veut rien savoir. He is watching you)',
      'avis' => array(
        array(
          'text' => 'Prends ce manga. Tout de suite.',
          'author' => 'Eren',
          'date' => '08/02/2020'
        )
      )
    ),
    array(
      'id' => 7,
      'name' => 'Attaque des titans',
      'description' => 'Il est mentionné une deuxième fois pour être sûr que vous ne le ratiez pas.'
    ),
  )
);