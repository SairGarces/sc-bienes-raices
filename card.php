<!DOCTYPE html>
<html>

<head>
    <title>My Cards</title>
    <style>
        body {
            text-align: center;
        }

        .card {
            /* border: 1px solid black; */
            padding: 10px;
            margin: 10px;
            width: 200px;
            height: 300px;
            display: inline-block;
            vertical-align: top;
            box-shadow: 2px 2px 5px #888888;
            border-radius: 10px;
        }

        body {
            text-align: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card-section {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .card {
            /* border: 1px solid black; */
            padding: 10px;
            margin: 10px;
            width: 200px;
            height: 300px;
            display: inline-block;
            vertical-align: top;
            box-shadow: 2px 2px 5px #888888;
            border-radius: 10px;
        }

        .card img {
            max-width: 100%;
            max-height: 200px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    $images = array(
        "assets/img/1.jpg",
        "assets/img/2.jpg",
        "assets/img/3.jpg",
        "assets/img/4.jpg",
        "assets/img/5.jpg",
        "assets/img/6.jpg"
    );
    ?>
    <div class="card-container">
        <div class="card-section">
            <?php
            for ($i = 0; $i < 3; $i++) {
                echo '<div class="card">';
                echo '<img src="' . $images[$i] . '">';
                echo '<h2>Card ' . ($i + 1) . '</h2>';
                echo '<p>This is the content of card ' . ($i + 1) . '</p>';
                echo '<div><img src="assets/img/bathroom.png" alt="Bathroom Icon">' . rand(1, 9) . '</div>';
                echo '<div><img src="assets/img/bedroom.png" alt="Bedroom Icon">' . rand(1, 9) . '</div>';
                echo '<div><img src="assets/img/parking.png" alt="Parking Icon">' . rand(1, 9) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="card-section">
            <?php
            for ($i = 3; $i < count($images); $i++) {
                echo '<div class="card">';
                echo '<img src="' . $images[$i] . '">';
                echo '<h2>Card ' . ($i + 1) . '</h2>';
                echo '<p>This is the content of card ' . ($i + 1) . '</p>';
                echo '<div><img src="assets/img/bathroom.png" alt="Bathroom Icon">' . rand(1, 9) . '</div>';
                echo '<div><img src="assets/img/bedroom.png" alt="Bedroom Icon">' . rand(1, 9) . '</div>';
                echo '<div><img src="assets/img/parking.png" alt="Parking Icon">' . rand(1, 9) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>