<DOCTYPE! html>
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
 <style>
     body {
  background-image: url('assets/img/web-background4.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  width: auto;
  height: auto;
  overflow: hidden;
}
 </style>
    <body>
        <div class="header col-md-12">
            <img src="assets/img/beyaz_logo.png">
           <a class="active col-md-3" target="_blank" href="https://www.paluci.com.tr/index.php?route=common/home">Paluci Ana Sayfa</a>
          </div>
          <div class="container justify-content-center">
            <div class="product-box mx-auto justify-content-center">
                <div class="product-box-header text-center">
                  <?php
                  include("connection.php");
                  $id = $_GET['id'];

                  $select= "SELECT `oc_product`.`model`,`oc_product`.`price`, `oc_product_description`.`name`,`oc_product`.`image` \n"

                  . "FROM `oc_product`\n"  
              
                  . "INNER JOIN `oc_product_description` ON `oc_product_description`.`product_id` = `oc_product`.`product_id`\n"
                  
                  . "WHERE `oc_product_description`.`language_id` = '1' AND `oc_product`.`product_id` = '$id'";

                  $result = $connect -> query($select);
                  $result = $connect -> query($select);
                  if($result -> num_rows > 0){
                    $row = $result -> fetch_assoc();
                    $price = strstr($row['price'], '.', true);

                    echo "
                    <table class='product-box-table'>
                    <tr>
                        <td>* Ürün Kodu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   </td>
                        <td class='product-code-number'>".$row['model']."</td>
                    </tr>
                    <tr>
                        <td>* Ürün Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   </td>
                        <td class='product-code-number'>".$row['name']."</td>
                    </tr>
                    <tr>
                        <td>* Ürün Fiyatı &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   </td>
                        <td class='product-code-number'>".$price." ₺</td>
                    </tr>
                    <tr>
                        <td>* Stok Durumu&nbsp;&nbsp;:</td>
                        <td class='product-code-number'>Stok durumu için bizimle <br> iletişime geçin.</td>
                    </tr>
                  
                    <div class='product-image mx-auto'>
                        <div class='image-container' style='background-image:url(https://paluci.com.tr/image/".$row['image']."); background-size:contain; background-repeat:no-repeat;'>
                        
                        </div>
                </div>
                        </table>

                    ";
                  }
                //   
                  ?>
                   
                    <p class="kdv"> Fiyatlarımıza K.D.V. Dahil Değildir.</p>
                </div>
            </div>
            <div class="footer-paluci">
            <div class="paluci-footer">
            <p class="footer-paluci justify-content-center">PALUCİ YAPI<br>San. Tic. Ltd. Şti. <br><br>
            </div>
            <div class="number-footer">
            <img src="assets/img/favicon/geo-alt.svg" alt="number">  +90 (532) 390 2520<br><br>
            <img src="assets/img/favicon/envelope.svg" alt="mail"> satis@paluci.com.tr
          </div>
          <div class="mail-footer">
            
          </div>
        </div>
        </div>
    </footer>
    </body>
</html>

