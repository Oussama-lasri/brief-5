<?php

class Produit extends Controller
{
    private $userProduit;
    public function __construct()
    {
        $this->userProduit = $this->model('produits');
    }

    public function addProduit()
    {
        $data = [
            'title' => 'addProduit'
        ];

        $this->view('Produit/addProduit',$data);
    }
    public function deleteProduit()
    {
        $data = [
            'title' => 'deleteProduit'
        ];

        $this->view('Produit/deleteProduit',$data);
    }
    public function showProduits()
    {
        $data = [
            'title' => 'showProduit'
        ];

        $this->view('Produit/showProduits',$data);
    }
    public function updateProduit()
    {
        $data = [
            'title' => 'updateProduit'
        ];

        $this->view('Produit/updateProduit',$data);
    }
}
