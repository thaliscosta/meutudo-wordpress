<?php get_header(); ?>

<main id="home">

    <section class="s-top" style="background-image: url('<?php the_field('imagem_topo', $post->ID); ?>');">
        <div class="container">
            <h1>
                <?php the_field('texto_topo', $post->ID); ?>
            </h1>
        </div>
    </section>

    <section class="s-benefits">
        <div class="container">
            <div class="grid-benefits">

                <?php 
                $itens_simule_topo = get_field('itens_simule_topo', $post->ID);
                if(!empty($itens_simule_topo)){
                    foreach($itens_simule_topo as $item){
                     ?>
                     <div class="item">
                        <div class="ico">
                            <img src="<?= $item['icone'] ?>" alt="<?= $item['titulo'] ?>" />
                            <h3><?= $item['titulo'] ?></h3>
                            <p><?= $item['texto'] ?></p>
                            <a href="<?= $item['link'] ?>" class="btn">Simule agora</a>
                        </div>
                    </div>
                <?php } } ?>

            </div>

            <div class="box-center">
                <div class="box-title">
                    <h2 data-aos="fade-left" data-aos-duration="1500">VANTAGENS</h2>
                    <h3 data-aos="fade-left" data-aos-duration="1500"><?php the_field('titulo_vantagens', $post->ID); ?></h3>
                </div>
                <p data-aos="fade-left" data-aos-duration="1500"><?php the_field('texto_vantagens', $post->ID); ?></p>
            </div>
            <div class="grid-itens">

                <?php 
                $itens_vantagens = get_field('itens_vantagens', $post->ID);
                if(!empty($itens_vantagens)){
                    foreach($itens_vantagens as $item){
                     ?>
                     <div class="item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="ico">
                            <img src="<?= $item['icone'] ?>" alt="<?= $item['titulo'] ?>" />
                        </div>
                        <h3><?= $item['titulo'] ?></h3>
                        <p><?= $item['texto'] ?></p>
                    </div>
                <?php } } ?>

            </div>
        </div>
    </section>

    <section class="s-our-platform">
        <div class="container">
            <div class="box">
                <div class="img">
                    <?php $imagem_nossa_plataforma = get_field('imagem_nossa_plataforma', $post->ID); ?>
                    <img src="<?= $imagem_nossa_plataforma['sizes']['large'] ?>" alt="<?= $imagem_nossa_plataforma['alt'] ?>" title="<?= $imagem_nossa_plataforma['title'] ?>">
                </div>
                <div class="info">
                    <div class="box-title">
                        <h2>NOSSA PLATAFORMA</h2>
                        <h3><?php the_field('titulo_nossa_plataforma', $post->ID); ?></h3>
                        <ul>
                            <?php 
                            $lista_nossa_plataforma = get_field('lista_nossa_plataforma', $post->ID);
                            if(!empty($lista_nossa_plataforma)){
                                foreach($lista_nossa_plataforma as $item){
                                 ?>
                                 <li><?= $item['item'] ?></li>
                             <?php } 
                         } ?>
                     </ul>

                     <div class="shop">
                        <a href="<?php the_field('google_play', 'option'); ?>" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/app_google.webp" alt="" />
                        </a>
                        <a href="<?php the_field('app_store', 'option'); ?>" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/app_apple.webp" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="s-purpose">
    <div class="container">
        <div class="grid">
            <div class="info">
                <div class="box-title">
                    <h2 data-aos="fade-right" data-aos-duration="1500">PROPÓSITO</h2>
                    <h3 data-aos="fade-right" data-aos-duration="2000"><?php the_field('titulo_proposito', $post->ID); ?></h3>
                    <p data-aos="fade-right" data-aos-duration="2500"><?php the_field('texto_proposito', $post->ID); ?></p>
                </div>
                <a href="<?php the_field('link_botao_proposito', $post->ID); ?>"  data-aos="fade-right" data-aos-duration="2500" class="btn">Simule agora</a>
            </div>
            <div class="img" data-aos="fade-left" data-aos-duration="1500">
               <?php $imagem_proposito = get_field('imagem_proposito', $post->ID); ?>
               <img src="<?= $imagem_proposito['sizes']['large'] ?>" alt="<?= $imagem_proposito['alt'] ?>" title="<?= $imagem_proposito['title'] ?>">
           </div>
       </div>
   </div>
</section>

<section class="s-cta">
    <div class="container">
        <div class="box-center">
            <div class="cta">
                <?php $imagem_cta = get_field('imagem_cta', $post->ID); ?>
                <img src="<?= $imagem_cta['sizes']['medium'] ?>" alt="<?= $imagem_cta['alt'] ?>" title="<?= $imagem_cta['title'] ?>">
                <h3><?php the_field('texto_cta', $post->ID); ?></h3>
            </div>
        </div>
    </div>
</section>

<section class="s-download">
    <div class="container">
        <div class="block">
            <div class="img">
                <?php $imagem_aplicativo = get_field('imagem_aplicativo', $post->ID); ?>
                <img src="<?= $imagem_aplicativo['sizes']['large'] ?>" alt="<?= $imagem_aplicativo['alt'] ?>" title="<?= $imagem_aplicativo['title'] ?>">
            </div>
            <div class="info">
                <h2><?php the_field('texto_aplicativo', $post->ID); ?></h2>
                <div class="shop">
                    <a href="<?php the_field('google_play', 'option'); ?>" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/app_google.webp" alt="" />
                    </a>
                    <a href="<?php the_field('app_store', 'option'); ?>" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/app_apple.webp" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>