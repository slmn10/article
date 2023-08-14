<?php 
   if ($_POST['sub']) {
      $titre = htmlspecialchars($_POST['titre']);
      $description = htmlspecialchars($_POST['description']);
      echo $titre . ' '. html_entity_decode($description);
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
   <!--Bootstrap css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <!--Font Awesome css-->
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <!--Flaticon css-->
   <link rel="stylesheet" href="assets/flaticon/flaticon.css">
   <!--Magnific css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Owl-Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <!--Slicknav css-->
   <link rel="stylesheet" href="assets/css/slicknav.min.css">
   <!--chosen css-->
   <link rel="stylesheet" href="assets/css/chosen.min.css">
   <!-- Summernote css -->
   <link rel="stylesheet" href="assets/css/summernote-bs4.css">
   <!-- Dropzone css -->
   <link rel="stylesheet" href="assets/css/dropzone.css">
   <!--Site Main Style css-->
   <link rel="stylesheet" href="assets/css/style.css">
   <!--Responsive css-->
   <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
   <form action="" method="post">
      <div class="col-lg-8 col-sm-12">
         <div class="profile-right">
            <div class="profile-form">
               <div class="add-property-box">
                  <h3>Information</h3>
                  <div class="row">
                     <div class="col-md-12">
                        <p>
                           <label>Titre</label>
                           <input type="text" name="titre" placeholder="Titre de l'article" />
                        </p>
                     </div>
                     <!-- <div class="col-md-12">
                        <p>
                           <label>Le prix</label>
                           <input type="file" name="image" placeholder="Sélectionné l'image" />
                        </p>
                     </div> -->
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p>
                           <label>Description</label>
                           <textarea name="description" id="summernote" ></textarea>
                        </p>
                     </div>
                  </div>
                  <div>
                     <input type="submit" name="sub" class="btn btn-primary mt-2" value="Soumettre">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
   <a href="Bien sûr.docx" class="btn btn-info">Afficher PDF</a>
   



   <!--Jquery js-->
   <script src="assets/js/jquery.min.js"></script>
   <!-- Popper JS -->
   <script src="assets/js/popper.min.js"></script>
   <!--Bootstrap js-->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- Summernote Js -->
   <script src="assets/js/summernote-bs4.min.js"></script>
   <script src="assets/js/custom-summernote.js"></script>
   <!--Chosen js-->
   <script src="assets/js/chosen.jquery.min.js"></script>
   <!--Owl-Carousel js-->
   <script src="assets/js/owl.carousel.min.js"></script>
   <!--Slicknav js-->
   <script src="assets/js/jquery.slicknav.min.js"></script>
   <!--Magnific js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Dropzone Js -->
   <script src="assets/js/dropzone.js"></script>
   <script src="assets/js/custom-dropzone.js"></script>
   <!--Main js-->
   <script src="assets/js/main.js"></script>
</body>

</html>