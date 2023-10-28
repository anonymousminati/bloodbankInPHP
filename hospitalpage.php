<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet"/>
    <title>Hospital/Clinic</title>
    <style>
      * {
        margin:0;
        padding:0;
      }
      body{
        font-family: "Dosis", sans-serif;
        width:100%;
        height:100vh;
        background: url(image/bb2.jpg) no-repeat center;
        background-size: cover;
      }
      .navbar{
        width:300px;
        height:100%;
        background-color:DodgerBlue;
        position:fixed;
        top:0;
        right:-300px;
        display:flex;
        justify-content: center;
        align-items: center;
        transition: right 0.8s cubic-bezier(1, 0, 0, 1);
      }
      .change{
        right:0;
      }

      .hamburger-menu{
        width:35px;
        height:30px;
        
        position:fixed;
        top:50px;
        right:50px;
        cursor:pointer;
        display:flex;
        flex-direction: column;
        justify-content: space-around;
      }

      .line{
        width:100%;
        height:3px;
        background-color:blue;
        transition: all 0.8s;

      }

      .change .line-1{
        transform:rotateZ(-405deg) translate(-8px, 6px);
      }
      .change .line-2{
        opacity:0;
      }
       .change .line-3{
        transform:rotateZ(405deg) translate(-8px, -6px);
      }

      .nav-list{
        text-align:left;

      }

      .nav-item{
        list-style: none;
        margin:25px;
      }

      .nav-link{
        text-decoration: none;
        font-size: 22px;
        color: #eee;
        font-weight:500;
        letter-spacing: 1px;
        text-transform: uppercase;
        position:relative;
        padding:3px 0;
      }

      .nav-link::before,
      .nav-link::after{
        content: "";
        width:100%;
        height:2px;
        background-color: lightblue;
        position:absolute;
        right:0;
        transform:scalex(0);
        transition:transform 0.5s;
      }
      .nav-link::after{
        bottom:0;
        transform-origin:right;
      }
      .nav-link::before{
        top:0;
        transform-origin:left;
      }
      .nav-link:hover::before,
      .nav-link:hover::after{
        transform: scalex(1);
      }
      .hamburger-menu{
        margin-top: -2rem;
      }
    </style>

  </head>
  <body>
    <nav>
      <div class="container">
        <h1 style="padding-block:1rem; font-size: 35px; background-color:#d5f4e6;text-align: center;">Hospital/Clinic Dashboard</h1>
      </div>
    </nav>
      <div class="container">
      <nav class="navbar">
        <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="hprofile.php" class="nav-link">My Account</a>
          </li>
           <li class="nav-item">
            <a href="bloodinfo.php" class="nav-link">Stock of Blood</a>
          </li>
           <li class="nav-item">
            <a href="bloodrequest.php" class="nav-link">Blood requests</a>
          </li>
           <li class="nav-item">
            <a href="deleteit.php" class="nav-link">Need blood</a>
          </li>
           <li class="nav-item">
            <a href="sentrequestd.php" class="nav-link">Status of your Blood request</a>
          </li>
           <li class="nav-item">
            <a href="logout.php" class="nav-link">LogOut</a>
          </li>
        </ul>
     </nav>
    </div>
    <script src="script.js"></script>
  </body>
</html>