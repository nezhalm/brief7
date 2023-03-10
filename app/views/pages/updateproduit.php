<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    .error {
        border: 1.4px solid red;
        padding: 6px;
    }

    .success {
        border: 1.4px solid green;
        padding: 6px;
    }

    span {
        color: red;
        font-size: 13px;
    }
</style>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body bg-light">

                        <div class="form">
                            <h2>modifier un produit</h2>

                            <form enctype="multipart/form-data" action="<?php echo URLROOT; ?>/produits/edit" method="post" id="form">
                                <div>
                                    <label class="form-text">nom du produit</label>
                                    <input class="form-control" type="text" name="libelle_produit" id="libelle_produit" value="<?php echo $data['libelle_produit'];  ?>">
                                    <span id="libelle_error"></span>
                                </div>
                                <label class="form-text">prix</label>
                                <input class="form-control"  type="number" name="price_produit" id="price_produit" value="<?php echo $data['price_produit']; ?>">
                                <span id="price_error"></span>
                                <label class="form-text">quantité</label>
                                <input class="form-control"  type="number" name="quantite_produit" id="quantite_produit" value="<?php echo $data['quantite_produit'];  ?>">
                                <span id="quantite_error"></span>
                                <label class="form-text">image </label>
                                <div>

                                    <img style="width: 60px;" id="img_produit" src="<?php echo URLROOT . '/img/' . $data['img_produit']; ?>">
                                </div>
                                <input style="width: 400px;" class="form-control" id="img_prpduit" name='img_produit' type="file" accept="image/png, image/jpg, image/gif, image/jpeg" value=<img style="width: 60px;" src="<?php echo URLROOT . '/img/' . $data['img_produit']; ?>"  alt="img">
                                <span id="image_error"></span>



                                <button  type="submit" name="submit" class="btn btn-primary mt-3 ">modifier</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="<?php echo URLROOT; ?>../js/updateproduit.js"></script>

</body>