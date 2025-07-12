<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GlamourTech</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'components/header.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/secador/secador-preto/1.jpg" class="d-block w-25 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/secador/secador-preto/2.jpg" class="d-block w-25 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/secador/secador-preto/3.jpg" class="d-block w-25 mx-auto" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $cards = [
                [
                    'title' => 'secador 1',
                    'text' => 'Descrição do card 1.',
                    'image' => 'imagens/produtos/chapinhas/1.1.jpg'
                ],
                [
                    'title' => 'Card 2',
                    'text' => 'Descrição do card 2.',
                    'image' => 'imagens/produtos/chapinhas/2.1.jpg'
                ],
                [
                    'title' => 'Card 3',
                    'text' => 'Descrição do card 3.',
                    'image' => 'imagens/produtos/chapinhas/3.1.jpg'
                ],
                [
                    'title' => 'Card 4',
                    'text' => 'Descrição do card 4.',
                    'image' => 'imagens/produtos/shampoos/3.1.jpg'
                ],
                [
                    'title' => 'Card 5',
                    'text' => 'Descrição do card 5.',
                    'image' => 'imagens/produtos/shampoos/2.1.jpg'
                ],
                [
                    'title' => 'Card 6',
                    'text' => 'Descrição do card 6.',
                    'image' => 'imagens/produtos/shampoos/1.1.jpg'
                ],
            ];

            foreach ($cards as $card) {
                echo '
          <div class="col">
            <div class="card h-100">
              <img src="' . $card['image'] . '" class="card-img-top" alt="' . $card['title'] . '">
              <div class="card-body">
                <h5 class="card-title">' . $card['title'] . '</h5>
                <p class="card-text">' . $card['text'] . '</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
              </div>
            </div>
          </div>';
            }
            ?>

        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

</body>

</html>