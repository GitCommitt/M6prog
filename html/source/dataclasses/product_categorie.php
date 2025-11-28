<?php

class product_categorie
{
    public int $idproduct_categorie;
    public string $category_name;

    public function __construct(
        int $idproduct_categorie,
        string $category_name
    ) {
        $this->idproduct_categorie = $idproduct_categorie;
        $this->category_name = $category_name;
    }

    public static function FromResultRow($row)
    {
        return new product_categorie(
            $row['idproduct_categorie'],
            $row['category_name']
        );
    }
}
