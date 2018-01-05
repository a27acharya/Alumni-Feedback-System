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
    <div class="nav-wrapper blue">
      <a href="" class="brand-logo center">
        SUIIT
      </a>
    </div>
  </nav>
    <div class="container">
        <div class="row" id="div_print">
                <?php

                $conn = mysqli_connect('localhost','root','','alumni');

                if(!$conn)
                {
                  die('Connection failed!'.mysqli_error($conn));
                }


                $ques1 = $_POST['ques1'];
                $ques2 = $_POST['ques2'];
                $ques3 = $_POST['ques3'];
                $ques4 = $_POST['ques4'];
                $ques5 = $_POST['ques5'];
                $ques6 = $_POST['ques6'];
                $ques7 = $_POST['ques7'];
                $ques8 = $_POST['ques8'];
                $ques9 = $_POST['ques9'];
                $ques10 = $_POST['ques10'];
                $ques11 = $_POST['ques11'];
                $Department = $_POST['Department'];
                $College = $_POST['College'];



                $sql = "INSERT INTO register(ques1, ques2, ques3, ques4, ques5, ques6, ques7, ques8, ques9, ques10, ques11, Department, College) 
                        VALUES('$ques1', '$ques2','$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$ques9', '$ques10', '$ques11', '$Department', '$College')";

                if(mysqli_query($conn,$sql))
                {
                  echo '<div class="center"><h4>Thank you for your valuable feedback !!!</h4></div>';
                }
                else
                {
                  echo "";
                }


                $form_result = mysqli_query($conn,"SELECT * FROM `form` ORDER BY form.alumni_id DESC LIMIT 1");
                $register_result = mysqli_query($conn,"SELECT * FROM `register` ORDER BY register.ques_id DESC LIMIT 1");


                echo '<div class="col s6">';
                echo '<h3>Details</h3>';
                while($row = mysqli_fetch_array($form_result))
                {
                echo "Full Name : " .$row['Full_Name']."<br>Graduating Date : "
                . $row['Graduating_Date'] ."<br>Date Of Birth : "
                . $row['Date_of_Birth'] ."<br>Branch : "
                . $row['Branch'] ."<br>Permanent Address : "
                . $row['Permanent_Address'] ."<br>Telephone : "
                . $row['Telephone'] ."<br>Email : "
                . $row['Email'] ."<br>Present Organization : "
                . $row['Present_Organization'] ."<br>Designation : "
                . $row['Designation'] ."<br>Present Location : "
                . $row['Present_Location'] ."<br>";
                }
                echo "</div>";

                echo '<div class="col s6">';
                echo '<h3>Feedback</h3>';
                while($row = mysqli_fetch_array($register_result))
                {
                echo "1. How was your experience at SUIIT ? <br>A. " .$row['ques1']."<br>2. Have you obtained sufficient technical knowledge at SUIIT ? <br>A. "
                . $row['ques2'] ."<br>3. Is the education imparted at SUIIT useful and relevant in your present job ? <br>A. "
                . $row['ques3'] ."<br>4. Were the HOD’s & Faculties cooperative ? <br>A."
                . $row['ques4'] ."<br>5. Has the Placement Cell provided ample On campus placement opportunities ? <br>A. "
                . $row['ques5'] ."<br>6. Has the Placement Cell provided sufficient Off campus placement opportunities ? <br>A. "
                . $row['ques6'] ."<br>7. Have you availed Career counseling and guidance for higher studies from Placement Cell ? <br>A. "
                . $row['ques7'] ."<br>8. If you are invited to deliver A Guest Lecture/ A Special Talk / A Motivational Session for your juniors, will you be interested ? <br>A. "
                . $row['ques8'] ."<br>9. Do you like to join the college Alumni Association ? <br>A. "
                . $row['ques9'] ."<br>10. Have you participated in any Alumni meet as of now ? <br>A. "
                . $row['ques10'] ."<br>11. Most Memorable Moment in the college. <br>A. "
                . $row['ques11'] ."<br>12(A). Suggestion for improvements for Department. <br>A. "
                . $row['Department'] ."<br>12(B). Suggestion for improvements for College. <br>A. "
                . $row['College'] ."";
                }
                echo "</div>";


                mysqli_close($conn);


                ?>
        </div>
            <div class="center">
                <input name="b_print" type="button" class="ipt btn-large blue" onClick="printdiv('div_print');" value="print" ><br><br><br><br><br> 
            </div>
    </div>          
    <script>
        function printdiv(printpage)
        {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
        }
    </script>
</body>