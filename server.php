<?php

if (isset($_POST['submit'])) {

  include 'config.php';

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $message =  mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO `messages`(`name`, `message`) VALUES ('{$name}','{$message}')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Message Sent');</script>";
  } else {
    echo "<script>alert('Message Send Failed, Try again later!!');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ashish Regmi - Portfolio</title>
  <link rel="icon" type="image/x-icon" href="./images/pp.jpg">
  <link rel="stylesheet" href="index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <style>
    .nav-item {
      color: white;
      display: block;
      /* margin-left: 50px; */
    }

    .nav-item-bio {
      color: white;
      text-decoration: none;
      /* margin-left: 50px; */
    }

    @media screen and (max-device-width: 640px) {
      .gfg-div {
        width: 400px;
        height: 200px;
        background-color: chartreuse;
        color: black;
      }
    }

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: white;
      color: black;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
</head>

<body style="background-color: #031927">
  <button onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>
  <header>
    <nav class="navbar">
      <div class="container p-4">
        <a class="navbar-brand" style="color: white; font-size: 30px;"><i>Ashish Regmi</i></a>
        <ul class="p-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b><i>Email: </i></b>ninjaversusbear7@gmail.com</a>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b><i>Contact: </i></b>+977 9860560138</a>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b><i>Address: </i></b>Mid-Baneshwor, Kathmandu, Nepal 44600</a>
        </ul>
      </div>
    </nav>
  </header>

  <main class="mb-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col-sm mb-2">
          <p class="text-white text-start" style="font-size: 30px;">Hi!</p>
          <h1 class="name-title text-white text-start" style="font-size: 70px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">I'm Ashish Regmi</h1>
          <h3 class="text-white" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Front-End Web-Developer</h3>
          <p class="text-white mb-5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: italic;">Self-motivated member seeking to work as a Web-Developer where I can use my skills and understanding of web design to fulfill client demands and surpass their expectations. Highly skilled in Collaboration thinking and Supportive.</p>
          <hr class="text-white">
          <h4 class="text-white">Let's Connect</h4>
          <p class="text-white" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: italic;">I'm always open to new opportunities and collaborations. Whether you have a project in mind or just want to chat about the latest developments in web technology, feel free to get in touch.</p>
          <hr class="text-white">
          <p class="text-white" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: italic;">Social Accounts you can get in touch with me:</p>
          <ul>
            <li class="nav-item-bio">
              <a class="text-white" style="text-decoration: none;" href="https://www.linkedin.com/in/ashish-regmi-5b9a02228/">Linkedin</a>
            </li>
            <li class="nav-item-bio">
              <a class="text-white" style="text-decoration: none;" href="https://www.facebook.com/ashish.regmi.142/">Facebook</a>
            </li>
            <li class="nav-item-bio">
              <a class="text-white" style="text-decoration: none;" href="https://www.instagram.com/ashishregmi1998/">Instagram</a>
            </li>
            <li class="nav-item-bio">
              <a class="text-white" style="text-decoration: none;" href=" https://github.com/ninjaversusbear">Github</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <img class="image-profile w-100" src="./images/pppngcrop.png" alt="">
        </div>
      </div>
    </div>
    <div class="container p-5" style="background-color: #0b1e29">
      <div class="row">
        <div class="col-sm">
          <h3 class="text-white" style="text-decoration: underline; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 30px;">Work Expirence</h3>
          <p class="text-white">January, 2022 - February, 2023</p>
          <h5 class="text-white">Web-Developer</h5>
          <p class="text-white">Horizon International <br> Lainchaur, Kathmandu <br>Worked as a Web-Developer creating different UI's as per the client's requirements.</p>
        </div>
        <div class="col">
          <h3 class="text-white" style="text-decoration: underline; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 40px;">Education</h3>
          <p class="text-white"><b>Completed</b><br>SLC - Valley View English School</p>
          <p class="text-white"><b>Completed</b><br>Global College of Management +2</p>
          <p class="text-white"><b>Running</b><br><b>(Undergraduate (Bachelor)) - Bcs.It</b><br>ISMT, University of Sunderland, United Kingdom</p>
        </div>
      </div>
    </div>
    <div class="container p-5" style="background-color: #0b1e29">
      <div class="row">
        <div class="col-sm">
          <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Training & Certificate</h3>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/certificate.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/webcert.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/broadwayc++.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
        </div>
        <br><br>
        <div class="row mb-5">
          <div class="col-sm">
            <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Job Preference</h3>
            <p class="text-white"><b>Looking for: </b>Mid-level<br><b>Job Categories:</b> Information Technology <br><b>Available for: </b>Full Time <br><b>Expected Salary: </b>(Above) NRs 35,000.00 (Monthly)</p><br>
            <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Language</h3>
            <p class="text-white"><b>Chinese (Avg: 1.5)</b> Reading - 1, Speaking - 2, Writing - 1, Listening - 2<br><b>Japanese (Avg: 2.25)</b> Reading - 1, Speaking - 3, Writing - 2, Listening - 3<br><b>Nepali(Avg: 5.0)</b> Reading - 5, Speaking - 5, Writing - 5, Listening - 5<br><b>English (Avg: 5.0)</b> Reading - 5, Speaking - 5, Writing - 5, Listening - 5</p>
          </div>
          <div class="col">
            <div class="col">
              <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Education</h3>
              <p class="text-white"><b>Running</b><br><b>(Undergraduate (Bachelor)) - Bcs.It</b><br>ISMT, University of Sunderland, United Kingdom</p>
            </div>
          </div>
        </div>
        <div class="container projects">
          <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">My Projects</h3><br>
          <div class="card mb-3">
            <img src="./images/capitallawacademy.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Capital Law Academy</h5>
              <p class="card-text">Capital Law Academy is one of the leading institute for B.A.LL.B and LL.B preparation in Nepal established in 2017 AD. It's aim is to make excellent result in entrance examination by bestowing best teaching methods, multidisciplinary and rigorous approach. They are regularly conducting the classes for the entrance preparation of B.A.LL.B and LL.B.</p>
            </div>
          </div>
          <div class="card mb-3">
            <img src="./images/street medical.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Street Medical Programme</h5>
              <p class="card-text">Street Medical Programme includes health and social services developed specifically to address the unique needs and circumstances of the unsheltered homeless delivered directly to them in their own enviromnent.</p>
            </div>
          </div>
          <div class="card mb-3">
            <img src="./images/multivendor-1.png" class="card-img-top" alt="...">
          </div>
          <div class="card mb-3">
            <img src="./images/multi-vendor-2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MultiVendor Online E-Commerce Shopping</h5>
              <p class="card-text">Multi-vendor website or store is a platform for third-party vendors to sell in one place. In simple terms, it is a big shop that contains various small shops that are run by individual sellers.</p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container">
        <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Send Message</h3><br>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="mb-3">
            <label class="text-white" for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label class="text-white" for="exampleInputPassword1" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-success">Send Message</button>
        </form>
        <br><br><br>
      </div>
      <div class="container">
        <h3 class="text-white" style="text-decoration: underline; font-size: 30px;">Messages</h3><br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            
              include 'config.php';

              $sql = "SELECT * FROM `messages` ORDER BY id DESC";
              $result = mysqli_query($conn, $sql) or die("ERROR: Query Failed..");

              if(mysqli_num_rows($result) > 0){
            ?>
            <tr>
              <?php while($row = mysqli_fetch_assoc($result)){ ?>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['message']; ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
        <?php }?>
      </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>
</html>



Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam recusandae necessitatibus deserunt. Soluta ipsum quia fuga, incidunt a sint quibusdam quo aliquid aspernatur provident atque suscipit distinctio, sit consequuntur quae blanditiis in culpa, commodi non similique ex? Nisi, tempore labore. Ab, fuga dignissimos omnis eaque doloribus aut porro saepe sit voluptates. Officia sint in quae rem vitae facere est sed, earum nam! Pariatur cupiditate delectus modi doloremque ut officia nulla consequuntur sint eum dolore, numquam suscipit ducimus tenetur quae nihil eos exercitationem cumque voluptatibus ex. Explicabo cum et exercitationem, sint voluptatem eos omnis quisquam rerum obcaecati, dolorum sit eaque tempora?