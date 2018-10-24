
<?php get_header(); ?>

        <div id="corpo">
        
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_content(); ?></p>
        
        <?php endwhile; else: ?>
        <p>Nenhum post encontrado</p>
        <?php endif; ?>
        
		</div>
  		
<?php get_footer(); ?>

</body>
</html>
