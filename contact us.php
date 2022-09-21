<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen and (max-width: 1170px)" href="Assests/CSS/phone.css">
  <style>
    /* Header/logo Title */
    .header {
      padding: 80px;
      text-align: center;
      background-image: url("bg.jpg");
      color: white;
    }

    footer {
      margin: auto;
      background: black;
      color: white;
      padding: 9px 20px;
      text-align: center;

    }


    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }

    /* CSS Variables */
    :root {
      --navbar-height: 59px;
    }

    #navbar {
      display: flex;
      align-items: center;
      position: sticky;
      top: 0px;
    }

    #navbar::before {
      content: "";
      background-color: #0c0f014d;
      position: absolute;
      top: 0px;
      left: 0px;
      height: 100%;
      width: 100%;
      z-index: -1;
      opacity: 0.7;
    }

    /* Navigation Bar: Logo and Image */
    /* #logo {
            margin: 10px 34px;
        }

        #logo img {
            height: 100px;
            margin: -7px -16px;
            border-radius: 15px;
        } */


    /* Navigation Bar: List Styling */

    #navbar ul {
      display: flex;
      font-family: Verdana, Geneva, Tahoma, sans-serif;

    }

    #navbar ul li {
      list-style: none;
      font-size: 1.2rem;
    }

    #navbar ul li a {
      color: white;
      display: block;
      padding: 3px 22px;
      border-radius: 20px;
      text-decoration: none;
    }

    #navbar ul li a:hover {
      color: black;
      background-color: white;
    }

    a {
      text-decoration: none;
      font-weight: bold;
      /* display: flex; */
      /* justify-content: center; */
      /* align-items: center; */
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      margin-left: auto;
      margin-right: auto;
      max-width: 1000px;
      padding: 10px;
    }

    * {
      box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 0px;

    }

    /* Create two columns that float next to eachother */
    .column {
      float: left;
      width: 50%;
      margin-top: 6px;
      padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .column,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
      .row {
        flex-direction: column;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }

    /* Desktops */
    @media only screen and (max-width : 992px) {

      html,
      body {
        /* background-image: url('../../p1.png'); */
        height: 100%;
        font-size: 16px;
      }

      navbar {
        font-family: "Open Sans", sans-serif;

        height: 100%;
        font-size: 20px;
      }



    }

    /* Tablets */
    @media only screen and (max-width : 768px) {

      html,
      body {
        font-family: "Open Sans", sans-serif;

        height: 100%;
        font-size: 12px;

      }

      navbar {
        font-family: "Open Sans", sans-serif;

        font-size: 20px;
      }




    }

    /* Phones */
    @media only screen and (max-width : 480px) {

      html,
      body {
        font-family: "Open Sans", sans-serif;

        height: 100%;
        font-size: 10px;

      }

      navbar {
        font-family: "Open Sans", sans-serif;
        height: 100%;
        font-size: 20px;
      }


    }

    /* Custom */
    @media only screen and (max-width : 320px) {

      html,
      body {
        /* background-image: url('../Images/p1.png'); */
        font-family: "Open Sans", sans-serif;
        height: 100%;
        font-size: 8px;
      }

      navbar {
        font-family: "Open Sans", sans-serif;
        height: 100%;
        font-size: 20px;
      }



    }
  </style>
</head>

<body>
  <div class="header">
    <!-- <img src="Assests/Images/Roomlogo.jpg" -->
    <h1>Movie Reviewers</h1>
    <p style="font-weight: bold;">"Lets us choose your favourite movie"</p>
  </div>

  <nav id="navbar">
    <!-- <div id="logo">
      <img src="Assests/Images/logo.jpg" alt="logo">
    </div> -->
    <ul>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="Store.html">Store</a></li>
      <li class="item"><a href="Movies.html">Movies</a></li>
      <li class="item"><a href="Contact us.php">Contact Us</a></li>
    </ul>
  </nav>

  <br>

  <h2>Need More suggestion</h2>
  <p>Check out more movies</p>

  <div class="container">
    <div style="text-align:center"><br><br>
      <h2>Contact Us</h2>
      <p>Send us Your favourite Genre and We'll send you movie related to that</p>
    </div>

    <div class="row">
      <div class="column">
        <img src="Assests/Images/bg.jpg" style="width:100%">
        <form action="file.php" method="post">
          <br>
          <label for="fname">Full Name:</label><br>
          <input type="text" id="fname" name="fname" placeholder="Enter you Name" required><br>
          <label for="lname">Email Id:</label><br>
          <input type="text" id="lname" name="lname" placeholder="Enter you E-mail id" required><br>

          <br>
          <label for="nmae">Category:</label><br>
          <select name="dropdown">
            <option value="Latest" selected>Latest</option>
            <option value="Action">Action</option>
            <option value="Comedies">Comedies</option>
            <option value="Crime">Crime</option>
            <option value="Dramas">Dramas</option>
            <option value="Horror">Horror</option>
            <option value="Mystery">Mystery</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Thriller">Thriller</option>
          </select><br>

          Tell us more about what kind you want to watch<br>
          <textarea rows="5" cols="50" name="description" placeholder="Description....">

    </textarea><br>
          <br>
          <input type="submit" name="submit" value="Submit" />

        </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="center">
      Copyright &copy; www.MovieReviewers.com. All rights reserved!
    </div>
  </footer>
  </div>

</body>

</html>