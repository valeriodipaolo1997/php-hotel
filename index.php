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

/*
foreach ($hotels as $hotel) {
    var_dump($hotel);
}
*/

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container pt-5">
        <div class="row">
            <h1 class="pb-4">Hotels</h1>
            <table class="table border border-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-uppercase">Nome</th>
                        <th scope="col" class="text-uppercase">Descrizione</th>
                        <th scope="col" class="text-uppercase">Parcheggio</th>
                        <th scope="col" class="text-uppercase">Voto</th>
                        <th scope="col" class="text-uppercase">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) : ?>
                        <?php $have_parking = $_GET['parking'] ?>
                        <tr>

                        <?php if ($have_parking == 'all') : ?>
                            <th scope="row"><?= $hotel["name"] ?></th>
                            <td><?= $hotel["description"] ?></td>
                            <td><?= $hotel["parking"] ? "Si" : "No" ?></td>
                            <td><?= $hotel["vote"] ?></td>
                            <td><?= $hotel["distance_to_center"] ?></td>

                        <?php elseif ($have_parking == 'yes' && $hotel['parking']) : ?>
                            <th scope="row"><?= $hotel["name"] ?></th>
                            <td><?= $hotel["description"] ?></td>
                            <td><?= $hotel["parking"] ? "Si" : "No" ?></td>
                            <td><?= $hotel["vote"] ?></td>
                            <td><?= $hotel["distance_to_center"] ?></td>

                        <?php elseif ($have_parking == 'no' && !$hotel['parking']) : ?>
                            <th scope="row"><?= $hotel["name"] ?></th>
                            <td><?= $hotel["description"] ?></td>
                            <td><?= $hotel["parking"] ? "Si" : "No" ?></td>
                            <td><?= $hotel["vote"] ?></td>
                            <td><?= $hotel["distance_to_center"] ?></td>

                            <?php endif; ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>


        <form method="GET" class="mt-5">

            <div class="d-flex fs-4 gap-4 justify-content-center">
                <div>
                    Parking:
                </div>

                <select name="parking" id="parking" class="form-select">
                    <option value="all" selected>All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>


        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>