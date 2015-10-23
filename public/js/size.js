 		$(window).resize(function(){
    	var container = document.getElementById("top_x_div").firstChild.firstChild;
    	container.style.width = "100%";
    	chart.draw(data, options);
		});