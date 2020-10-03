<?php

/** 
 *  Poin 3
 * 
 *  - 1 || Membuat user interface laporan dengan bootstrap
 *  - 2 || Laporan selesai
 */

$data_penjualan = [
    "Minuman Kemasan" => ["Aqua" => 20, "Mizone" => 10, "javana" => 70],
    "Makanan Ringan" => ['Pilus' => 230, "Oreo" => 12],
    "Roti" => ["Sari" => 5, "Swanish" => 10, "Garmelia" => 20],
    "Minyak Goreng" => ["Filma" => 30, "Bimoli" => 2, "Sunco" => 9, "Sania" => 11, "Fortune" => 10]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Last</title>
</head>
<body>
    <h1 style="text-align:center;" class="m-3">membuat laporan user interface</h1>
    <div class="container">

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Minuman Kemasan</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Aqua</th>
              <td>20</td>
            </tr>
            <tr>
              <th scope="row">Mizone</th>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">Javana</th>
              <td>70</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td>Total</td>
                  <td>100</td>
              </tr>
          </tfoot>
        </table>
        <br>
        <!--  -->
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Makanan Ringan</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Pilus</th>
              <td>230</td>
            </tr>
            <tr>
              <th scope="row">Oreo</th>
              <td>12</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td>Total</td>
                  <td>242</td>
              </tr>
          </tfoot>
        </table>
        <br>
        <!--  -->
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Roti</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Sari</th>
              <td>5</td>
            </tr>
            <tr>
              <th scope="row">Swanish</th>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">Garmelia</th>
              <td>20</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td>Total</td>
                  <td>35</td>
              </tr>
          </tfoot>
        </table>
        <br>
        <!--  -->
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">minyak</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">filma</th>
              <td>30</td>
            </tr>
            <tr>
              <th scope="row">bimoli</th>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">sunco</th>
              <td>9</td>
            </tr>
            <tr>
              <th scope="row">sania</th>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">fortune</th>
              <td>11</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td>Total</td>
                  <td>52</td>
              </tr>
          </tfoot>
        </table>
        <br>
        <!-- -->

    </div>
</body>
</html>