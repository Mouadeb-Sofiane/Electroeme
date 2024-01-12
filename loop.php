<div>
    <div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="float: left; margin-right: 10px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); // Ajustez la taille selon vos besoins ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </div>
</div>

