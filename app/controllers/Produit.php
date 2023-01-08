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
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'nom_produit' => trim($_POST['nom_produit']),
                    'prix_produit' => trim($_POST['prix_produit']),
                    'img_produit' => trim($_POST['img_produit']),
                    'nom_produit_err' => '',
                    'prix_produit_err' => '',
                    'img_produit_err' => '',
                ];

                if(empty($data['nom_produit'])){
                    $data['nom_produit_err'] = 'please enter name product';
                }

                if(empty($data['prix_produit'])){
                    $data['prix_produit_err'] = 'please enter Price';
                }

                if(empty($data['img_produit'])){
                    $data['img_produit_err'] = 'please enter image';
                }

                if(empty($data['nom_produit_err']) && empty($data['prix_produit_err']) && empty($data['img_produit_err'])){

                }else{
                    $this->view('Produit/addProduit',$data);
                }
           }else{
            $data=[
                'nom_produit' => '',
                'prix_produit' =>'',
                'img_produit' => ''
                ];
            $this->view('Produit/addProduit',$data);
           }
        

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
