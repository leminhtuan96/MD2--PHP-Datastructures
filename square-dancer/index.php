<?php
include_once "GenderInterface.php";
include_once "dancer.php";
include_once "squaredance.php";





$squareDance = new SquareDance();

for ($i = 0; $i < 10; $i ++){
    $squareDance->addDance($squareDance->getRandomDancer());
}

echo $squareDance->pairDance();
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = $squareDance->getRandomName();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="name" value="<?php echo $name??""?>">
    <button type="submit">Generate Name</button>
</form>

</body>
</html>
