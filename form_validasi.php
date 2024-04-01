<!DOCTYPE html>
<html>
<head>
<title>Form Input dengan Validasi (AJAX)</title>
<script src="https://code.jquery.com.min/jquery-3.7.0.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="proses_validasi.php">
<label for="nama">Nama: </label>
<input type="text" id="nama" name="nama">
<span id="nama-error" style="color: red;"></span><br>
<label for="email">Email:</label>
<input type="text" id="email" name="email">
<span id="email-error" style="color: red;"></span><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<span id="password-error" style="color: red;"></span><br>
<input type="submit" value="Submit">
</form>
<script>
$(document).ready(function() {
  $("#myForm").submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    var nama = $("#nama").val();
    var email = $("#email").val();
    var password = $("#password").val();

    // Basic validation (can be improved)
    var valid = true;
    if (nama === "") {
      $("#nama-error").text("Nama harus diisi.");
      valid = false;
    } else {
      $("#nama-error").text("");
    }

    var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!emailRegex.test(email)) {
      $("#email-error").text("Email harus diisi dengan format yang benar (misalnya: example@domain.com).");
      valid = false;
    } else {
      $("#email-error").text("");
    }

    if (password.length < 8) {
      $("#password-error").text("Password minimal harus 8 karakter.");
      valid = false;
    } else {
      $("#password-error").text("");
    }

    if (valid) {
      // Send data using AJAX
      $.ajax({
        url: "form_validasi.php",
        type: "POST",
        data: { nama: nama, email: email, password: password },
        success: function(response) {
          $("#myForm").html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("#myForm").html("<p>Error: " + textStatus + "</p>");
        }
      });
    }
  });
});
</script>
</body>
</html>
