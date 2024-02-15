<?php

$produk = [
    [
        "namaproduk" => "Musang Nopal",
        "harga" => 150000,
        "fotoproduk" => "musang.jpg",
        "stok" => 13,
        "status" => "Tersedia" 
    ],
    [
        "namaproduk" => "Landak Nopal",
        "harga" => 75000,
        "fotoproduk" => "landak.jpg",
        "stok" => 0,
        "status" => "Tidak Tersedia" 
    ]
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apit Store | Toko Hewan Murah</h1>
    <h3>Data Produk</h3>
<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Foto</th>
        <th>Stok</th>
        <th>Status</th>
        </tr>
        <?php foreach ($produk as $data) : ?>
            <tr>
                <td><?php echo $data['namaproduk']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><img src="<?php echo $data['fotoproduk']; ?>" width="100px" alt=""></td>
                <td><?php echo $data['stok']; ?></td>
                <?php
            if($data["status"] == "Tersedia"){?>
            <td style='color: green;'><?= $data["status"]; ?></td>
            <?php } else{ ?>
                <td style='color: red;'><?= $data["status"]; ?></td>
            <?php } ?>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>