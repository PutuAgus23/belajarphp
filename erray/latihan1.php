<?php

$mahasiswa = ["abdul rahman", 012345, "informatika", "abdulrahman@ft.unbara.ac.id"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>latihan1 php</title>
</head>
<body>
    <?php for ($i = 0; $i < 4; $i++) { ?>
        <li>
            <?php echo $mahasiswa[$i]; ?>
    </li>
<?php } ?>

<hr>
<h1>data mahasiswa</h1>
    <ul>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>

</body>
</html>