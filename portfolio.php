	

			
		<!-- ==============================================
		PORTFOLIO
		=============================================== -->
		<section id="portfolio" class="add-padding">
		
			<div class="container">
				
				<h1 class="big-text text-center scrollimation fade-in">My Works</h1>
				
				<!--==== Portfolio Filters ====-->
				<div id="filter-works">
					<ul>
						<li class="active scrollimation fade-right d1">
							<a href="#" data-filter="*">All</a>
						</li>
						<li class="scrollimation fade-left d1">
							<a href="#" data-filter=".gd">Graphic Design</a>
						</li>						
						<li class="scrollimation fade-right d1">
							<a href="#" data-filter=".photoshop">Photoshop</a>
						</li>
						<li class="scrollimation fade-left">
							<a href="#" data-filter=".illustrator">Illustrator</a>
						</li>
						<li class="scrollimation fade-left d1">
							<a href="#" data-filter=".in-design">In Design</a>
						</li>
<!-- 						<li class="scrollimation fade-left d1">
							<a href="#" data-filter=".color-theory">Color Theory</a>
						</li>
						<li class="scrollimation fade-left d1">
							<a href="#" data-filter=".typography">Typography</a>
						</li> -->						
					</ul>
				</div><!--End portfolio filters -->
				
				<!--==== Project Preview ====-->
				<div id="project-preview">
				
					<span class="close-preview">&times;</span>
				
					<div id="project-slider" class="flexslider"></div>
					
					<h1 id="project-title"></h1>
				
					<div id="project-content"></div>
				
				</div><!--Project Preview -->
				
			</div>
		
			<div class="container masonry-wrapper">
			
				<div id="projects-container">
				
					<?php include "projects/gd.php" ?>
					<?php include "projects/photoshop.php" ?>
					<?php include "projects/illustrator.php" ?>
					<?php include "projects/in-design.php" ?>
					<?php //include "projects/color-theory.php" ?>
					<?php //include "projects/typography.php" ?>
					



				</div><!-- End projects --> 
				
			</div><!-- End container --> 
			
		
		</section>
			