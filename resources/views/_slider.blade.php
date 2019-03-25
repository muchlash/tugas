            <div id="slider">
				<div class="viewer">
					<div class="reel">
						<div class="slide"> <img src="images/pics01.jpg" width="590" height="300" alt="" /> </div>
						<div class="slide"> <img src="images/pics02.jpg" width="590" height="300" alt="" /> </div>
						<div class="slide"> <img src="images/pics03.jpg" width="590" height="300" alt="" /> </div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 3000,
					speed: 'slow'
				});
			</script>
