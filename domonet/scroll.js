$('.component_name:not(.oneq .component_name), .component_text p a, .component_reposy nav').click(function(e) {
    	e.preventDefault();
    	$(".content").animate({
    	  scrollTop: $(".chat").height() - 650
    	}, 700)

    	$('html, body').animate({
    	  scrollTop: $('.cover').height()
    	}, 'slow');
    	return false;
 });
 
 
 

    var viewportMeta = document.querySelector('meta[name="viewport"]');

    function updateViewport() {
        if (window.innerWidth < 1060) {
            viewportMeta.setAttribute('content', 'width=520');
        } else {
            viewportMeta.setAttribute('content', 'width=device-width, initial-scale=1, maximum-scale=1');
        }
    }
    window.addEventListener('DOMContentLoaded', updateViewport);
    window.addEventListener('resize', updateViewport);
   
   
   
   
        let now = new Date();
        now.setDate(now.getDate() + d);
        let mm = now.getMonth() + 1;
        let day = now.getDate();
        if (now.getDate() < 10) day = '0' + now.getDate();
        if (mm < 10) mm = '0' + mm;
        document.write(day + "." + mm + "." + now.getFullYear());
    }
    
    
    
    
    
    
    
    
