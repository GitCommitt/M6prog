<?php
class user 
{   
        public int $idaanbiedingen;
        public string $name;
        public int $korting_value;
        public date $start_date;
        public date $end_date;
        public string $product_idproduct;
    public function __construct(
        int $idaanbiedingen,
        string $name,
        int $korting_value,
        date $start_date,
        date $end_date,
        string $product_idproduct
    ) 
    {
        $this->idaanbiedingen = $idaanbiedingen;
        $this->name = $name;
        $this->korting_value = $korting_value;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->product_idproduct = $product_idproduct;
    }
}