<script type="text/javascript">
	
	function ImageWidthHeightResponse() 
	{
	    var imgElement = document.getElementsByClassName('img-auto-adjust');
	    $(".img-auto-adjust").each(function (index) {
	        var imgSrc = imgElement[index];

	        var img = new Image();
	        img.onload = function () {
	        	var r1 = (this.height) / (this.width);
	        	// console.log(r1);
	            if (this.width > this.height) {
	                
	            	if (r1 > .6) 
	            	{
	            		imgSrc.style.height = '100%';
	            	}
	            	else
	            	{
	            		imgSrc.style.width = '100%';
	            	}
	                imgSrc.style.visibility = 'visible';

	            } else if (this.width < this.height) {
	                imgSrc.style.height = '100%';
	                imgSrc.style.visibility = 'visible';
	            }
	            else {
	                imgSrc.style.height = '100%';
	                imgSrc.style.visibility = 'visible';
	            }

	        }
	        img.src = imgSrc.src;
	    });
	}

	function setCaption()
	{
		setTimeout(function(){
			var caption = $('#carouselModal .carousel-inner .active .caption').val();
			$('#carouseCaption').text(caption);

			var countPage = $('#carouselModal .carousel-inner .pageCount').length;
			var pageNum = $('#carouselModal .carousel-inner .active .pageCount').val();
			$('#carouselPageNumber').text( pageNum + ' of ' + countPage + '.');
		},650);
	}

	$(function(){

		ImageWidthHeightResponse();

		var windowHeight = $(window).height();
		$('.carousel-img-panel').css('height', windowHeight * .75 + 'px');

		$('#carouselModal').click(function(){

			setCaption();

		});

		$(window).keydown(function(e){
			if ($('#ssModal').is(':visible')) 
			{
				if (e.which == 39 || e.which == 37) 
				{
					setCaption();
				}
			}
		});


	});

</script>