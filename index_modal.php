<style>
    p {
        text-align: left;
        text-align: justify;
    }
</style>

<!-- Portfolio Modals -->
<?php
$modals = [
    [
        'id' => 'portfolioModal1',
        'title' => 'Mata Atlântica',
        'image' => 'imagens/mata.png',
        'description' => 'É um bioma composto por um conjunto de florestas e ecossistemas que corresponde a 15% do território brasileiro. Considerado um dos mais ricos biomas do planeta, a Mata Atlântica é a segunda maior floresta em extensão do Brasil, constituída de planaltos e serras.',
        'link' => './mata_atlantica/'
    ],
    [
        'id' => 'portfolioModal2',
        'title' => 'Manguezal',
        'image' => 'imagens/manguezal.png',
        'description' => 'É considerado um ecossistema costeiro de transição entre os ambientes terrestre e marinho. Característico de regiões tropicais e subtropicais, está sujeito ao regime das marés, dominado por espécies vegetais típicas.',
        'link' => 'manguezal.php'
    ],
    [
        'id' => 'portfolioModal3',
        'title' => 'Restinga',
        'image' => 'imagens/restinga.png',
        'description' => 'É um termo utilizado para definir as formações vegetais estabelecidas sobre solos arenosos que ocorrem na região da planície costeira. A restinga é constantemente afetada por processos naturais de deposição e erosão.',
        'link' => 'restinga.php'
    ],
    [
        'id' => 'portfolioModal4',
        'title' => 'Talassociclo',
        'image' => 'imagens/talassociclo.png',
        'description' => 'É um biociclo que ocupa cerca de 70% de toda a superfície do planeta Terra. Se caracteriza por ambientes de água salgada, como mares e oceanos, onde organismos são denominados plâncton, nécton e bencton.',
        'link' => 'talassociclo.php'
    ]
];

foreach ($modals as $modal) {
    ?>
    <div class="portfolio-modal modal fade" id="<?= $modal['id'] ?>" tabindex="-1" aria-labelledby="<?= $modal['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title -->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?= $modal['title'] ?></h2>
                                <!-- Icon Divider -->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image -->
                                <img class="img-fluid rounded mb-5" src="<?= $modal['image'] ?>" alt="<?= $modal['title'] ?>" />
                                <!-- Portfolio Modal - Text -->
                                <p class="mb-4"><?= $modal['description'] ?></p>
                                <!-- BOTÃO PARA IR PARA PÁGINA -->
                                <div class="text-center mt-4">
                                    <a class="btn btn-xl btn-outline-success" href="<?= $modal['link'] ?>">
                                        Conheça
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
