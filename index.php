<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dale Techie Schedule</title>
  <link rel="icon" type="image/x-icon" href="img/305577716_840872873951427_1496390755584584719_n-modified.png">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/hero.css">
  <link rel="stylesheet" href="css/sec2_orig.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- NAVIGATION BAR -->
  <nav>
    <div class="left">
      <a href="#home"><img src="img/305577716_840872873951427_1496390755584584719_n.jpg" alt=""></a>
      <a href="#home">
        <p>Dale Techie - Computer Repair</p>
      </a>
    </div>
    <div class="right">
      <ul>
        <li class="home active"><a href="#home">Home</a></li>
        <li class="services"><a href="#services">Services</a></li>
        <li class="contact us"><a href="#contact">Contact Us</a></li>
        <li><a class="schedule" href="schedule.php">Schedule Now</a></li>
        <a href="login.php"><svg class="admin_logo" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
            <path d="M26.5201 30.94V35.36C23.0033 35.36 19.6306 36.7571 17.1439 39.2438C14.6571 41.7305 13.2601 45.1033 13.2601 48.62H8.84009C8.84009 43.931 10.7028 39.434 14.0184 36.1184C17.3341 32.8027 21.8311 30.94 26.5201 30.94V30.94ZM26.5201 28.73C19.1939 28.73 13.2601 22.7962 13.2601 15.47C13.2601 8.14387 19.1939 2.21002 26.5201 2.21002C33.8462 2.21002 39.7801 8.14387 39.7801 15.47C39.7801 22.7962 33.8462 28.73 26.5201 28.73ZM26.5201 24.31C31.4042 24.31 35.3601 20.3541 35.3601 15.47C35.3601 10.5859 31.4042 6.63002 26.5201 6.63002C21.636 6.63002 17.6801 10.5859 17.6801 15.47C17.6801 20.3541 21.636 24.31 26.5201 24.31ZM46.4101 37.57H48.6201V48.62H30.9401V37.57H33.1501V35.36C33.1501 33.6016 33.8486 31.9153 35.092 30.6719C36.3353 29.4285 38.0217 28.73 39.7801 28.73C41.5385 28.73 43.2248 29.4285 44.4682 30.6719C45.7116 31.9153 46.4101 33.6016 46.4101 35.36V37.57ZM41.9901 37.57V35.36C41.9901 34.7739 41.7573 34.2118 41.3428 33.7973C40.9283 33.3829 40.3662 33.15 39.7801 33.15C39.194 33.15 38.6318 33.3829 38.2174 33.7973C37.8029 34.2118 37.5701 34.7739 37.5701 35.36V37.57H41.9901Z" />
          </svg>
        </a>
      </ul>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero_section" id="home">
    <img src="img/christian-wiediger-Htfy7TaDBgo-unsplash.jpg">
    <div class="hero">
      <p class="name">DALE TECHIE - COMPUTER REPAIR</p>
      <p class="do">SCHEDULER</p>
      <div class="btn">
        <a href="#services"><button class="services-btn">Services ></button></a>
        <a href="schedule.php"><button class="sched-btn">Book for Schedule Now</button></a>
      </div>
    </div>
  </section>

  <!-- OUR SERVICES -->
  <section class="services_sec" id="services"><br><br><br>
    <h1>SERVICES</h1>
    <div class="services_section">

      <!-- HARDWARE SECTION -->
      <div class="hardware">
        <div class="name">
          <div class="image_container">
            <div class="img_container">
            </div>
            <p class="services">SERVICES OFFERED</p>
            <div class="services_container">
              <div>
                <ul>
                  <li>&#10004; Reprogram/Reformat</li>
                  <li>&#10004; Troubleshoot</li>
                  <li>&#10004; Hardware/Parts Replacement</li>
                  <li>&#10004; Networking</li>
                  <li>&#10004; LAN Cabling</li>
                </ul>
              </div>
              <div>
                <ul>
                  <li>&#10004; Upgrades</li>
                  <li>&#10004; PC Full Cleaning</li>
                  <li>&#10004; Virus Removal</li>
                  <li>&#10004; Data Recovery & Back-Up</li>
                  <li>&#10004; Software Download</li>
                </ul>
              </div>
            </div>
          </div>
  </section><br><br><br><br>
  <form method="post" action="message.php">
    <textarea name="message"></textarea>
    <input type="submit">
  </form>

  <!-- FOURTH SECTION -->
  <!-- <form action="mailto: jameslorenzo161001@gmail.com">
        First Name:<br>
        <input type="text" name="firstname" 
              placeholder="First Name"><br><br>
        Last Name:<br>
        <input type="text" name="lastname" 
              placeholder="Last Name"><br><br>
        Message:<br>
        <input type="textarea" name="message" 
            rows="10" cols="30" 
            placeholder="Enter your message">
        <br><br>
        <input type="submit" value="Send Email">
      </form> -->

  <section class="message_section" id="contact">
    <div class="inputs">
      <h1>Contact Us</h1>
      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name">
      <input type="text" placeholder="Email">
      <textarea placeholder="Message"></textarea>
      <button>Send</button>
    </div>
    <div class="mapouter">
      <div class="mapouter">
        <div class="mapouter">
          <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=700&amp;height=450&amp;hl=en&amp;q=DW8CGZ Talungon Dr, Zamboanga, Zamboanga del Sur&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/word-counter">Word Counter</a></div>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                width: 700px;
                height: 450px;
              }

              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 700px;
                height: 450px;
              }

              .gmap_iframe {
                width: 700px !important;
                height: 450px !important;
              }
            </style>
          </div>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              width: 700px;
              height: 430px;
            }

            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              width: 700px;
              height: 430px;
            }

            .gmap_iframe {
              width: 700px !important;
              height: 430px !important;
            }
          </style>
        </div>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            width: 600px;
            height: 400px;
          }

          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 600px;
            height: 400px;
          }

          .gmap_iframe {
            width: 600px !important;
            height: 400px !important;
          }
        </style>
      </div>
      <style>
        .mapouter {
          position: relative;
          text-align: right;
          width: 600px;
          height: 400px;
        }

        .gmap_canvas {
          overflow: hidden;
          background: none !important;
          width: 600px;
          height: 400px;
        }

        .gmap_iframe {
          width: 600px !important;
          height: 400px !important;
        }
      </style>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <footer>
    <div class="footer_f">
      <p class="footer_header">CONTACT</p>
      <p>Street: Governor Ramos Aveneu</p>
      <p>Municipality: Talungon, San Roque</p>
      <p>City: Zamboanga</p>
      <p>Contact: 09059182317</p>
    </div>
    <div class="footer_s">
      <p class="footer_header">MENU</p>
      <p><a href="#home">Home</a></p>
      <p><a href="#services">Our Services</a></p>
      <p><a href="#contact">Contact Us</a></p>
      <p><a href="schedule.php">Schedule</a></p>
    </div>
    <div class="copyright">
      <p>&#169; 2022 Copyright Dale Techie Computer Repair | All Right Reserved</p>
    </div>
  </footer>
  </div>







  <!-- BACKGROUND IMAGE -->
  <!-- <img class="bg" src="img/christian-wiediger-Htfy7TaDBgo-unsplash.jpg" alt=""> -->

  <!-- SCRIPT FOR NAVIGATION BAR BUTTONS -->
  <script>
    // var header = document.getElementById("nav");
    // var btns = header.getElementsByClassName("btn");
    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function() {
    //   var current = document.getElementsByClassName("active");
    //   current[0].className = current[0].className.replace(" active", "");
    //   this.className += " active";
    //   });
    // }

    //   window.onscroll = () => {
    //   var current = "";

    //   sections.forEach((section) => {
    //     const sectionTop = section.offsetTop;
    //     if (pageYOffset >= sectionTop ) {
    //       current = section.getAttribute("id"); }
    //   });

    //   navLi.forEach((li) => {
    //     li.classList.remove("active");
    //     if (li.classList.contains(current)) {
    //       li.classList.add("active");
    //     }
    //   });
    // };

    const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll("nav .right ul li");
    window.onscroll = () => {
      var current = "";

      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop) {
          current = section.getAttribute("id");
        }
      });

      navLi.forEach((li) => {
        li.classList.remove("active");
        if (li.classList.contains(current)) {
          li.classList.add("active");
        }
      });
    };

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>