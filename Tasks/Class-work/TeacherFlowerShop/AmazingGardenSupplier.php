<?php

class AmazingGardenSupplier implements Supplier
{
    public function products(): ProductCollection
    {
        return new ProductCollection();
    }
}