<?php get_header(); ?>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
		
        <div id="corpo-img2">
        <img src="<?php bloginfo ('template_url'); ?>/imagens/banner_animado2.jpg" width="170" height="150" />
    	</div>

		<div id="corpo">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>

		<?php endwhile; else: ?>
		<h2>Pousada Bom Viver</h2>
        &nbsp
        <p>A Pousada Bom Viver localiza-se a uma distância razoável do centro da Esplanada do Rio Quente onde casais e famílias encontram diversas opções para desfrutar das águas quentes e seus benefícios à saúde.</p>
		&nbsp
		<p>Pensando no bem estar de seus hóspedes a Pousada Bom Viver é modestamente decorada com Ar Condicionado, Frigobar e Televisores de LED em cada uma de suas suítes que possuem uma cama de casal e um bi cama de solteiro. Opção ideal para quem busca tranquilidade em sua viagem. Desfrute do paraíso das águas quentes em atrações como a Praia do Cerrado no Hot Park,  entre outras do Rio Quente e Caldas Novas. Conheça os restaurantes, lanchonetes e feiras da região próximos de nossa pousada.</p>
		&nbsp
        &nbsp
        &nbsp
		<hr />
        &nbsp
        
		<?php endif; ?>
        </div>
		
        <div id="container-imagens">
        <div id="corpo-img"><img src="<?php bloginfo ('template_url'); ?>/imagens/Gifs/tirolesapequena.GIF" width="260" height="129" />
        </div>
        
        <div id="corpo-depoimento"><img src="<?php bloginfo ('template_url'); ?>/imagens/Gifs/halfpipe.GIF" width="260"height="129"/>
        </div>
        
        <div id="corpo-img3"><img src="<?php bloginfo ('template_url'); ?>/imagens/Gifs/praia2.GIF" width="260" height="129" />
        </div>
        </div>
        
        <div id="container-form">        
        <div id="form"><img src="<?php bloginfo ('template_url'); ?>/imagens/Gifs/formulario2.JPG" width="807" height="501" usemap="#Map" border="0" />
          <map name="Map" id="Map">
            <area shape="rect" coords="35,72,542,172" href="http://localhost/wordpress/index.php/contato/" target="_self" />
          </map>
        </div>
        </div>
        
        <div id="fundo">
                
        <hr /> 
        <p>
        <p/>
        &nbsp;
        &nbsp;
        &nbsp; 
        &nbsp;
        &nbsp;
        <p>
        &nbsp;
        <p/>
        <p>Hospede-se conosco e curta o que o Rio Quente tem a oferecer. Resorts como o Hot Park. O maior e melhor parque aquático da América do Sul, que foge do óbvio dos parques aquáticos. Difícil resistir à Praia do Cerrado, a maior praia artificial do mundo de águas quentes e naturais. Além da Tirolesa, Half Pipe e do XPIRADO, mega atração que desafia a coragem.<p/>
        &nbsp;
        <p>Também há atrações para a criançada como o Clubinho da Criança, Praia da Marina, entre tantas outras atividades cercada da natureza exuberante do cerrado brasileiro. As águas relaxam os músculos, melhoram a saúde, combatem a insônia e muito mais. Essas águas quando afloradas carregam consigo dissoluções de sais minerais e gases que possuem diversas propriedades terapêuticas.<p/>
        &nbsp;
        <p>Venha para Rio Quente e se divirta na maior estância hidrotermal do mundo, rodeada pela vegetação e pela fauna do cerrado, em um cenário único. Para informações sobre o mapa de ocupação, valores de diárias e dados para depósito bancário, favor entrar em contato por telefone ou e-mail.</p>
        <p>&nbsp;
        
        </p>
        &nbsp;
        <p>Não perca tempo.</p>
        <p>Faça já a sua reserva.</p>
        <p>Confira nossos preços de Diárias e Temporadas.</p>
        <p>Diárias com café da manhã incluído.</p>
		</div>
        		                      
<?php get_footer(); ?>

</body>
</html>
