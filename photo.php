<?php
	require_once("partial/header.php");
?>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			$("a.grouped_elements").fancybox();
		});
	</script>
	<div id="photoExt"></div>
	<br/>
	<div>
		<a class="grouped_elements" rel="group1" href="images/imageExt/image1.jpg"><img alt="" src="images/imageExt/image1s.jpg"/></a>

		<a class="grouped_elements" rel="group1" href="images/imageExt/image2.jpg"><img alt="" src="images/imageExt/image2s.jpg"/></a>

		<a class="grouped_elements" rel="group1" href="images/imageExt/image3.jpg"><img alt="" src="images/imageExt/image3s.jpg"/></a>

		<a class="grouped_elements" rel="group1" href="images/imageExt/image4.jpg"><img alt="" src="images/imageExt/image4s.jpg"/></a>
			
		<a class="grouped_elements" rel="group1" href="images/imageExt/image5.jpg"><img alt="" src="images/imageExt/image5s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image6.jpg"><img alt="" src="images/imageExt/image6s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image7.jpg"><img alt="" src="images/imageExt/image7s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image8.jpg"><img alt="" src="images/imageExt/image8s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image9.jpg"><img alt="" src="images/imageExt/image9s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image10.jpg"><img alt="" src="images/imageExt/image10s.jpg"/></a>
		
		<a class="grouped_elements" rel="group1" href="images/imageExt/image11.jpg"><img alt="" src="images/imageExt/image11s.jpg"/></a>
	</div>
	<br/>
	<br/>
	<div id="photoInt"></div>
	<br/>
	<div>
		<a class="grouped_elements" rel="group2" href="images/imageInt/image1.jpg"><img alt="" src="images/imageInt/image1s.jpg"/></a>

		<a class="grouped_elements" rel="group2" href="images/imageInt/image2.jpg"><img alt="" src="images/imageInt/image2s.jpg"/></a>
	</div>
	<br/>
	<br/>
</div>
<?php
	require_once("partial/footer.php");
?>