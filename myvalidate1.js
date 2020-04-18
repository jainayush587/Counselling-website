function myFunction() {
	var name = document.forms["counselfinal"]["fname"];
	var studentid = document.forms["counselfinal"]["stdId"];
	var txtdate = document.forms["counselfinal"]["testdate"];
	var cls = document.forms["counselfinal"]["class"];
	var dpt = document.forms["counselfinal"]["dept"];
	var eml = document.forms["counselfinal"]["email"];
	var ph = document.forms["counselfinal"]["phone"];
	var rn = document.forms["counselfinal"]["rollno"];
	var mentor = document.forms["counselfinal"]["mname"];

	if(name.value == ""){
		window.alert('Please enter the Name ');
		name.focus();
		return false;
	}
	
	var letters = /^[A-Za-z ]+$/;
      if(name.value.match(letters))
      {
      
      }
      else
      {
      window.alert('Please enter alphabet characters only');
	  name.focus();
      return false;
      }
	
	if(studentid.value == ""){
		window.alert('Please enter the student Id ');
		studentid.focus();
		return false;
	}
	
	var pattern = /^[0-9]{10}$/;

    if (pattern.test(studentid.value)) {
    
    }
    else {
		window.alert("Please enter a valid student id:10 digit number ");
		studentid.focus();
        return false;
    }
	
	if(txtdate.value == ""){
		window.alert('Please enter the date ');
		txtdate.focus();
		return false;
	}
	
	if(cls.value == ""){
		window.alert('Please enter the class ');
		cls.focus();
		return false;
	}
	
	if(dpt.value == ""){
		window.alert('Please enter the department ');
		dpt.focus();
		return false;
	}
	
	if(eml.value == ""){
		window.alert('Please enter the email ');
		eml.focus();
		return false;
	}
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(eml.value) == false) 
        {
            alert('Invalid Email Address');
			eml.focus();
            return false;
        }
	
	if(ph.value == ""){
		window.alert('Please enter the phone number ');
		ph.focus();
		return false;
	}
	
	var phoneno = /^\d{10}$/;
	if(ph.value.match(phoneno))
        {
        }
	else
        {
        window.alert('Please enter valid phone number');
		ph.focus();
        return false;
        }
	
	if(rn.value == ""){
		window.alert('Please enter the roll no ');
		rn.focus();
		return false;
	}
	
	if(mentor.value == ""){
		window.alert("Please enter the your Mentor's Name ");
		mentor.focus();
		return false;
	}
	
	var letters = /^[A-Za-z ]+$/;
      if(mentor.value.match(letters))
      {
      
      }
      else
      {
      window.alert('Please enter alphabet characters only');
	  mentor.focus();
      return false;
      }
	
	return true;
}