<style>
    p {
        text-align: start;
        margin-top: 10px;
    }

    .btn-translate {
        margin-top: 10px;
        color: #fff;
        background-color: #2C3E50;
        border: none;
        width: 48%;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        display: inline-block;
    }

    .btn-contrast {
        color: #fff;
        background-color: #E74C3C;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
    }

    /* Estilo de alto contraste */
    .high-contrast {
        background-color: #000;
        color: #fff;
    }

    .high-contrast .btn-translate {
        background-color: #fff;
        color: #000;
    }

    .high-contrast .modal-content {
        background-color: #000;
        color: #fff;
    }

    .high-contrast img {
        border: 2px solid #fff;
    }

    .high-contrast h2 i {
        color: white;
    }

    .high-contrast .btn-close {
        filter: invert(1);
    }

    .high-contrast #galeria-title {
        color: white;
    }

    .high-contrast .curiosity.contrast {
        background-color: #000;
        color: #fff;
        border: 1px solid #fff;
    }
</style>

<?php
// Função genérica para carregar JSON e gerar modais
function gerarModais($arquivoJson)
{
    $jsonData = file_get_contents($arquivoJson);
    $dados = json_decode($jsonData, true);

    foreach ($dados as $item) {
        ?>
        <!-- Portfolio Modal <?php echo $item['id']; ?> -->
        <div class="portfolio-modal modal fade" id="<?php echo $item['id']; ?>" tabindex="-1"
            aria-labelledby="<?php echo $item['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"><i><?php echo $item['titulo']; ?></i>
                                    </h2><br>

                                    <!-- Slideshow para múltiplas imagens -->
                                    <?php if (isset($item['imagens']) && count($item['imagens']) > 1): ?>
                                        <div id="carousel<?php echo $item['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <?php foreach ($item['imagens'] as $index => $imagem): ?>
                                                    <li data-bs-target="#carousel<?php echo $item['id']; ?>"
                                                        data-bs-slide-to="<?php echo $index; ?>"
                                                        class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <!-- O slideshow -->
                                            <div class="carousel-inner">
                                                <?php foreach ($item['imagens'] as $index => $imagem): ?>
                                                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                                        <img class="rounded img-fluid" src="<?php echo $imagem; ?>"
                                                            alt="Imagem de <?php echo $item['titulo']; ?>">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <!-- Controles esquerdo e direito -->
                                            <a class="carousel-control-prev" href="#carousel<?php echo $item['id']; ?>"
                                                role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel<?php echo $item['id']; ?>"
                                                role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <img class="img-fluid rounded" src="<?php echo $item['imagens'][0]; ?>"
                                            alt="Imagem de <?php echo $item['titulo']; ?>">
                                    <?php endif; ?>

                                    <!-- Portfolio Modal - Text -->
                                    <button class="btn-translate" data-lang="pt">Português</button>
                                    <button class="btn-translate" data-lang="en">English</button>


                                    <p class="mb-4 description"
                                        data-description-pt="<?php echo implode('<br /><br />', $item['descricoes']['pt']); ?>"
                                        data-description-en="<?php echo implode('<br /><br />', $item['descricoes']['en']); ?>">
                                        <?php echo implode('<br /><br />', $item['descricoes']['pt']); ?>
                                    </p>
                                    <div class="alert alert-dark curiosity" role="alert"
                                        data-curiosity-pt="<?php echo $item['curiosidade']['pt']; ?>"
                                        data-curiosity-en="<?php echo $item['curiosidade']['en']; ?>">
                                        <?php echo $item['curiosidade']['pt']; ?>
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
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function toggleContrast() {
        var alerts = document.querySelectorAll('div.curiosity');
        alerts.forEach(function (alert) {
            alert.classList.toggle('contrast');
        });
        document.body.classList.toggle('high-contrast');
    }

    $(document).ready(function () {
        $('.btn-translate').click(function () {
            var modal = $(this).closest('.modal');
            var lang = $(this).data('lang');

            if (lang === 'pt') {
                modal.find('.description').html(modal.find('.description').data('description-pt'));
                modal.find('.curiosity').html(modal.find('.curiosity').data('curiosity-pt'));
            } else if (lang === 'en') {
                modal.find('.description').html(modal.find('.description').data('description-en'));
                modal.find('.curiosity').html(modal.find('.curiosity').data('curiosity-en'));
            }
        });
    });
</script>