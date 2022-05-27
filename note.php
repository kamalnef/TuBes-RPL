<?php
session_start();
$cart = $_SESSION['cart'];
$query = "SELECT * from cart, produk where cart.id_cart = '$cart'  and cart.id_produk = produk.id_produk;";

$result = mysqli_query($conn, $query);
if(!$result){
  die ("Query Error: ".mysqli_errno($conn).
     " - ".mysqli_error($conn));
}
while($row = mysqli_fetch_assoc($result))
{
?>
    <tr class="text-center">
        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
        <td class="image-prod">
            <div class="img" style="background-image:url(images/produk/<?=$row['gambar_produk']?>);"></div>
        </td>
        <td class="product-name">
            <h3>Nike Free RN 2019 iD</h3>
            <p>Far far away, behind the word mountains, far from the countries</p>
        </td>
        <td class="price">$4.90</td>
        <td class="quantity">
            <div class="input-group mb-3">
                <input type="text" name="quantity"
                    class="quantity form-control input-number" value="1" min="1" max="100">
            </div>
        </td>
        <td class="total">$4.90</td>
    </tr>

<?php
}
?>




