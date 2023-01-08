<?php include APPROOT . '/views/inc/header.php'; ?>
<section id="addProduit" class="add-produit" style="padding: 80px;">
    <div class="">
        <div class="card card-body bg-light mt-5 m-5">
            <h2>add a product</h2>

            <form action="<?php echo URLROOT; ?>/Produit/addProduit" method="post">
                <div class="form-group">

                    <label for="nom_produit">product name : <sup>*</sup></label>
                    <input type="text" name="nom_produit" class="form-control form-control-lg <?php echo (!empty($data['nom_produit_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['nom_produit']; ?>">
                    <span class="invalid-feedback">errereree</span>

                    <label for="prix_produit">Price : <sup>*</sup></label>
                    <input type="text" name="prix_produit" class="form-control form-control-lg <?php echo (!empty($data['prix_produit_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['prix_produit']; ?>">
                    <span class="invalid-feedback"><?php echo $data['prix_produit_err']; ?></span>

                    <label for="img_produit">image : <sup>*</sup></label>
                    <input type="file" name="img_produit" class="form-control form-control-lg <?php echo (!empty($data['img_produit_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['img_produit']; ?>">
                    <span class="invalid-feedback"><?php echo $data['img_produit_err']; ?></span>

                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="submit" value="add" class="btn btn-success btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include APPROOT . '/views/inc/footer.php'; ?>