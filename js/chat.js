// JavaScript Document
window.onload = init;

function init(){
	
	// Variables
	var chatInterval = 250; // interval in ms for message retrieval
	var userName = document.getElementById("userName"); // username
	var chatInput = document.getElementById("chatInput"); // input for the message to be sent
	var chatSend = document.getElementById("chatSend"); // button to send message
	
	chatSend.onclick = function(){sendMessage(userName, chatInput);};
	
	setInterval(retrieveMessages, chatInterval);
}

function retrieveMessages(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200){
			document.getElementById("chatOutput").innerHTML = this.responseText;
		}
	};
	xhr.open("GET", "../includes/read.php", true);
	xhr.send();
	
	//document.getElementById("chatOutput").scrollTop = 100000000000;
}
	
function sendMessage(userName, chatInput){
	// create variable to hold data
	var data = "username=" + userName.value + "&text=" + chatInput.value;
	
	// Create a new XMLHttpRequest
	var xhr = new XMLHttpRequest();
	// Set our request to post, and direct it to our .php
	xhr.open("POST", "../includes/write.php", true);
	// Set the request header which allows us to send our data for post
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// Send the request with the data
	xhr.send(data);
	
	chatInput.value = "";
}
