<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 PHP</title>
</head>
<body>
    <?php
echo "Bilangan genap dari 1 sampai 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<?php
echo "<table border='1' cellpadding='10' cellspacing='0'>";

// Header kolom (bilangan 1-10)
echo "<tr>";
echo "<th style='background-color:lime;'>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th style='background-color:yellow;'>$i</th>";
}
echo "</tr>";

// Baris-baris isi tabel
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    // Header baris (1-10)
    echo "<th style='background-color:lime;'>$i</th>";
    for ($j = 1; $j <= 10; $j++) {
        // Hasil perkalian
        $hasil = $i * $j;
        
        // Menentukan warna latar belakang berdasarkan apakah hasilnya genap atau ganjil
        if ($hasil % 2 == 0) {
            $warna = "aqua"; // Warna aqua untuk genap
        } else {
            $warna = "yellow"; // Warna kuning untuk ganjil
        }
        
        echo "<td style='background-color:$warna; text-align:center;'>" . $hasil . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>


</body>
</html>