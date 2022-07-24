<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>CRYBABY</title>

    <style>
      body { 
        background-color: #2F363D;
        color: #FFFFFF;
      }

      a {
        color: #2F363D;
        text-decoration: none;
        transition: 0.28s
      }

      /* a:hover {
        color: red;
        transition: 0.28s
      } */

      .card { 
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
        border: none;
      }

      .app_bg {
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-size: cover;
        transition: 0.28s
      }

      .qnap {
        background-image: url('images/qnap_bg.png');
      }

      .radarr {
        background-image: url('images/radarr_bg.png');
      }

      .sonarr {
        background-image: url('images/sonarr_bg.png');
      }

      .transmission {
        background-image: url('images/transmission_bg.png');
      }

      .jackett {
        background-image: url('images/jackett_bg.png');
      }

      .wiki {
        background-image: url('images/wiki_bg.png');
      }

      .plex {
        background-image: url('images/plex_bg.png');
      }

      .app_bg:hover { 
        filter: brightness(80%);
        transition: 0.28s
      }

      .boobs-4 {
        font-size: 4rem;
        font-family: 'Bebas Neue', cursive;
      }

      .boobs-2 {
        font-size: 2rem;
        font-family: 'Bebas Neue', cursive;
      }

      .dockers {
        padding-top: 50px;
        padding-bottom: 50px;
      }


      .crybaby {
        transition: color .3s ease-in-out;
        -moz-transition: color .3s ease-in-out;
        text-decoration: none;
      }

      .crybaby:hover {
        -webkit-animation: zomg 1s infinite;
        animation: zomg 1s infinite;
      }

      @-webkit-keyframes zomg {
        0%, 100% { color: #7ccdea; }
        16%      { color: #0074d9; }
        32%      { color: #2ecc40; }
        48%      { color: #ffdc00; }
        64%      { color: #b10dc9; }
        80%      { color: #ff4136; }
      }
      @keyframes zomg {
        0%, 100% { color: #7ccdea; }
        16%      { color: #0074d9; }
        32%      { color: #2ecc40; }
        48%      { color: #ffdc00; }
        64%      { color: #b10dc9; }
        80%      { color: #ff4136; }
      }

    </style>
  </head>
  <body>
    
    <div class="container">

      <div class="text-center mt-5">
        <h1 class="boobs-4 crybaby">CRYBABY</h1>
        <p class="boobs-2">crybaby.scot</p>
      </div>

      <div class="dockers"> 

        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:4440/">
              <div class="card app_bg qnap">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    QNAP
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:32400/">
              <div class="card app_bg plex">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    PLEX
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:7878/">
              <div class="card app_bg radarr">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    RADARR
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>
  
        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:8989/">
              <div class="card app_bg sonarr">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    SONARR
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:9091/transmission/web/">
              <div class="card app_bg transmission">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    TRANSMISSION
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:9696">
              <div class="card app_bg jackett">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    PROWLARR (Jackett)
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <a class="crybaby" href="http://<?php print($_SERVER['HTTP_HOST']);?>:4441/">
              <div class="card app_bg wiki">
                <div class="card-body">
                  <h1 class="card-title text-center boobs-4" style="margin-top: 50px; margin-bottom: 50px;">
                    WIKI
                  </h1>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>