function login(){
	window.location.href = "profile.html";
}
function logout() {
  document.getElementById("content").innerHTML = "You have successfully signed out.";
  document.getElementById("title").innerHTML = "";
}