<?php

require_once 'vendor/autoload.php';

use App\CarCollection;

$json = file_get_contents("storage/Garage.json");
$data = json_decode($json, true);

$garage = new CarCollection();
$garage->addCars($data);

?>
<html lang="EN">
<body>
<?php
foreach ($garage->getCars() as $car) {

    echo '<p><img src="' . $car->getImage() . '" alt="Car" height="250" width="400" /></p><br>';
    echo $car->getName() . ': ' . $car->getModel() . '<br>';
    echo 'Liters per 100km: ' . $car->getLitersPer() . '<br>';
    echo 'Rent price for 24h: ' . $car->getPrice() . '€<br>';
    echo 'Availability: ' . $car->getStatus() . '<br>';

    if ($car->getStatus() == 'rented') {
        ?>
        <form method="post">
            <p><button type="submit" value="available" name="<?php echo htmlspecialchars($car->getName()); ?>">Return</button></p>
        </form>
        <?php

    } elseif($car->getStatus() == 'available') {
        ?>
        <form method="post">
            <p><button type="submit" value="rented" name="<?php echo htmlspecialchars($car->getName()); ?>">Rent</button></p>
        </form>
        <?php
    }

}

foreach ($data as $car => $info) {
    foreach ($_POST as $key => $value) {
        if ($data[$car]["name"] === $key) {
            $data[$car]["status"] = $value;
        }
    }
}
$newJson = json_encode($data);
file_put_contents("storage/Garage.json",$newJson);


if (count($_POST)) {
    header("Location: ".$_SERVER['PHP_SELF']);
    die;
}

?>
</body>
</html>




