// is part of "FlurSpiel2"

function hideVideo()
	{
		var vid = document.getElementById("SchnickSchnackSchnuck");
		vid.style.display = "none";
	}


function showVideo()
 {
    var vid = document.getElementById("SchnickSchnackSchnuck");
	vid.style.display = "block";
	vid.loop = true;
	
	var b1 = document.getElementById("b1");
	b1.style.display = "none";
 }
