<?php 
  $title = 'Home';
  include 'template/header.php';
  include 'template/navigation.php';
?>
    

    <section class="carrosel mt-4">
      <div class="container">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slider-to="0" class="active"></li>
            <li data-target="#main-slider" data-slider-to="1"></li>
            <li data-target="#main-slider" data-slider-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slide_01.jpg" alt="our facilities" class="d-block img-fluid">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Brand new facilities</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide_02.jpg" alt="our facilities" class="d-block img-fluid">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Learn about our services</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide_03.jpg" alt="our facilities" class="d-block img-fluid">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">New webside 2 for 1 in all services</h3>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section class="new-webside py-5">
      <h2 class="text-center text-uppercase"> <span class="text-lowercase">Welcome to our new</span> webside</h2>
      <p class="text-center pt-4">Feel like new with our messages and professinal therapists</p>
    </section>

    <section class="therapis pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
              <img src="img/service_01.jpg" class="img-fluid" alt="">
            </div>
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">learn more</span> about us</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block py-2">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
              <img src="img/service_02.jpg" class="img-fluid" alt="">
            </div>
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span> services</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block py-2">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
              <img src="img/service_03.jpg" class="img-fluid" alt="">
            </div>
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span> store</h3>
                <a href="#" class="btn btn-success text-uppercase btn-block py-2">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    


    <section class="business-hours">
      <div class="container">
        <div class="row">
          <div class="col-md-6 py-5">
            <h2 class="text-center text-uppercase">Business Hours</h2>
            <p class="text-center mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis officiis ab repellat veritatis voluptas quidem neque officia perspiciatis dolorem.</p>
            <table class="table table-hover text-center mt-5">
              <thead class="table-danger">
                <tr>
                  <th class="text-center">Day</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Monday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Tuesday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Wednesday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Thursday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Friday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Saturnsday</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Sunday</td>
                  <td>Closed</td>
                  <td>Closed</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 bg-hours py-5">
            
          </div>
        </div>
      </div>
    </section>

    <section class="products py-5">
      <div class="container">
         <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span> products</h2>

         <div class="row py-4">
           <div class="col-6 col-md-3 mb-4 mb-md-0">
             <div class="card text-center">
               <a href="#">
                 <img src="img/product_large_01.jpg" alt="" class="card-img-top img-fluid">
                 <div class="card-block py-3">
                   <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
                   <p class="card-text text-uppercase mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius doloribus debitis ratione ab, est voluptates odio nostrum eligendi aut?</p>
                   <p class="price text-center mb-0">$ 25</p>
                 </div>
               </a>
             </div>
           </div>
           <div class="col-6 col-md-3">
             <div class="card text-center">
               <a href="#">
                 <img src="img/product_large_02.jpg" alt="" class="card-img-top img-fluid">
                 <div class="card-block py-3">
                   <h3 class="card-title text-center text-uppercase mb-0">Product 2</h3>
                   <p class="card-text text-uppercase mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius doloribus debitis ratione ab, est voluptates odio nostrum eligendi aut?</p>
                   <p class="price text-center mb-0">$ 25</p>
                 </div>
               </a>
             </div>
           </div>
           <div class="col-6 col-md-3">
             <div class="card text-center">
               <a href="#">
                 <img src="img/product_large_03.jpg" alt="" class="card-img-top img-fluid">
                 <div class="card-block py-3">
                   <h3 class="card-title text-center text-uppercase mb-0">Product 3</h3>
                   <p class="card-text text-uppercase mx-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius doloribus debitis ratione ab, est voluptates odio nostrum eligendi aut?</p>
                   <p class="price text-center mb-0">$ 25</p>
                 </div>
               </a>
             </div>
           </div>
           <div class="col-6 col-md-3">
             <div class="card text-center">
               <a href="#">
                 <img src="img/product_large_04.jpg" alt="" class="card-img-top img-fluid">
                 <div class="card-block py-3">
                   <h3 class="card-title text-center text-uppercase mb-0">Product 4</h3>
                   <p class="card-text text-uppercase px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius doloribus debitis ratione ab, est voluptates odio nostrum eligendi aut?</p>
                   <p class="price text-center mb-0">$ 25</p>
                 </div>
               </a>
             </div>
           </div>
         </div>
      </div>
    </section>

    <section class="appointment">
      <div class="container-fluid py-5">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-3 text-center">
          <h3 class="text-uppercase">make an appointment</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo deserunt asperiores rerum a facere, enim, quam qui voluptatibus minima eos non, iusto commodi blanditiis dicta.</p>
          <a href="#" class="btn btn-primary btn-lg mt-3 text-uppercase">read more</a>
        </div>
      </div>
    </section>

  <?php
    // include 'template/footer.php';
  ?>