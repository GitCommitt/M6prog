<?php
class product_img 
{   
        public int $idproduct_img;
        public string $img;
    public function __construct(
        int $idproduct_img,
        string $img,
    ) 
    {
        $this->idproduct_img = $idproduct_img;
        $this->img = $img;
    }
}