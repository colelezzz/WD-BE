<?php include("process.php") ?>
<!DOCTYPE html>
<html>

<head>
  <title>Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="../images/logo.png">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
      margin-bottom: 12px
    }

    .bgimg {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url('images/insideout.jpg');
      min-height: 100%;
    }
  </style>
</head>

<body>

  <!-- Sidebar with image -->
  <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
    <div class="bgimg"></div>
  </nav>

  <!-- Hidden Sidebar (reveals when clicked on menu icon)-->
  <nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2"
    id="mySidebar">
    <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright"
      style="padding:0 12px;">
      <i class="fa fa-remove"></i>
    </a>
    <div class="w3-bar-block w3-center">
      <a href="./index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
      <a href="#bonding" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Bonding
        Island</a>
      <a href="#pawfect" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Pawfect Love
        Island</a>
      <a href="#adventure" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Adventure
        Island</a>
      <a href="#childhood" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Childhood
        Island</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="w3-main w3-padding-large" style="margin-left:40%">

    <!-- Menu icon to open sidebar -->
    <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
      onclick="openNav()"><i class="fa fa-bars"></i></span>

    <!-- Header -->
    <header class="w3-container w3-center"
      style="padding:128px 16px; background-image: url('images/insideoutbg.jpg'); background-size: cover; background-position: center;"
      id="home">
      <h1 class="w3-jumbo" style="font-weight: bolder;">Islands of Personality</h1>
      <p style="background-color: black; color: white; padding: 10px; display: inline-block;"> Where the pieces of your
        personality come to life!</p>
    </header>


    <!-- Bonding Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="bonding">
      <?php
      foreach ($islandInformation as $island) {
        if ($island->islandOfPersonalityID == 1) {
          echo "<h2 style='color: " . ($island->color) . ";'>";
          echo "Bonding Island";
          echo "</h2>";
          break;
        }
      }
      ?>

      <?php
      foreach ($islandInformation as $island) {
        if ($island->islandOfPersonalityID == 1) {
          echo "<div style='margin-bottom: 20px;'>";
          echo $island->longDescription;
          echo "</div>";
          break;
        }
      }
      ?>

      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <img src="images/family1.jpg" style="width:100%">
          <p class="w3-wide">Joy Index</p>
          <div class="w3-light-grey" style="width:100%">
            <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:99%">99%</div>
          </div>
          <?php
          foreach ($islandInformation as $island) {
            if ($island->islandContentID == 1) {
              echo "<div style='margin: 10px;'>";
              echo $island->content;
              echo "</div>";
              break;
            }
          }
          ?>
        </div>

        <div class="w3-half">
          <img src="images/friends1.jpg" style="width:100%">
          <p class="w3-wide">Joy Index</p>
          <div class="w3-light-grey" style="width:100%">
            <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:95%">95%</div>
          </div>
          <?php
          foreach ($islandInformation as $island) {
            if ($island->islandContentID == 2) {
              echo "<div style='margin: 10px;'>";
              echo $island->content;
              echo "</div>";
              break;
            }
          }
          ?>
        </div>

        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="images/friends2.jpg" style="width:100%">
            <p class="w3-wide">Joy Index</p>
            <div class="w3-light-grey" style="width:100%">
              <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:95%">93%</div>
            </div>
            <?php
            foreach ($islandInformation as $island) {
              if ($island->islandContentID == 3) {
                echo "<div style='margin: 10px;'>";
                echo $island->content;
                echo "</div>";
                break;
              }
            }
            ?>
          </div>

        </div>
      </div>

      <!-- Pawfect Love Island -->
      <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="pawfect">
        <?php
        foreach ($islandInformation as $island) {
          if ($island->islandOfPersonalityID == 2) {
            echo "<h2 style='color: " . ($island->color) . ";'>";
            echo "Pawfect Love Island";
            echo "</h2>";
            break;
          }
        }
        ?>

        <?php
        foreach ($islandInformation as $island) {
          if ($island->islandOfPersonalityID == 2) {
            echo "<div style='margin-bottom: 20px;'>";
            echo $island->longDescription;
            echo "</div>";
            break;
          }
        }
        ?>

        <div class="w3-container" id="pawfect">
          <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
            <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">LIPPIE</span></h5>
            <img src="images/pet1.jpg"
              style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
              class="w3-margin-top">
            <p class="w3-wide">Joy Index</p>
            <div class="w3-light-grey" style="width:100%">
              <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:97%">97%</div>
            </div>
            <div class="w3-panel w3-leftbar w3-light-grey">
              <i> <?php
              foreach ($islandInformation as $island) {
                if ($island->islandContentID == 4) {
                  echo "<div style='margin: 10px;'>";
                  echo $island->content;
                  echo "</div>";
                  break;
                }
              }
              ?></i>
            </div>
          </div>

          <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
            <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">RIO</span></h5>
            <img src="images/pet2.jpg"
              style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
              class="w3-margin-top">
            <p class="w3-wide">Joy Index</p>
            <div class="w3-light-grey" style="width:100%">
              <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:98%">98%</div>
            </div>
            <div class="w3-panel w3-leftbar w3-light-grey">
              <i><?php
              foreach ($islandInformation as $island) {
                if ($island->islandContentID == 5) {
                  echo "<div style='margin: 10px;'>";
                  echo $island->content;
                  echo "</div>";
                  break;
                }
              }
              ?></i>
            </div>
          </div>

          <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
            <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">GULA</span></h5>
            <img src="images/pet3.jpg"
              style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
              class="w3-margin-top">
            <p class="w3-wide">Sad Index</p>
            <div class="w3-light-grey" style="width:100%">
              <div class="w3-container w3-center w3-padding-small w3-blue" style="width:98%">96%</div>
            </div>
            <div class="w3-panel w3-leftbar w3-light-grey">
              <i><?php
              foreach ($islandInformation as $island) {
                if ($island->islandContentID == 6) {
                  echo "<div style='margin: 10px;'>";
                  echo $island->content;
                  echo "</div>";
                  break;
                }
              }
              ?></i>
            </div>
          </div>

          <!--Adventure Island -->
          <div class="w3-padding-32 w3-content" id="adventure">
            <?php
            foreach ($islandInformation as $island) {
              if ($island->islandOfPersonalityID == 3) {
                echo "<h2 style='color: " . ($island->color) . ";'>";
                echo "Adventure Island";
                echo "</h2>";
                break;
              }
            }
            ?>

            <?php
            foreach ($islandInformation as $island) {
              if ($island->islandOfPersonalityID == 3) {
                echo "<div style='margin-bottom: 20px;'>";
                echo $island->longDescription;
                echo "</div>";
                break;
              }
            }
            ?>

            <div class="w3-row-padding" style="margin:0 -16px">
              <div class="w3-half">
                <img src="images/adventure1.jpg" style="width:100%">
                <p class="w3-wide">Joy Index</p>
                <div class="w3-light-grey" style="width:100%">
                  <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:99%">99%</div>
                </div>
                <?php
                foreach ($islandInformation as $island) {
                  if ($island->islandContentID == 7) {
                    echo "<div style='margin: 10px;'>";
                    echo $island->content;
                    echo "</div>";
                    break;
                  }
                }
                ?>
              </div>

              <div class="w3-half">
                <img src="images/adventure2.jpg" style="width:100%">
                <p class="w3-wide">Joy Index</p>
                <div class="w3-light-grey" style="width:100%">
                  <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:98%">98%</div>
                </div>
                <?php
                foreach ($islandInformation as $island) {
                  if ($island->islandContentID == 8) {
                    echo "<div style='margin: 10px;'>";
                    echo $island->content;
                    echo "</div>";
                    break;
                  }
                }
                ?>
              </div>

              <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                  <img src="images/adventure3.jpg" style="width:100%">
                  <p class="w3-wide">Joy Index</p>
                  <div class="w3-light-grey" style="width:100%">
                    <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:97%">97%</div>
                  </div>
                  <?php
                  foreach ($islandInformation as $island) {
                    if ($island->islandContentID == 9) {
                      echo "<div style='margin: 10px;'>";
                      echo $island->content;
                      echo "</div>";
                      break;
                    }
                  }
                  ?>
                </div>

              </div>
            </div>

            <!-- Childhood Island -->
            <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="childhood">
              <?php
              foreach ($islandInformation as $island) {
                if ($island->islandOfPersonalityID == 4) {
                  echo "<h2 style='color: " . ($island->color) . ";'>";
                  echo "Childhood Island";
                  echo "</h2>";
                  break;
                }
              }
              ?>

              <?php
              foreach ($islandInformation as $island) {
                if ($island->islandOfPersonalityID == 4) {
                  echo "<div style='margin-bottom: 20px;'>";
                  echo $island->longDescription;
                  echo "</div>";
                  break;
                }
              }
              ?>
              <div class="w3-container" id="pawfect">
                <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
                  <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">SELFIE</span></h5>
                  <img src="images/childhood1.jpg"
                    style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
                    class="w3-margin-top">
                  <p class="w3-wide">Joy Index</p>
                  <div class="w3-light-grey" style="width:100%">
                    <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:95%">95%</div>
                  </div>
                  <div class="w3-panel w3-leftbar w3-light-grey">
                    <i><?php
                    foreach ($islandInformation as $island) {
                      if ($island->islandContentID == 10) {
                        echo "<div style='margin: 10px;'>";
                        echo $island->content;
                        echo "</div>";
                        break;
                      }
                    }
                    ?></i>
                  </div>
                </div>

                <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
                  <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">NAILS</span></h5>
                  <img src="images/childhood2.jpg"
                    style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
                    class="w3-margin-top">
                  <p class="w3-wide">Joy Index</p>
                  <div class="w3-light-grey" style="width:100%">
                    <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:98%">98%</div>
                  </div>
                  <div class="w3-panel w3-leftbar w3-light-grey">
                    <i><?php
                    foreach ($islandInformation as $island) {
                      if ($island->islandContentID == 11) {
                        echo "<div style='margin: 10px;'>";
                        echo $island->content;
                        echo "</div>";
                        break;
                      }
                    }
                    ?></i>
                  </div>

                  <div class="w3-content" style="max-width:700px; margin-top: 2rem;">
                    <h5 class="w3-center" style="padding:0;"><span class="w3-tag w3-wide">BESTIES</span></h5>
                    <img src="images/childhood3.jpg"
                      style="width:400px; max-width:1000px; height:300px; display:block; margin: 10px auto;"
                      class="w3-margin-top">
                    <p class="w3-wide">Joy Index</p>
                    <div class="w3-light-grey" style="width:100%">
                      <div class="w3-container w3-center w3-padding-small w3-yellow" style="width:99%">99%</div>
                    </div>
                    <div class="w3-panel w3-leftbar w3-light-grey">
                      <i><?php
                      foreach ($islandInformation as $island) {
                        if ($island->islandContentID == 12) {
                          echo "<div style='margin: 10px;'>";
                          echo $island->content;
                          echo "</div>";
                          break;
                        }
                      }
                      ?></i>
                    </div>
                  </div>

                  <!-- Footer -->
                  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge">
                    <div
                      style="display: flex; justify-content: center; gap: 15px; list-style: none; padding: 0; margin: 0;">
                      <a href="https://x.com/coleenislesss" class="w3-hover-opacity"><i class="bi bi-twitter"></i></a>
                      <a href="https://www.instagram.com/cln.selsi/" class="w3-hover-opacity"><i
                          class="bi bi-instagram"></i></a>
                      <a href="https://www.facebook.com/coleen.isles" class="w3-hover-opacity"><i
                          class="bi bi-facebook"></i></a>
                      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=islesleen@gmail.com" target="_blank"
                        class="w3-hover-opacity">
                        <i class="bi bi-envelope"></i>
                      </a>
                    </div>
                    <p class="w3-medium"> © 2024 Isles, Inc</p>
                  </footer>

                </div>

                <script>
                  function openNav() {
                    document.getElementById("mySidebar").style.width = "60%";
                    document.getElementById("mySidebar").style.display = "block";
                  }

                  function closeNav() {
                    document.getElementById("mySidebar").style.display = "none";
                  }
                </script>

</body>

</html>