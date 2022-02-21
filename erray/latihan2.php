<?php
// array multidimensi
$mahasiswa = [
    ["abdul rahman", 012345, "informatika", "abdulrahman@ft.unbara.ac.id"],
    ["putu agus", 123456, "informatika", "putuagus23@ft.unbara.ac.id"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>data mahasiswa</h1>
    <ul>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>

</body>
</html>
    