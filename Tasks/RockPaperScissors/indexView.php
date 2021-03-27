<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>RPS</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>
<script src=""></script>
<body>

<div class="">
    <h1>Choose your element</h1>
</div>
<form action="/" method="get" target="">
    <?PHP
    require_once 'vendor/autoload.php';

    use App\Game;
    use App\Elements\Element;
    use App\Elements\ElementsCollection;
    use App\Elements\Rock;
    use App\Elements\Paper;
    use App\Elements\Scissors;

    $elements = new ElementsCollection();
    $elements->addMultipleElements([
        $paper = new Paper(),
        $scissors = new Scissors(),
        $rock = new Rock()
    ]);


    foreach ($elements->getElements() as $item) {
        echo "
            <input type='radio' id='element' name='element' value='$item->symbol'>
    <label for='element'>$item->symbol</label><br>
        ";
    }
    ?>

    <br><br>
    <button type="submit" formmethod="post"> PLAY</button>
</form>
<br><br>
<?PHP

$game = new Game($_POST['element']);
echo 'You picked: ' . $_POST['element'] . '<br><br>';

echo 'Computer picked: ' . $game->getComputer()->getChoice()->getElement() . '<br><br>';
?>
<h2><?php echo $game->whoWins(); ?></h2>

</body>
</html>