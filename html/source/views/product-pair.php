<?php
$row = mysqli_fetch_assoc($result);
$product = new Product(
    $row['idproduct'],
    $row['name'],
    $row['description'],
    $row['price'],
    $row['stock'],
    $row['product_img_idproduct_img'],
    $row['product_categorie_idproduct_categorie']
);
?>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<section class="product-section">
    <div class="product">
        <h2 class="product-titel"><?=$row["name"]?></h2>
        <p class="product-description"><?=$row["description"]?></p>
        <img class="product-img" src="./assets/img/appel.png" alt="">
        <p class="product-price">€<?=$row["price"]?></p>
    </div>
</section>
<?php
}
?>
