<?php
require_once('Product.php');
$data = new Product();

$produk = $data->tampil("products");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font: normal medium/1.4 sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 0.25rem;
            text-align: left;
            border: 1px solid #ccc;
        }

        tbody tr:nth-child(odd) {
            background: #eee;
        }
    </style>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($produk as $i => $p) : ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p['nama']; ?></td>
                <td>Rp.<?= number_format($p['harga']); ?></td>
                <td><?= $p['deskripsi']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>