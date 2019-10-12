  // function to stop get document by id
 function idElement (id_input) {
      return document.getElementById(id_input)
  }

//   idElement('password')

//   return document.getElementById('input_password')

  // prevent submission of the form once the system loads
  function preventSubmit(){
      event.preventDefault(); 
  }
  // once the form is submitted

 // document.getElementById('password').value;

  // function written to capture what should happen once the form is submitted
  function submitForm() {

      const password = idElement("password")
      
      alert(`this is password value:  ${password.value} and this is password length: ${password.value.length}`)

      if(password.value.length < 5) {
        alert("password is too  short")
      } else {
        alert('password is good')
      }

      const username = idElement("username")

      if(username.value.length < 5) {
        alert("username is too  short")
      } else {
        alert('username is good')
      }
  }


 //window.addEventListener('load', preventSubmit)
  
