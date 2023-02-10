<?php
require_once("includes/header.php");
// $preview = new PreviewProvider($con, $userLoggedIn);
// echo $preview->createPreviewVideo(null);
// $containers = new CategoryContainers($con, $userLoggedIn);
// echo $containers->showAllCategories();


/* LOADER ------------------------------------------------*/
// <div class="centrado" id="onload">
//         <div class="loader"></div>
//     </div>
//  <header id="header">
//         <div class="textos">
//             <h1>Las compras online nunca habian sido tan fáciles</h1>
//             <h2>florida personal shopper</h2>
//             <a href="" class="btn">Start shopping</a>
//         </div>
//     </header> 
 echo '<div class="previewContainer">
                    <img src="./assets/img/pexels-photo-6169668.jpeg" class="previewImage" hidden style="display: inline">
                    <div class="previewOverlay">
                        <div class="mainDetails">
                            <h1>Por Tu Compra USA</h1>
                            <h2>Comprar nunca ha sido tan Fácil</h2>
                            <div class="buttons">
                                <button onclick="watchVideo($videoId)"><i class="fa-solid fa-boxes-packing"></i> Ver Pedido</button>
                                <button onclick="volumeToggle(this)"><i class="fa-solid fa-cart-shopping"></i> Hacer Compra</button>
                            </div>
                        </div>
                    </div>
                </div>"

 <section class="team contenedor" id="equipo">
             <div class="reveal">
                 <h3>nuestro equipo</h3>
                 <p class="after">conoce a la gente asombrosa y creativa</p>
                 <div class="card">
                     <div class="content-card">
                         <div class="people"><img src="./assets/img/pic-1.png" alt="personauno"></div>
                         <div class="texto-team">
                             <h4>m</h4>
                             <p>Lorem ipsum dolor sit</p>
                         </div>
                     </div>
                     <div class="content-card">
                         <div class="people"><img src="./assets/img/pic-2.png" alt="personauno"></div>
                         <div class="texto-team">
                             <h4>k</h4>
                             <p>Lorem ipsum dolor sit</p>
                         </div>
                     </div>
                     <div class="content-card">
                         <div class="people"><img src="./assets/img/pic-3.png" alt="personauno"></div>
                         <div class="texto-team">
                             <h4>j</h4>
                             <p>Lorem ipsum dolor sit</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>';

?>