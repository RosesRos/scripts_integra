const clickid = '{subid}';
const address = `${window.location.protocol}//${window.location.hostname}?_update_tokens=1&sub_id=${clickid}`;

if(!clickid.includes('subid')){
	// Time to load (all) - sub_id_27
	let start = new Date();
	window.addEventListener("load", function () {
		let end = new Date();
		let different = end.getTime() - start.getTime();   
		seconds = different/1000;

		createPixel(`${address}&sub_id_27=${seconds}`);
	}); 

	// Stay time - sub_id_28
	var step = 5;
	var counter = 0;
	setInterval(function (){
		counter += step;
		createPixel(`${address}&sub_id_28=${counter}`);
	}, getSeconds(step));

	// ===================== Scroll percentage ===================== //
	// FOR WINDOW.SCROLL
	// Scroll Percent - sub_id_30
	window.addEventListener("load", function () {
		var limit = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight) - window.innerHeight;
		var scroll = 0;
		var last = 0;
		
		window.onscroll = function (e){
			let percents = Math.round(percentage(window.scrollY, limit)/10)*10;
			if(last !== percents && last < percents){
				setTimeout(function (){
					let url = `${address}&sub_id_30=${percents}`;
					
					if(!scroll){
						url += `&sub_id_29=1`;
						scroll = 1;
					}
					
					createPixel(url);
				}, getSeconds(1));
						
				last = percents;
			}
		};
	});
		
	// FOR DOCUMENT.BODY.SCROLL
	// Scroll Percent - sub_id_30
	/*
	window.addEventListener("load", function () {
		var scroll = 0;
		var last = 0;
    
		document.body.addEventListener('scroll', function(e) {
			let totalHeight = document.body.scrollHeight;
			let visibleHeight = document.body.clientHeight;
			let scrolledPortion = document.body.scrollTop || document.documentElement.scrollTop;
			
			let percents = Math.round(percentage(scrolledPortion + visibleHe`ight, totalHeight)/10)*10;
		
			if(last !== percents && last < percents) {
				setTimeout(function(){
					let url = `${address}&sub_id_30=${percents}`;
					
					if(!scroll) {
						url += `&sub_id_29=1`;
						scroll = 1;
					}
					
					createPixel(url);
				}, getSeconds(1));
						
				last = percents;
			}
		});
	});
	
	// ------------------ DEBUG CODE ----------------------- //
	// Get all scrollable elements
	/*
	const scrollableElements = [];

	document.querySelectorAll('*').forEach(element => {
		if (element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth) {
			scrollableElements.push(element);
		}
	});

	console.log(scrollableElements);
	
	// Listen to scrollable elements
	document.querySelectorAll('*').forEach(element => {
		element.addEventListener('scroll', function() {
			console.log('Scrolled element:', this);
		});
	});
	*/
	// ------------------------------------------------------ //
	// =============================================================== // 
	
	
	// Exit point - sub_id_26
	document.body.addEventListener('click', function(event) {
		let element = event.target;
		let tagName = element.tagName;
		let index = Array.from(document.querySelectorAll(tagName)).indexOf(element);
		
		if (tagName !== 'A'){
			if(element.closest('A'))
				createPixel(`${address}&sub_id_26=${tagName}(${index})`);
		}else
			createPixel(`${address}&sub_id_26=${tagName}(${index})`);
	});
}

function percentage(partialValue, totalValue) {
   return (100 * partialValue) / totalValue;
}

function getSeconds(s){
	return s*1000;
}

function createPixel(url){
	var img = document.createElement('img');
	img.class = 'event';
	img.src = url;
	img.referrerPolicy = 'no-referrer-when-downgrade';
	img.style.display = 'none';
	
	document.body.appendChild(img);
}