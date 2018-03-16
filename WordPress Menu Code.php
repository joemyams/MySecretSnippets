	

       <div class="header-1">
        <nav class="navbar navbar-transparent navbar-absolute">
        	<div class="container">
            	<!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header">
            		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                		<span class="sr-only">Toggle navigation</span>
    		            <span class="icon-bar"></span>
    		            <span class="icon-bar"></span>
    		            <span class="icon-bar"></span>
            		</button>
            		<a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
            	</div>

            	<div class="collapse navbar-collapse" id="navigation-example">
                  


                      //Creating Menu

						<?php wp_nav_menu( array(


					            			'theme_location' => 'menu-1',
					            			'container' => 'nav"',
					            			//container div class
					            			'conatainer_class' => 'navbar-collapse collapse',
					            			//ul Class
					            			'menu_class' => 'nav navbar-nav navbar-center',
					            			//container div id
					            			'conatiner_id' => 'navigation-example'

					            	));

					      ?>

					//Starting on Menu Customization

                    <ul class="nav navbar-nav navbar-center">
                        <li>
                            <a href="#pablo">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#pablo">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#pablo">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#pablo">
                                Contact Us
                            </a>
                        </li>
                    </ul>
            		<ul class="nav navbar-nav navbar-right">
    		            <li>
    		                <a href="https://twitter.com/CreativeTim">
    							<i class="fa fa-twitter"></i>
    						</a>
    		            </li>
    		            <li>
    		                <a href="https://www.facebook.com/CreativeTim">
    							<i class="fa fa-facebook-square"></i>
    						</a>
    		            </li>
    					<li>
    		                <a href="https://www.instagram.com/CreativeTimOfficial">
    							<i class="fa fa-instagram"></i>
    						</a>
    		            </li>
            		</ul>
            	</div>
        	</div>
        </nav>


        <div class="page-header header-filter" style="background-image: url('assets/img/bg12.jpg');">


      // Add it on Function.php


		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'custom-theme' ),
			'menu-2' => esc_html__( 'Footer', 'custom-theme' ),

		) );
