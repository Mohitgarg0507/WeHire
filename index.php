<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Company registeration</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class="signupSection">
  <div class="info">
    <h2 style="padding: 50px 50px 50px 50px;">Mission to give employment to everyone and easy to find workers</h2>
    <img src="good-job.png" alt="job" width="70px" height="70px">
    <p>The Future Is Here</p>
  </div>
  <form action="insert.php" method="post" class="signupForm" name="signupform">
    <h2>Register</h2>
    <ul class="noBullet">
      <li>
        <label for="Company_Name"></label>
        <input type="text" class="inputFields" id="Company_Name" name="Company_Name" placeholder="Company_Name" value="" required/>
      </li>
      <li>
        <label for="Email"></label>
        <input type="text" class="inputFields" id="Email" name="Email" placeholder="Email" value="" required/>
      </li>
      <li>
        <label for="Address"></label>
        <input type="text" class="inputFields" id="Address" name="Address" placeholder="Address" value="" required/>
      </li>
      <li>
        <label for="Vacancies"></label>
        <input type="text" class="inputFields" id="Vacancies" name="Vacancies" placeholder="Vacancies" value="" required/>
      </li>
      <li>
        <label for="Job_Description"></label>
        <input type="text" class="inputFields" id="Job_Description" name="Job_Description" placeholder="Job_Description" value="" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Submit">
      </li>
    </ul>
  </form>
</div>
      <!-- <center>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">

<p>
               <label for="Company_Name">Company_Name:</label>
               <input type="text" name="Company_Name" id="Company_Name">
            </p>


<p>
               <label for="Email">Email:</label>
               <input type="text" name="Email" id="Email">
            </p>


<p>
               <label for="Address">Address:</label>
               <input type="text" name="Address" id="Address">
            </p>


<p>
               <label for="Vacancies">Vacancies:</label>
               <input type="text" name="Vacancies" id="Vacancies">
            </p>


<p>
               <label for="Job_Description">Job Description:</label>
               <input type="text" name="Job_Description" id="Job_Description">
            </p>

            <input type="submit" value="Submit">
         </form>
      </center> -->
   </body>
</html>
