<?php
$error_email=false;
$error_nombre=false;

if (($_POST["nombre"]==""||$_POST["nombre"]==null) {
  $error_nombre=true;
  echo "error en el nombre";

}
if (($_POST["email"]==""||$_POST["email"]==null||!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)))formular{
  $error_email=true;
  echo "error en el email";
}if (strlen($_POST["nombre"])==0) {

  echo "Hay un error en el nombre";
  // code...
}else {
  header("Location: 'index.html'");
}
$almacenar=$_POST["nombre"]


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <meta name="viewport" content="width=device-width, user-scalable=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./css/contacto.css">

     <title>Contacto</title>
   </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
         <a class="navbar-brand" href="#">Book&Music</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

               <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="book.html">Book</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link " href="music.html">Music</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link " href="contacto.html">Contacto</a>
                   </li>
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                     <div class="dropdown-menu" aria-labelledby="dropdown01">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                   </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                   <button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
               </div>
       </nav>

     </header>
     <!-- Section: Contact v.1 -->
     <section class="my-5">

       <!-- Section heading -->
       <h2 class="h1-responsive font-weight-bold text-center my-5">Contacto</h2>
       <!-- Section description -->
       <p class="text-center w-responsive mx-auto pb-5"><i>¿Tenes alguna consulta?..No dejes de escribirnos.. Deja tu comentario!</i></p>

       <!-- Grid row -->
       <div class="row">

         <!-- Grid column -->
         <div class="col-lg-5 mb-lg-0 mb-4">

           <!-- Form with header -->
           <div class="card">
             <div class="card-body">
               <!-- Header -->
               <div class="form-header blue accent-1">
                 <h3 class="mt-2"><i class="fas fa-envelope"></i> Contactanos:</h3>
               </div>
               <p class="dark-grey-text">Dejanos tu comentario.</p>
               <!-- Body -->
               <div class="md-form">
                 <form class="contacto" action="index.html" method="post">

                 
                 <i class="fas fa-user prefix grey-text"></i>
                 <input type="text" id="form-name" class="form-control">
                 <label for="nombre">Nombre</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-envelope prefix grey-text"></i>
                 <input type="text" id="form-email" class="form-control">
                 <label for="email">Email</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-tag prefix grey-text"></i>
                 <input type="text" id="form-Subject" class="form-control">
                 <label for="form-Subject">Asunto</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-pencil-alt prefix grey-text"></i>
                 <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                 <label for="form-text">Send message</label>
               </div>
               <div class="text-center">
                 <button class="submit">Enviar</button>
               </div>
             </div>
           </div>
            </form>
           <!-- Form with header -->

         </div>
         <!-- Grid column -->

         <!-- Grid column -->
         <div class="col-lg-7">

           <!--Google map-->
           <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
             <iframe src="https://maps.google.com/maps?q=guaymallen%20mendoza&t=&z=13&ie=UTF8&iwloc=&output=embed"   frameborder="0"
               style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Buttons-->
           <div class="row text-center">
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-map-marker-alt"></i>
               </a>
               <p>Guaymallen</p>
               <p class="mb-md-0">Mendoza </p>
             </div>
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-phone"></i>
               </a>
               <p>261 4826395</p>
               <p class="mb-md-0">Mon - Fri, 8:00-20:00</p>
             </div>
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-envelope"></i>
               </a>
               <p>info@gmail.com</p>
               <p class="mb-0">ventas@gmail.com</p>
             </div>
           </div>

         </div>
         <!-- Grid column -->

       </div>
       <!-- Grid row -->

     </section>
     <!-- Section: Contact v.1 -->



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   </body>
 </html>
