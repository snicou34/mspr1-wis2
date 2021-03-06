<?php
include_once'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$posts=getPosts();

?>


    <section class="col-8 mx-auto" style="margin-top: 130px">
        <div class="container col-6 mt-4" >
            <form action="store_post.php" method="POST">
                <div class="form-group mb-3">
                    <label for="title">Ajouter un titre à votre publication :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="body">Ajouter une description à votre publication :</label>
                    <textarea type="text" id="body" name="body" class="form-control" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="thumbnail">Ajouter une image à votre publication :</label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" >
                    <small id="emailHelp" class="form-text text-muted">Insérer le lien de l'image</small>
                </div>

                <button class="btn custom-main mb-3" type="submit"><i class="fas fa-paper-plane" style="margin-right: 5px"></i>
                    Publier votre publication
                </button>
            </form>

        </div>
    </section>

<?php include_once 'includes/footer1.php'; ?>