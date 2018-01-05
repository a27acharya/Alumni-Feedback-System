<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Import style.css-->
  <link type="text/css" rel="stylesheet" href="css/style.css"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>


  <!-- Navigation -->
  <nav>
    <div class="nav-wrapper teal">
      <a href="" class="brand-logo center">
        SUIIT
      </a>
    </div>
  </nav>

  <div class="section">
    <div class="container">

    <!-- Author -->

  <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large teal pulse">
      <i class="material-icons">developer_mode</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="#!" class="text-darken-2 flow-text">Coded By Ashish Acharya</a></li>
    </ul>
  </div>



      <!-- Card -->
      <form action="index1.php" method="post">
      <div class="card hoverable">
        <div class="card-content">
          <span class="card-title center blue-text text-darken-4">Alumni Registration Form</span>
          <!-- Form -->
          <div class="row">
            <form class="col s12">

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="Full_Name" type="text"  value="<?php echo $Full_Name; ?>" name="Full_Name" required>
                  <label for="Full_Name">Full Name</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">today</i>
                  <input id="Graduating_Date" type="text" class="datepicker" value="<?php echo htmlentities($Graduating_Date); ?>" name="Graduating_Date" required>
                  <label for="Graduating_Date">Graduating Date</label>
                </div>                
                <div class="input-field col s4">
                  <i class="material-icons prefix">child_care</i>
                  <input id="Date_of_Birth" type="text" class="datepicker"  value="<?php echo htmlentities($Date_of_Birth); ?>" name="Date_of_Birth" required>
                  <label for="Date_of_Birth">Date of Birth</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">school</i>
                  <select value="<?php echo htmlentities($Branch); ?>" name="Branch" required>
                    <optgroup label="Bachelors">
                      <option value="CSE">B.Tech - CSE</option>
                      <option value="EEE">B.Tech - EEE</option>
                      <option value="ECE">B.Tech - ECE</option>
                    </optgroup>
                    <optgroup label="Masters">
                      <option value="M.Phil">M.Phil</option>
                      <option value="M.Tech">M.Tech</option>
                      <option value="MCA">MCA</option>
                      <option value="MSc-CS">MSc-CS</option>
                      <option value="MSc-EL">MSc-EL</option>
                    </optgroup>
                  </select>
                  <label>Branch</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="Permanent_Address" class="materialize-textarea" value="<?php echo htmlentities($Permanent_Address); ?>" name="Permanent_Address" required></textarea>
                  <label for="Permanent_Address">Permanent Address</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="Telephone" type="tel" value="<?php echo htmlentities($Telephone); ?>" name="Telephone" required>
                  <label for="Telephone">Telephone</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">email</i>
                  <input id="Email" type="email" class="validate" value="<?php echo htmlentities($Email); ?>" name="Email" required>
                  <label for="Email" data-error="wrong" data-success="right">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">group</i>
                  <input id="Present_Organization" type="text" value="<?php echo htmlentities($Present_Organization); ?>" name="Present_Organization" required>
                  <label for="Present_organization">Present Organization</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">airline_seat_recline_normal</i>
                  <input id="Designation" type="text" value="<?php echo htmlentities($Designation); ?>" name="Designation" required>
                  <label for="Designation">Designation</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">gps_fixed</i>
                  <input id="Present_Location" type="text" value="<?php echo htmlentities($Present_Location); ?>" name="Present_Location" required>
                  <label for="Present_Location">Present Location</label>
                </div>
              </div>

              <div class="center">
                <button class="btn-large waves-effect waves-light" type="submit" name="action">Next
                  <i class="material-icons right">send</i>
                </button>
              </div>

            </form>
          </div>

        </div>
      </div>
</form>
    </div>
  </div>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 50 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
</html>
