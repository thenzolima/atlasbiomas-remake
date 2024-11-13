<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <style>
        .titulo {
            text-align: center;
            margin-top: 8px;
        }
    </style>
    <?php include '../cabecalho.php'; ?>
    <script>
        function alterarTitulo(novoTitulo) {
            document.getElementById('galeria-title').textContent = novoTitulo;
        }
    </script>
</head>

<body>
    <?php include '../topo.php'; ?>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
             <div id="teste" class="d-flex flex-column justify-content-center">
             <br><h2 class="page-section-heading text-center text-uppercase" id="galeria-title"></h2>
             <button class="btn-contrast" onclick="toggleContrast()">Ativar/Desativar Alto Contraste</button><br><br>
             </div>
            <!-- Icon Divider-->
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <?php foreach ($conteudo as $item): ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#<?= $item['id'] ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?= $item['imagem'] ?>" alt="<?= $item['titulo'] ?>" />
                            <h5 class="titulo"><?= $item['titulo'] ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include '../rodape.php'; ?>
</body>

</html>
