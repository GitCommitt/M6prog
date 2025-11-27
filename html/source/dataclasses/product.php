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
}