<?php
include_once("database.php");

$db = new Database();
$result = $db->get('bidoata');
?>
<html>
    <head></head>
    <body>
        <h1>Data Mobil</h1>
        <table>
            <tr>
                <th>Merk</th>
                <th>Warna</th>
                <th>Harga</th>
            </tr>
            <?php if ($result) : ?>
          <?php while ($row = mysqli_fetch_array($result)) : ?>
          <tr>
          <td><?= $row['nama']; ?></td>
            <td><?= $row['merk']; ?></td>
            <td><?= $row['warna']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><a href="form.php?id=</a>
          </tr>
          <?php endwhile; else : ?>
          <tr>
          <td colspan="7">Belum ada data</td>
          </tr>
          <?php endif; ?>
        </table>
    </body>
</html>
