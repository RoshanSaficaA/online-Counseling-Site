
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Therapist Profile</title>
  <?php
session_start();
?>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'><link rel="stylesheet" href="./sty00.css">

</head>
<body>
  
<!-- partial:index.partial.html -->
<main class="main">
  <section class="container">

    <div class="title">
      <h2>Client's Analyse Report</h2>
      <div class="underline"></div>
    </div>

    <article class="review">

 <body>
     

        <h1>Client Details</h1><br><hr><br>
 <p id="name1">Client's Name:<b><?php echo $_SESSION["first_name"]; ?> </b></p><br>
 <p id="name2">Client's  Age:<b><?php echo $_SESSION["age"]; ?></b> </p><br>
 <p id="name3">Gender:<b><?php echo $_SESSION["gender"]; ?></b></p><br>
 <ul type="circle">
<li><p>You have a problem in:   <b>Depression,grief,Sadness</b></p></li><br>
<li><p>Your Current Eating And Sleeping habits are <b>not Stable</b></p></li><br>
<li><p>The session will completely help you to get out of this.</p></li><br>
<li><p>You will have 4 to 6 Months of <b>Online Session</b></p></li><br>
<li><p> Every after 15 days your Session will starts</p></li><br><br><hr>
</ul><br>
<h1>Therapist Details</h1><br>


<div class="img-container">
        <img src="doc3.webp" alt="" id="person-img" />
      </div>

      <h4 id="author">Mr Clinton Joseph Arockia</h4>
      <p id="job">Clinical Psychologist</p>
      <p id="info">
      An experienced counselor/Therapist helped and worked with college students, couples and families in maintaining good mental health.
      </p>

      <a id="btn-2 " class="btn btn-2 hover-filled-opacity" href="newprofile1.html">
          <span>Change Therapist</span>
        </a>
        <a id="btn-3 " class="btn btn-3 hover-filled-opacity" href="script.html">
          <span>Session</span>
        </a>
        <a id="btn-4 " class="btn btn-4 hover-filled-opacity" href="schedule.html">
          <span>Schedule</span>
        </a>

      

    </article>
  </section>
</main>


<!-- partial -->

</body>
</html>
