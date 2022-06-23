<html>  
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paluci Yapı</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="header">
            <img src="assets/img/Paluci-logo.png" alt="logo">
            <!-- <a href="https://www.paluci.com.tr/index.php?route=common/home" class="logo" target="_blank">PALUCI YAPI</a> -->
            <!-- <div class="header-right">
              <a class="active" href="#home">Home</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a>
            </div> -->
            <a class="active" href="https://www.paluci.com.tr/index.php?route=common/home">Paluci Ana Sayfa</a>
          </div>
        <!-- <div class="container">
           <h3>Ürün Detay </h3>
           <hr>
           <div class='urun-logo float-1'>
                        <img src="assets/img/Paluci-logo.png" alt='logo' width='95%' height='90%'>
                   </div>
                   <div class='table-product float-1' style='width: 40%;'>
                    <table> -->
                <?php
                include("connection.php");
                //include("products/1601B.php");
                $id = $_GET['id'];
                
                
                $select= "SELECT `oc_product`.`model`,`oc_product`.`price`, `oc_product_description`.`name`,`oc_product`.`image` \n"

                . "FROM `oc_product`\n"  
            
                . "INNER JOIN `oc_product_description` ON `oc_product_description`.`product_id` = `oc_product`.`product_id`\n"
                
                . "WHERE `oc_product_description`.`language_id` = '1' AND `oc_product`.`product_id` = '$id'";
                $result = $connect -> query($select);
                $result = $connect -> query($select);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $price= strstr($row['price'], '.', true);

                        echo "
                        <div class='container'>
                        <h3>Ürün Detay </h3>
                        <hr>
                        <div class='urun-logo float-1'>
                        <img src='https://paluci.com.tr/image/".$row['image']."' width='100' height='100'>
                                </div>
                                <div class='table-product float-1' style='width: 40%;'>
                                 <table>
                        <tr>
                    <td>
                        Ürün Kodu
                    </td>
                    <td>
                        ".$row['model']."
                    </td>
                </tr>
                <tr>
                    <td>
                        Ürün Adı
                    </td>
                    <td>
                    ".$row['name']."
                    </td>
                </tr>
                <tr>
                    <td>
                        Ürün Fiyatı
                    </td>
                    <td>
                    ".$price." TL
                    </td>
                </tr>
                <tr>
                    <td>
                        Stok Durumu
                    </td>
                    <td class='stok'>
                        Stok Bilgisi İçin Bizimle İletişime Geçin
                    </td>
                </tr>
                        ";
                    }
                }
                else{
                    echo "0 result";
                }
                ?>
                
            </table>
            Fiyatlarımıza K.D.V. Dahil Değildir.
        </div>
        </div>

       
</html>