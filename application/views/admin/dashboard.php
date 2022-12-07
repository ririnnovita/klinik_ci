<!-- <div class="container-fluid mt-4 ">
    <div class="jumbotron bg-warning text-white">
        <div class="row">
            <img src="<?= base_url("assets/img/logo1.png") ?>" width="200" alt="logo">
            <h1 class="display-4"> KLINIK QIU

            </h1>
        </div>
    </div>
</div>
</div> -->

<div class="container-fluid">

    <!-- kasih w-75 supaya lebarnya 75%, m-auto untuk nengahin -->
    <div id="carouselExampleIndicators" class="carousel slide w-75 m-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/img/j.jpg'); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/i.jpg'); ?>" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>