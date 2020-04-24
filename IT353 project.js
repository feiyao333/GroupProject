/*IT353 project JavaScript */
(function() {
	window.onload = function (){
		var result, result1;
		result= [];
		//select all art images and loop
		var images = document.querySelectorAll(".pic");
		for (var i=0; i < images.length; i++){
		
			images[i].onmouseover = function(){
			var newNode = document.createElement("img");
			var oldsrc=this.src;
			newNode.src=oldsrc.substring(0,oldsrc.length-4)+".gif";
			newNode.style="border:solid 1px black;";
			newNode.className='bigImg';
			this.parentNode.appendChild(newNode);};
			
			result.push(images[i].onmouseout = function(){
				var images1 = document. querySelectorAll(".bigImg");
				result1 = [];
				for(var j=0; j<images1.length;j++){
					result1.push(images1[j].parentNode.removeChild(images1[j]));
				}
				return result1;
			});
		};
		return result;
	}	
}).call(this)


