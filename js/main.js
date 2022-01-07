//Register javascript

//Password validation
function myfun(){
	var a = document.getElementById("password").value;
	
    if(a==""){
        document.getElementById("messages").innerHTML="**Please fill the Password";
        return false;
    }
    if(a.length < 5 ){
        document.getElementById("messages").innerHTML="**Password length must be greater, then 5 characters";
        return false;
    }
    if(a.length > 20 ){
        document.getElementById("messages").innerHTML="**Password length must be smaller, then 20 characters";
        return false;
    }
   }

   //email validation
   function myfun1(){
	   var e = document.getElementById("email").value;
	   var msg = document.getElementById("msg").value;
	   var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;;
	   
	   if(e==""){
        document.getElementById("msg").innerHTML="**Please fill the Email";
        return false;
       }
	   if(!(e.match(pattern))){
		document.getElementById("msg").innetHTML = "Please Enter a Valid Email Address";
		return false;
	   }
	   else{
		document.getElementById("msg").innetHTML = "Your Email is Valid.";
		return true;
	   }  
   }

   function myfun2(){
	var u = document.getElementById("username").value;
	
    if(u==""){
        document.getElementById("err").innerHTML="**Please fill the Username";
        return false;
    }
    if(u.length < 5 ){
        document.getElementById("err").innerHTML="**Username length must be greater, then 5 characters";
        return false;
    }
    if(u.length > 20 ){
        document.getElementById("err").innerHTML="**Password length must be smaller, then 20 characters";
        return false;
	}
   }

   /*contact form */

   const name = document.getElementById('name')
   const email = document.getElementById('email')
   const password = document.getElementById('password')
   const form = document.getElementById('form')
   const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }
  if (name.value === '' || name.value == null){
    message.push('Email need to have @gmail.com')
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})

/* scripta per te profa */


function changeForm(form) {
  console.log(1)
  let forms = document.querySelectorAll("form>div");
  if (form == 0) {
      forms[0].classList.remove("hidden");
      forms[0].classList.add("form-style");
      forms[1].classList.add("hidden");
      forms[1].classList.remove("form-style");
  } else {
      forms[1].classList.remove("hidden");
      forms[1].classList.add("form-style");
      forms[0].classList.add("hidden");
      forms[0].classList.remove("form-style");
  }
}

const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')

function validate() {
   let inputs = document.querySelectorAll("input");
   username = inputs[0].value;
   password = inputs[1].value;
   if (usernameReg.test(username) && password != "") {
       return true;
   }
   return false;
  return true;
}


/*register
$(window).on("hashchange", function(){
  if(location.hash.slice(1)=="register"){
      $(".card").addClass("extend");
      $("#login").removeClass("selected");
      $("#register").addClass("selected");
  } else{
      $(".card").removeClass("extend");
      $("#login").addClass("selected");
      $("#register").removeClass("selected");
  }

});
$(window).trigger("hashchange"); */