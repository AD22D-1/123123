document
  .getElementById("registerform")
  .addEventListener("submit", function (event) {
    if (!validateForm() ) {
      // if the validation of the form fails, we will not
      //submit the form.
      event.preventDefault(); // prevents the form from submitting.
    } else {
      if (!confirm("Confirm Submission of Signup Form?")) {
        // if form not
        // confirmed to submit , we will not submit the form
        event.preventDefault(); // prevents the form from submitting.
      }
    }
    // if we get to this line, the form will be ok to be submitted to server
  });

function validateForm() {
  var formOK = true; // our validation flag, if true means ok.
  var userid = document.getElementById("uid").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("psw").value;
  var confirmPassword = document.getElementById("psw-repeat").value;
  

  // clear and hide any error messages before we validate [again] (could be a revalidation attempt)
  clearErrorMsgs();

  // userid field validations
  if (userid.length == 0) {
    formOK = false;
    showError(document.getElementById("uid_err"), "Please enter a userid.");

  }

  // email field validations
  if (email.length == 0) {
    formOK = false;
    showError(
      document.getElementById("email_err"),"Please enter an email address.");
  } 
  else if (! validateemail(email)) {
    formOK = false;
    showError(
      document.getElementById("email_err"),"Please enter a valid email address.");
  }
  // password field validations
  if (password.length == 0) {
    formOK = false;
    showError(
      document.getElementById("password_err"),"Please enter a password.");
  }
  else if (!validatepassword(password)) {
    formOK = false;
    showError(
      document.getElementById("password_err"),"password must be at least 8 characters and not more than 16 Characters.");
  }
  // Validate();
  if (password != confirmPassword) {
      formOK =false;
      showError(
      document.getElementById("password2_err"),"Passwords do not match.");
     }
  return formOK;
}
// function Validate() {
//   var password = document.getElementById("psw").value;
//   var confirmPassword = document.getElementById("psw-repeat").value;
//   if (password != confirmPassword) {
      
//       formOK =false;
//       showError(
//         document.getElementById("password2_err"),"Passwords do not match.");
//   }
 
// }


function validatepassword(str) {
  // a shorter way to test regex
  // return /^\d{8}$/.test(str); // using regex to ensure all 8 characters in string arenumbers.
  return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/.test(str);
}
function validateemail(str) {
  // using regex again to validate email address: go to https://regexr.com/ and see the meaning of this regex expression below
  return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(str);
}
// clears the error messages
function clearErrorMsgs() {
  document.getElementById("uid_err").innerHTML = "";
  document.getElementById("uid_err").style.display = "none";
  document.getElementById("email_err").innerHTML = "";
  document.getElementById("email_err").style.display = "none";
  document.getElementById("password_err").innerHTML = "";
  document.getElementById("password_err").style.display = "none";
  document.getElementById("password2_err").innerHTML = "";
  document.getElementById("password2_err").style.display = "none";
}
function showError(element, msg) {
  element.style.display = "block"; // set the element to be visible
  element.innerHTML = msg; // set the error message in the HTML element
}
