<?php
// Carregar o arquivo JSON
$data = file_get_contents('./data/talassociclo_flora_modals.json');
$conteudo = json_decode($data, true);

// Loop para exibir os modais
foreach ($conteudo as $item) {
    $id = $item['id'];
    $title = $item['title'];
    
    // 'images' sempre será um array
    $images = $item['images'];
    
    // Verifica se 'description' é um array, senão transforma em array
    $descriptions = is_array($item['description']) ? $item['description'] : [$item['description']];
    ?>

    <!-- Portfolio Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $id; ?>" tabindex="-1"
        aria-labelledby="portfolioModal<?php echo $id; ?>" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0"><?php echo $title; ?></h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Carrossel de Imagens -->
                                <div id="carousel<?php echo $id; ?>" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                        <?php foreach ($images as $index => $image) { ?>
                                            <li data-target="#carousel<?php echo $id; ?>" data-slide-to="<?php echo $index; ?>"
                                                class="<?php echo ($index == 0) ? 'active' : ''; ?>"></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="carousel-inner">
                                        <?php foreach ($images as $index => $image) { ?>
                                            <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                                                <img class="rounded img-fluid" src="<?php echo $image; ?>" alt="Image">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel<?php echo $id; ?>" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel<?php echo $id; ?>" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>

                                <!-- Portfolio Modal - Descrições -->
                                <p class="mb-4">
                                    <?php foreach ($descriptions as $index => $desc) { ?>
                                        <strong>Imagem <?php echo $index + 1; ?>:</strong> <?php echo $desc; ?><br />
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
