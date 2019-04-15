<section id="about" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><?= $data['title']?></h2>
                    <p><?= $data['text']?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['card-content'] as $card) : ?>
                <div class="col-md-3 text-center">
                    <div class="mz-module-about">
                        <?=$card['img']?>
                        <h3><?= $card['title']?></h3>
                        <p><?= $card['text']?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>