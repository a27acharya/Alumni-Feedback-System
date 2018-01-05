<?php


$conn = mysqli_connect('localhost','root','','alumni');

if(!$conn)
{
  die('Connection failed!'.mysqli_error($conn));
}


$Full_Name = $_POST['Full_Name'];
$Graduating_Date = $_POST['Graduating_Date'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$Branch = $_POST['Branch'];
$Permanent_Address = $_POST['Permanent_Address'];
$Telephone = $_POST['Telephone'];
$Email = $_POST['Email'];
$Present_Organization = $_POST['Present_Organization'];
$Designation = $_POST['Designation'];
$Present_Location = $_POST['Present_Location'];



$sql = "INSERT INTO form(Full_Name, Graduating_Date, Date_of_Birth ,Branch, Permanent_Address, Telephone, Email, Present_Organization, Designation, Present_Location) 
        VALUES('$Full_Name', '$Date_of_Birth','$Graduating_Date', '$Branch', '$Permanent_Address', '$Telephone', '$Email', '$Present_Organization', '$Designation', '$Present_Location')";

if(mysqli_query($conn,$sql))
{
  echo '<div class="center">Registerd Successfully</div>';
}
else
{
  echo "";
}

?>

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
    <div class="nav-wrapper purple">
      <a href="" class="brand-logo center">
        SUIIT
      </a>
    </div>
  </nav>

  <div class="section">
    <div class="container">

      <!-- Author -->

      <div class="fixed-action-btn toolbar">
        <a class="btn-floating btn-large purple pulse">
          <i class="material-icons">developer_mode</i>
        </a>
        <ul>
          <li class="waves-effect waves-light"><a href="#!" class="text-darken-2 flow-text">Coded By Ashish Acharya</a></li>
        </ul>
      </div>



      <!-- Card -->
      <form action="index2.php" method="post" >
      <div class="card hoverable">
        <div class="card-content">
          <!-- Form -->
          <div class="row">
            <form class="col s12">

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">1. How was your experience at SUIIT ?</div>
                </div>
              </div>
               <form action="index2.php" method="post" value="<?php echo $ques1; ?>"
              <div class="row center">
                  
                  <p class="col s3">
                    <input name="ques1" type="radio" id="awesome" value="Awesome" />
                    <label for="awesome">Awesome</label>
                  </p>
                  <p class="col s3">
                    <input name="ques1" type="radio" id="good" value="Good" />
                    <label for="good">Good</label>
                  </p>
                  <p class="col s3">
                    <input name="ques1" type="radio" id="Average" value="Average" required>
                    <label for="Average">Average</label>
                  </p>
                  
                </form>
              </div>


              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">2. Have you obtained sufficient technical knowledge at SUIIT ?</div>
                </div>
              </div>

              <div class="row center">
               
                  <p class="col s3">
                    <input name="ques2" type="radio" id="yes" value="Yes" required>
                    <label for="yes">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques2" type="radio" id="no" value="No" required>
                    <label for="no">No</label>
                  </p>
                </form>
              </div>
             
              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">3. Is the education imparted at SUIIT useful and relevant in your present job ?</div>
                </div>
              </div>

              <div class="row center">
                 
                  <p class="col s3">
                    <input name="ques3" type="radio" id="haa" value="Yes" required>
                    <label for="haa">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques3" type="radio" id="naa" value="No" required>
                    <label for="naa">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">4. Were the HOD’s & Faculties cooperative ?</div>
                </div>
              </div>

              <div class="row center">
                
                  <p class="col s3">
                    <input name="ques4" type="radio" id="valid" value="Yes" required>
                    <label for="valid">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques4" type="radio" id="not valid" value="No" required>
                    <label for="not valid">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">5. Has the Placement Cell provided ample On campus placement opportunities ?</div>
                </div>
              </div>

              <div class="row center">
                 
                  <p class="col s3">
                    <input name="ques5" type="radio" id="yup" value="Yes" required>
                    <label for="yup">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques5" type="radio" id="not yup" value="No" required>
                    <label for="not yup">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">6. Has the Placement Cell provided sufficient Off campus placement opportunities ?</div>
                </div>
              </div>

              <div class="row center">
                 
                  <p class="col s3">
                    <input name="ques6" type="radio" id="yoo" value="Yes" required>
                    <label for="yoo">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques6" type="radio" id="not yoo" value="No" />
                    <label for="not yoo">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">7. Have you availed Career counseling and guidance for higher studies from Placement Cell?</div>
                </div>
              </div>

              <div class="row center">
                 
                  <p class="col s3">
                    <input name="ques7" type="radio" id="bhala" value="Yes" />
                    <label for="bhala">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques7" type="radio" id="kharap" value="No" />
                    <label for="kharap">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">8. If you are invited to deliver A Guest Lecture/ A Special Talk / A Motivational Session for your juniors, will you be interested?</div>
                </div>
              </div>

              <div class="row center">
                
                  <p class="col s3">
                    <input name="ques8" type="radio" id="han" value="Yes" />
                    <label for="han">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques8" type="radio" id="nai" value="No"/>
                    <label for="nai">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">9. Do you like to join the college Alumni Association?</div>
                </div>
              </div>

              <div class="row center">
                
                  <p class="col s3">
                    <input name="ques9" type="radio" id="han bo" value="Yes" />
                    <label for="han bo">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques9" type="radio" id="nai bo" value="No" />
                    <label for="nai bo">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">10. Have you participated in any Alumni meet as of now?</div>
                </div>
              </div>

              <div class="row center">
                
                  <p class="col s3">
                    <input name="ques10" type="radio" id="hela" value="yes" required>
                    <label for="hela">Yes</label>
                  </p>
                  <p class="col s3">
                    <input name="ques10" type="radio" id="nai hela" value="no" required>
                    <label for="nai hela">No</label>
                  </p>
                </form>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">11. Most Memorable Moment in the college.</div>
                  <textarea name="ques11" class="materialize-textarea" id="Most Memorable Moment in the college" required></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card-title grey-text text-darken-1">12. Suggestion for improvements.</div>
                </div>
              </div>

              <div class="row">
                <div class="col s6">
                  <div class="card-title grey-text text-darken-1 center">Department</div>
                  <textarea id="Department" class="materialize-textarea" name="Department" required></textarea>
                </div>
                <div class="col s6">
                  <div class="card-title grey-text text-darken-1 center">College</div>
                  <textarea id="College" class="materialize-textarea" name="College" required></textarea>
                </div>
              </div>
               
              <div class="center">
                <button id="myBtn" class="btn-large waves-effect waves-light purple" type="submit" name="action">Submit
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
