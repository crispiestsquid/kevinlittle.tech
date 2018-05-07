window.onload = init;

function init()
{
	document.getElementById("sphere").value = 0;
	document.getElementById("cyl").value = 0;
	document.getElementById("calc").onsubmit = clicked;
}

function clicked()
{
	var sphere = document.getElementById("sphere").value;
	var cyl = document.getElementById("cyl").value;
	var total = parseFloat(sphere) + parseFloat(cyl);
	var base = 0;
	
	if (total >= 0 && total <= 1)
		{
			base = 4;
		}
	else if (total <= 0 && total >= -1)
		{
			base = 4;
		}
	
	if (total <= -1.25 && total >= -3)
		{
			base = 3;
		}
	
	if (total <= -3.25 && total >= -4.75)
		{
			base = 2;
		}
	
	if (total <= -5 && total >= -7)
		{
			base = 1;
		}
	
	if (total <= -7.25 && total >= -10)
		{
			base = 0.50;
		}
	
	if (total <= -10.25)
		{
			base = "Ask";
		}
	
	if (total >= 1.25 && total <= 3)
		{
			base = 5;
		}
	
	if (total >= 3.25 && total <= 6)
		{
			base = 6;
		}
	
	if (total >= 6.25)
		{
			base = "Ask";
		}
	
	document.getElementById("spres").innerHTML = sphere; 
	document.getElementById("cylres").innerHTML = cyl;
	document.getElementById("totres").innerHTML = total;
	document.getElementById("baseres").innerHTML = base;
	return false;
}