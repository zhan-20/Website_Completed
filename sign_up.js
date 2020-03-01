	function checkinput() {
		var input1=document.getElementById("t-shirts").value;
		var input2=document.getElementById("allergies").value;
		var input0=document.getElementById("macbook").value;
		if (input1.charAt(input1.length-1)!='!') {
		alert("You need to end the t-shirt sizes input with an exclamation mark!");
		return false;
		}
		if (input2.charAt(input2.length-1)!='!') {
			alert("You need to end the allergies input with an exclamation mark!");
			return false;
		}
		if (input0.charAt(input0.length-1)!='!') {
			alert("You need to end the Macbook usage input with an exclamation mark!");
			return false;
		}
		var input3=document.getElementById("permit").value;
		if (input3!=="Yes"&&input3!=="No") {
			alert("You can only enter either 'Yes' or 'No'!");
			return false;
		}
		var input4=document.getElementById("schoolname").value;
		if (input4.length<8) {
			alert("Please enter the full name of your school.");
			return false;
		}
		if (checkinput1(input1)==false) {
		alert("You need to include every team member's t-shirt size once and only once; separate each two members by a semicolon and a space.");
		return false;
		}
		if (checkinput1(input2)==false) {
			alert("You need to include every team member's allergy once and only once; separate each two members by a semicolon and a space.");
			return false;
			}
		if (checkinput1(input0)==false) {
			alert("You need to include whether every team member will use a Macbook once and only once; separate each two members by a semicolon and a space.");
			return false;
			}
		return true;
	}
	function checkinput1(x) {
		var p=0; var i; 
		for (i=1; i<x.length-1; i++) {
			if (x1(x, i)) p++;
		}
		var m=calc()-1;
		if (p===m) return true;
		return false;
	}
	function x1 (x, y) {
		if (x.substring(y, y+2)==="; ") return true;
		return false;
	}
	function calc() {
		var numberofpeople=1;
		var a2=document.getElementById("member2").value;
		var a3=document.getElementById("member3").value;
		var a4=document.getElementById("member4").value;
		if (a2.length>0) numberofpeople++;
		if (a3.length>0) numberofpeople++;
		if (a4.length>0) numberofpeople++;
		return numberofpeople;
	}
