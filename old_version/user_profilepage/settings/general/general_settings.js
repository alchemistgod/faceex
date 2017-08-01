/************************ Form submission **************************************/
function submission() {
	var newFirstName = document.getElementById("firstname").value; //Retrieves value entered for first name
	document.getElementById("userFirstName").value = newFirstName;

	var newProfession = document.getElementById("profession").value; //Retrieves value entered for profession
	document.getElementById("userProfession").value = newProfession;
}