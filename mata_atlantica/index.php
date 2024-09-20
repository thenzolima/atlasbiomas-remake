<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include '../cabecalho.php'; ?>
</head>

<body>

    <?php include '../topo.php'; ?>

    <!-- Portfolio Section -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mata Atlântica</h2>
            <!-- Icon Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items -->
            <div class="row justify-content-center">

                <?php
                $portfolioItems = [
                    ['image' => '../imagens/fauna.png', 'alt' => 'Fauna', 'link' => 'mata_atlantica_fauna.php', 'title' => 'Fauna'],
                    ['image' => '../imagens/flora.png', 'alt' => 'Flora', 'link' => 'mata_atlantica_flora.php', 'title' => 'Flora'],
                    ['image' => '../imagens/fungos.png', 'alt' => 'Fungos', 'link' => 'mata_atlantica_fungos.php', 'title' => 'Fungos'],
                ];

                foreach ($portfolioItems as $item) {
                    echo "
                    <div class='col-md-6 col-lg-4 mb-5'>
                        <img class='img-fluid' src='{$item['image']}' alt='{$item['alt']}'>
                        <div class='text-center mt-4'>
                            <a class='btn btn-xl btn-outline-success' href='{$item['link']}'>{$item['title']}</a>
                        </div>
                    </div>";
                }
                ?>

            </div>
        </div>
    </section>


    <?php include '../rodape.php'; ?>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
