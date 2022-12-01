<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>PHP Hotel</title>
  <style>

  </style>
</head>
<body>

<?php
  $hotels = [
    [
     'name' => 'Hotel Belvedere',
     'description' => 'Hotel Belvedere Descrizione',
     'parking' => true,
     'vote' => 4,
     'distance_to_center' => 10.4
    ],
    [
     'name' => 'Hotel Futuro',
     'description' => 'Hotel Futuro Descrizione',
     'parking' => true,
     'vote' => 2,
     'distance_to_center' => 2
    ],
    [
     'name' => 'Hotel Rivamare',
     'description' => 'Hotel Rivamare Descrizione',
     'parking' => false,
     'vote' => 1,
     'distance_to_center' => 1
    ],
    [
     'name' => 'Hotel Bellavista',
     'description' => 'Hotel Bellavista Descrizione',
     'parking' => false,
     'vote' => 5,
     'distance_to_center' => 5.5
    ],
    [
     'name' => 'Hotel Milano',
     'description' => 'Hotel Milano Descrizione',
     'parking' => true,
     'vote' => 2,
     'distance_to_center' => 50
    ],
  ];

  
?>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Stelle</th>
        <th>Distanza dal centro</th>
      </tr>
    </thead>
    <?php foreach($hotels as $hotel): ?>
    <tbody>
      <tr>
        <td><strong><?php echo $hotel['name']?></strong></td>
        <td><?php echo $hotel['description']?></td>
        <td><?php echo $hotel['parking']?></td>
        <td><?php echo $hotel['vote']?></td>
        <td><?php echo $hotel['distance_to_center']?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>

<?php ?>
  
</body>
</html>