
				<?php  $imgCapa = get_field('imagem_do_material');  ?>

									<div class="card-material">
										<a href="<?php the_field('link_para_abrir'); ?>" target="_blank">
											<div class="img" style="background-image: url(<?php echo $imgCapa['url']; ?>);">
						
											</div>
											<div class="desc" >
												<div class="categoria-m">
													<?php 

														$terms = get_the_terms( $post->ID, 'material-categoria' );
														if ( !empty( $terms ) ){
														    // get the first term
														    $term = array_shift( $terms );
														      echo '<p >' . $term->name . '</p>';
														}

													 ?>													
												</div>
												<p class="title" ><?php the_title(); ?></p>
												<p class="texto-material">
													<?php $summary = get_field('texto_do_material');
											          echo substr($summary, 0, 100); ?>...												
												</p>
												<div class="botao-mat">
													<p>baixe agora mesmo</p>
													<div class="icone-img">
														<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/right-arrow.png" alt="" class="img-fluid">
													</div>
												</div>		
											</div>
										</a>
									</div>