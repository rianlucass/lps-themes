<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="container-custom py-8">
    <div class="max-w-4xl mx-auto">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">
                        <a href="<?php the_permalink(); ?>" class="hover:text-primary">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <div class="prose max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="text-center py-12">
                <h2 class="text-2xl font-bold text-gray-700">Nenhum conteúdo encontrado</h2>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>