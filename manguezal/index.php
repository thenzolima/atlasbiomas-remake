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
            <br><h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Manguezal</h2><br>
            <!-- Portfolio Grid Items -->
            <div class="row justify-content-center">

                <?php
                $portfolioItems = [
                    ['image' => '../imagens/fauna.png', 'alt' => 'Fauna do Manguezal', 'link' => 'manguezal_fauna.php', 'title' => 'Fauna'],
                    ['image' => '../imagens/flora.png', 'alt' => 'Flora do Manguezal', 'link' => 'manguezal_flora.php', 'title' => 'Flora']
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
