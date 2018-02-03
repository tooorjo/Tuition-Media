<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}


button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="/action_page.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Present Address:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="address"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>

  <div class="form-group">
     <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="optradio">Male
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">Female
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">Others
      </label>
    </div>
  </div>
  </div>
  <div class="tab">Contact Info:
    <div class="form-group">
    <label class="control-label col-sm-2" for="photo">Upload photo:</label>
    <div class="col-sm-10">
      <input type="file" id="photo" name="usr_photo" required>
     
    </div>
  </div>
  </div>
  <div class="tab">Birthday:
     <div class="form-group">
       <label class="control-label col-sm-2" for="edulevel">Educational level:</label>
      <div class="col-sm-10">
        <select class="form-control" id="select" required>
        <option >School</option>
        <option >College</option>
        <option >University</option>
        </select>
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="degree">Degree Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="degree" placeholder="exp. Honors,Masters" name="degree">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="major">Major/Subject:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="major" placeholder="exp. CSE, Physics" name="major">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Institute Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="institute" placeholder="Enter your College/University" name="institute">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="startyear">Starting Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="startyear" placeholder="Enter starting year" name="startyear">
      </div>
    </div>


  <div class="form-group">
     <label class="control-label col-sm-2" for="studentship">Current Student?</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="optradio">Yes
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">No
      </label>
      
    </div>
  </div>
  </div>
  <div class="tab">Login Info:
    <div class="form-group">
    <label class="control-label col-sm-3" for="ver">You teach:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Bangla Version
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English Version
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English Medium
      </label>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-3" for="classes">Preffered Classes:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">1-5
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">6-8
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">9-10
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">SSC 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">11-12
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">HSC
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">University
      </label>
    </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-3" for="courses">Courses you teach:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Bangla
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Science
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Physics
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Chemistry 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">ICT
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Biology
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Math
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Microsoft Office
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Computer Programming
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Chemistry 
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Math
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">English
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Biology
      </label>
    </div>
</div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="areas">Preffered locations:</label>
    <div class="col-sm-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="">Kewatkhali
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Charpara
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Ganginarpar
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Your place
      </label>
    </div>
</div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="daysofweek">Maximum days a Week:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >3</option>
        <option >4</option>
        <option >Any</option>
        </select>
      </div>
    </div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="experience">Teaching experience:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >None</option>
        <option >1 year</option>
        <option >2 years</option>
        <option >2+ years</option>
        </select>
      </div>
    </div>

  <div class="form-group">
       <label class="control-label col-sm-3" for="minsalary">Minimum salary requirement:</label>
      <div class="col-sm-9">
        <select class="form-control" id="select" required>
        <option >Any</option>
        <option >2000tk</option>
        <option >3000tk</option>
        <option >5000tk</option>
        </select>
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-3" for="teachingstyle">Tell us something about your teaching style:</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="4" id="teachingstyle"></textarea>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
