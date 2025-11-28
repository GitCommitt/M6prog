<?php
class product 
{   
        public int $idproduct;
        public string $name;
        public string $description;
        public float $price;
        public bool $stock;
        public int $product_img_idproduct_img;
        public int $product_img_idproduct_categorie;
    public function __construct(
        int $idproduct,
        string $name,
        string $description,
        float $price,
        bool $stock,
        int $product_img_idproduct_img,
        int $product_img_idproduct_categorie
    ) 
    {
        $this->idproduct = $idproduct;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->price = $price;
        $this->product_img_idproduct_img = $product_img_idproduct_img;
        $this->product_img_idproduct_categorie = $product_img_idproduct_categorie;
    }

    public static function GetProductsByCategory($connection, string $category){
    $query = "SELECT p.*
              FROM product p
              JOIN product_categorie c
              ON p.product_categorie_idproduct_categorie = c.idproduct_categorie
              WHERE c.category_name = ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    $products = [];
    while ($row = $result->fetch_assoc()){
        $products[] = product::FromResultRow($row);
    }
    return $products;
}
    public static function GetAllProducts($connection,$categorie){
          $query = 'SELECT p.* 
              FROM product p 
              JOIN product_categorie c 
              ON p.product_categorie_idproduct_categorie = c.idproduct_categorie
              WHERE ... = ?
              ';

        $stmt = $connection->prepare($query);

        $stmt->execute();
            
        $result = $stmt->get_result();

        $products = [];
        while ($row = mysqli_fetch_assoc($result)){

        $products[] = product::FromResultRow($row);
        }
        return $products;
    }

    public static function FromResultRow($row){
      $product = new Product(
        $row['idproduct'],
        $row['name'],
        $row['description'],
        $row['price'],
        $row['stock'],
        $row['product_img_idproduct_img'],
        $row['product_categorie_idproduct_categorie']);
        return $product;
    }
}