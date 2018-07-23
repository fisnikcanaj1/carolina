<?php 
    $title = 'About Us';
    include 'template/header.php';
    include 'template/navigation.php';
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/about_us.jpg" class="img-fluid" alt="Img about us">
            <h2 class="text-uppercase d-none d-md-block">About Us</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <main class="col-lg-8 main-content pt-4">
            <h2 class="d-block d-md-none text-center text-uppercase">About Us</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id eius quibusdam quia minus. Nobis ullam nam incidunt eum fuga soluta libero fugiat deserunt impedit corporis. Perspiciatis saepe ullam dignissimos nostrum obcaecati! Mollitia, modi non. Porro nobis, numquam quam reprehenderit a praesentium quibusdam doloremque provident, maxime beatae labore consequatur animi nihil? Nemo provident beatae ipsam sunt dolorum, commodi neque. Facere exercitationem excepturi beatae dignissimos ducimus, explicabo, odit
            </p>
            <p>
            voluptates nostrum possimus in cum. Porro quasi, fuga quibusdam blanditiis deserunt, reiciendis illum? Sed quam ipsa animi iure ab qui. Quam corporis blanditiis magni aliquam commodi, quasi temporibus nulla? Voluptatem sapiente expedita unde quia, illo libero? Beatae inventore impedit minima adipisci consectetur soluta explicabo tempore debitis dignissimos.
            </p>
            <div class="facilities-gallery">
                <a href="#" data-target="#image_1" data-toggle="modal">
                    <img src="img/gallery_thumb_01.jpg" class="rounded">
                </a>
                <a href="#" data-target="#image_2" data-toggle="modal">
                    <img src="img/gallery_thumb_02.jpg" class="rounded">
                </a>
                <a href="#" data-target="#image_3" data-toggle="modal">
                    <img src="img/gallery_thumb_03.jpg" class="rounded">
                </a>

                <div class="modal fade" id="image_1" tabindex="-1" role="dialog" area-labelleby="image_1" area-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_01.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="image_2" tabindex="-2" role="dialog" area-labelleby="image_2" area-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_02.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="image_3" tabindex="-3" role="dialog" area-labelleby="image_3" area-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_03.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <aside class="col-lg-4">
            <div class="sidebar p-4">
                <?php include 'template/business_hours.php' ?>
            </div>
        </aside>
    </div>
</div>

<?php 
    include 'template/footer.php';
?>