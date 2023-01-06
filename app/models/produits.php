<?php
class produits
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addProduct(){
        $this->db->query("INSERT INTO `produit` (`id_produit`, `nom_produit`, `prix_produit`, `img_produit`) VALUES (NULL, :nom_produi, :prix_produit, :img_produit) ");
    }
}