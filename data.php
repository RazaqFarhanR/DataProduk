<?php
    $dataProduk = array(
        //nama produk, merk, harga, status stok
        array("tipe" =>"Galaxy s21", "merk" => "Samsung", "harga" => 19000000, "status" => true),
        array("tipe" =>"Galaxy A71", "merk" => "Samsung", "harga" => 6999000, "status" => false),
        array("tipe" =>"iPhone 12 Pro Max", "merk" => "Apple", "harga" => 20999000, "status" => true),
        array("tipe" =>"iPhone 12 Mini", "merk" => "Apple", "harga" => 10999000, "status" => false),
    );

    if($dataProduk = array("status") == true){
        foreach ($dataProduk as $array) {
            echo "<table border='1' style='border-collapse;width:200'>";
            echo "<tr>";
            echo "<td>".
                 "<p>".$array["merk"]."</p>"."<br>".
                 "<h1>".$array["tipe"]."</h1>"."<br>".
                 "Rp.".$array["harga"]."<br>".
                 "stok tersedia"."<br>".
                 "<button type='submit' class='btn btn-primary'>".'Order'."</button>";
                 "</td>";
            echo "</table>";
        }
    }
    else{
        foreach ($dataProduk as $array) {
            echo "<table border='1' style='border-collapse;width:200'>";
            echo "<tr>";
            echo "<td>".
                 "<p>".$array["merk"]."</p>"."<br>".
                 "<h1>".$array["tipe"]."</h1>"."<br>".
                 "Rp.".$array["harga"]."<br>".
                 "stok kosong"."<br>".
                 "</td>";
            echo "</table>";
        }
    }
        

    // foreach ($dataProduk as $array) {
    //     echo "<table border='1' style='border-collapse;width:200'>";
    //     echo "<tr>";
    //     echo "<td>".
    //          "<p>".$array["merk"]."</p>"."<br>".
    //          "<h1>".$array["tipe"]."</h1>"."<br>".
    //          $array["harga"]."</td>";
    //     echo "</table>";
    // }
?>