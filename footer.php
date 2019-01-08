		</main>
		<!--=====================================================================
								FOOTER
		=======================================================================-->
		<footer>
			<div id="footer_link_container" class="row">
				<ul class="wrapper">
					<li>
						<a href="https://www.linkedin.com/in/ryan-dool" target="_blank" rel="noopener">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" version="1.1" aria-hidden="true">
								<path fill="#e6e6e6" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="https://github.com/RyanDool" target="_blank" rel="noopener">
							<svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
								<path fill="#e6e6e6" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
							</svg>
						</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="footer_cc">
					<p class="copyright">&copy; <?=date('Y');?></p>
				</div>
			</div>
		</footer>
		<?php
			if($thispage == 'mbPage'){ ?>
			<script type="text/javascript">
				var MobileContent = document.getElementById('mobile_content_area'),
				    // farBack = document.getElementById('far_back'),
				    // midBack = document.getElementById('mid_back'),
				    // closeBack = document.getElementById('close_back'),
				    // midBackInitPosX = 164,
				    // midBackInitPosY = 0,
				    vrPeople = document.getElementById('vr_people'),
				    vrInitPosY = 0,
				    vrInitPosX = 0;
				if(window.DeviceOrientationEvent){
					window.addEventListener('deviceorientation', function(e){
						//alpha is compas direction
						var alpha = Math.round(e.alpha);
						//beta is vertical tilt
						var beta = Math.round(e.beta);
						var moddedBeta = beta*0.8;
						//gamma is the horizontal tilt
						var gamma = Math.round(e.gamma);
						var moddedGamma = gamma*0.8;
						// MobileContent.innerHTML = alpha + "<br>" + beta +"<br>" + gamma ;
						// farBack.style.backgroundPosition = gamma*0.1+'px ' + '0px';
						// midBack.style.backgroundPosition = midBackInitPosX+gamma*0.8+'px ' + '0px';
						vrPeople.style.left = vrInitPosX+moddedGamma+'px';
						// updatePos(moddedBeta, moddedGamma);
					}, false);


					function updatePos(beta, gamma){
						var query = window.matchMedia("(orientation:landscape)");
						if(query.matches){
							// landscape mode
							vrPeople.style.left = vrInitPosY+beta+'px';
						}else{
							// portrait mode
							vrPeople.style.left = vrInitPosX+gamma+'px';
						}
					}
				}
			</script>
			<?php } ?>
	</body>
</html>