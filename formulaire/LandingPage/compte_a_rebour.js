var counDate=new Date('Jan 01, 2021 00:00:00').getTime();

function newYear(){
	var now=new Date().getTime();
		gap=counDate-now;

	var second=1000;
	var minute=second*60;
	var heure=minute*60;
	var jour=heure*24;

	var j=Math.floor(gap/(jour));
	var h=Math.floor((gap%(jour))/(heure));
	var m=Math.floor((gap%(jour))/(minute));
	var s=Math.floor((gap%(minute))/(second));

	document.getElementById('jour').innerText=j;
	document.getElementById('heure').innerText=h;
	document.getElementById('minute').innerText=m;
	document.getElementById('second').innerText=s;
}

setInterval(function(){newYear();},1000);