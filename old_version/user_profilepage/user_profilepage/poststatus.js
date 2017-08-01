/************************ Status post **************************************/
function postStatus() {
	var testPost = document.getElementById("postsubmission").value;
	document.getElementById("test_post").innerHTML = testPost;

	var testImage = document.getElementById("picture_upload").value;
	document.getElementById("test_image").innerHTML = testImage;
}

// Image preview: http://stackoverflow.com/questions/22087076/how-to-make-a-simple-image-upload-using-javascript-html