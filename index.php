<!-- <?php
        // $data = simplexml_load_file("https://rss.tempo.co/nasional");
        // $data1 = simplexml_load_file("https://www.antaranews.com/rss/sepakbola-liga-indonesia.xml");
        ?> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Coba XML</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo.jfif" width="50px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Nasional</a>
                        <a class="nav-link" href="#">Otomotif</a>
                        <a class="nav-link" href="#">Keuangan</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <!-- <h2><?= $data->channel->title; ?></h2> -->
            </div>
        </div>

        <!-- <div class="row mt-3">
            <div class="col">
                <img src="" class="img-fluid">
            </div>
        </div> -->

        <!-- <div class="row mt-3">
            <?php

            // foreach ($data->channel->item as $item) {
            ?>
                <div class="col-md-4 mt-3">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <img src="<?= $item->img; ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?= $item->title; ?></h5>
                            <p class="card-text"><?= $item->description; ?></p>
                            <a href="<?= $item->link; ?>" target="_blank" class="btn btn-success">Baca sekarang</a>
                        </div>
                    </div>
                </div>
            <?php // } 
            ?>
        </div> -->

        <div class="row mt-3">
            <?php
            include 'koneksi.php';
            $id = 0;
            $sql = "select * from news order by id";
            $hasil = mysqli_query($conn, $sql);
            // $data = mysqli_query($conn, 'select * from news');
            while ($item = mysqli_fetch_array($hasil)) {
            ?>
                <div class="col-md-4 mt-3">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <img src="<?= $item['']; ?>" class="card-img-top" alt="..."> -->
                            <!-- <img src="<?= $item['images']; ?>" class="card-img-top" alt="..."> -->
                            <h5 class="card-title"><?= $item['title']; ?></h5>
                            <h6 class="card-title"><?= $item['date']; ?></h6>
                            <!-- <p class="card-text"><?= $item['description']; ?></p> -->
                            <a href="<?= $item['link']; ?>" target="_blank" class="btn btn-success">Baca sekarang</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>