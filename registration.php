<?php ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./registration.css">
<style>
body{
	background-color: rgba(140, 140, 140, 0.6);
}
p.head{
	font: cursive;
	font-weight: bold;
	font-size: 125px;
	position: absolute;
    color: black;
	top: 0px;
	left: 250px;

}
.container{
	padding: 16px;
}
input[type=text], input[type=text] {
	width: 98%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
    text-align:left;
	border: solid;
    left:0px;
	background: yellow;
	opacity:0.4;
	color:black;
}
input[type=text]:focus{
	background-color: #ddd;
}
::placeholder{
   color:black;
   opacity:1;
}
form{
	position: absolute;
	top: 300px;
    color: grey;
    left:200px;
    right:200px;
}
.required {
  color: red;
}
.register
{
    background-color: #4CAF50; /* Green */
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  font-weight:bold;
}
textarea{
	font-size: 20px;
	font-family: Times;
	width:400px;
	height:100px;
}
textarea::-webkit-input-placeholder {
	color: gray;
	font-size:20px;
}
</style>
<head>
	<p class="head">Signing Up</p>
</head>
<body>
<script type="text/javascript" src="./sign_up.js"></script>
	<form id="form" class="pure-form-stacked" method="post" accept-charset='UTF-8' action="account.php" onsubmit="return checkinput();">
        <fieldset>
		<div class="container">
		<hr>

		<label for="schoolname"><b>School Name</b><span class="required">*</span></label>
		<input id="schoolname" type="text" placeholder="Enter School Name" name="schoolname" required></input>

        <label for="teamname"><b>Team Name</b><span class="required">*</span></label>
		<input id="teamname" type="text" placeholder="Enter Team Name" name="teamname" required></input>
        
        <label for="leader"><b>Team Leader/Chaperone</b><span class="required">*</span></label>
		<input id="leader" type="text" name="leader" placeholder="Enter Name" required></input>
		
        <label for="member1"><b>Team Member #1</b><span class="required">*</span></label>
		<input id="member1" type="text" name="member1" placeholder="Enter Name" required></input>

        <label for="member2"><b>Team Member #2</b></label>
		<input id="member2" type="text" id="member2" name="member2" placeholder="Enter Name"></input>

        <label for="member3"><b>Team Member #3</b></label>
		<input id="member3" type="text" id="member3" name="member3" placeholder="Enter Name"></input>

		<label for="member4"><b>Team Member #4</b></label>
		<input id="member4" type="text" id="member4" name="member4" placeholder="Enter Name"></input>

        <label for="Permission Form"><b>Permission Form Signed for All Members?</b><span class="required">*</span></label>
		<input id="permit" type="text" name="permit" placeholder="Yes/No" required></input>

		<label for="T-shirt Sizes"><b>T-shirt Size for Members</b><span class="required">*</span></label>
		<input id="t-shirts" type="text" name="t-shirts" placeholder="Enter T-shirt size of all team members in order; separate by a semicolon and a space; end with an exclamation mark." required></input>

		<label for="Allergies/Dietary Restrictions"><b>Does any member have an allergy?</b><span class="required">*</span></label>
		<br><br>
		<textarea id="allergies" name="allergies" placeholder="Enter allergies/Dietary Restrictions for all members in order. If none, type N/A; separate by a semicolon and a space; end with an exclamation mark." required></textarea>
		</hr>
		<br><br><br>
		<button type="submit" class="register" name="login_user" method="post">Sign Up</button>
	</div>
    </fieldset>
	</form>
</body>
<div class="background"></div>
</html>

