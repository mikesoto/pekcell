<?php
/**
 * Content for homepage template
 *
 * @package pekcell
 */
?>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	      </ol>
	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img src="http://placehold.it/1200x500">
	          <div class="carousel-caption">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	          </div>
	        </div>
	        <div class="item">
	          <img src="http://placehold.it/1200x500">
	          <div class="carousel-caption">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	          </div>
	        </div>
	        <div class="item">
	          <img src="http://placehold.it/1200x500">
	          <div class="carousel-caption">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	          </div>
	        </div>
	        <div class="item">
	          <img src="http://placehold.it/1200x500">
	          <div class="carousel-caption">
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	          </div>
	        </div>
	      </div>
	      <!-- Controls -->
	      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	</div>

	<section id="logos2" data--500-top-top="background-size:100%" data-500-top-top="background-size:140%">
      <div class="container">
        <div class="row">
          	<?php 
				$pq = new WP_Query( array(
			    	'post_type'    => 'post',
			 		'post_status'  => 'publish',
			     ));
				if($pq->have_posts())
				{	
					$p_count = 0;
					while( $pq->have_posts() )
					{
						$pq->the_post();
						$p_count++;
						if($p_count == 4){
							//start second row
							echo '</div><div class="row">';
						}
						$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						echo '	<div class="col-sm-4" style="background-image:url('.$post_thumbnail_url.');">
						            <div class="logo">
						              <img src="'.$post_thumbnail_url.'">
						              <p>'.the_title().'</p>
						            </div>
						        </div>';
					}
				}
			?>
			<div class="col-sm-4">
	            <div class="form">
		            <span>Ingrese a su oficina</span>
	              	<form>
		                <input class="form-control" placeholder="Usuario">
		                <input class="form-control" type="password" placeholder="Contraseña">
		                <div class="button">
		                  <button class="btn">Entrar</button>
		                </div>
	              	</form>
	            </div>
	        </div>
		 </div><!-- row-->
      </div>
    </section>

         
        
	          
       




