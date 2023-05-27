function toggleForm() {
    var x = document.getElementById("login-form");
    if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  }
  function joinUs() {
      if (isLoggedIn) {
          window.location.href = "../html/hehe.html";
      } else {
          toggleForm();
      }
  }