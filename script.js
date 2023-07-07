document.getElementById("registrationForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get form values
  var name = document.getElementsByName("name")[0].value;
  var email = document.getElementsByName("email")[0].value;
  var faculty = document.getElementsByName("faculty")[0].value;
  var department = document.getElementsByName("department")[0].value;
  var phoneNumber = document.getElementsByName("phone_number")[0].value;

  // Perform basic form validation
  if (name.trim() === "" || email.trim() === "" || faculty.trim() === "" || department.trim() === "" || phoneNumber.trim() === "") {
    alert("Please fill in all fields");
    return;
  }

  // Submit the form
  this.submit();
});
