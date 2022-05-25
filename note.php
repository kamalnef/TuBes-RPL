<?php
$query = "SELECT * FROM produk INNER JOIN kategori_barang ON produk.id_kategori = kategori_barang.id_kategori";

$result = mysqli_query($koneksi, $query);
if(!$result){
  die ("Query Error: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
}
while($row = mysqli_fetch_assoc($result))
{
?>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.png"
            alt="Colorlib Template">
        <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3">
        <div class="d-flex">
            <div class="cat">
                <span>Lifestyle</span>
            </div>
            <div class="rating">
                <p class="text-right mb-0">
                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                </p>
            </div>
        </div>
        <h3><a href="#"><?=$row['nama_produk']?></a></h3>
        <div class="pricing">
            <p class="price"><span>$120.00</span></p>
        </div>
        <p class="bottom-area d-flex px-3">
            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                        class="ion-ios-add ml-1"></i></span></a>
            <a href="#" class="buy-now text-center py-2">Buy now<span><i
                        class="ion-ios-cart ml-1"></i></span></a>
        </p>
    </div>
</div>
</div>
<?php
}
?>


