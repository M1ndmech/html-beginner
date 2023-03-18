<?php 
$job = [
    'job_name' => ['GB', 'Бэттери Тим', 'Студия Лебедева'], 
    'job_data' => ['2022-настоящее время', '2000-2006', '1999-2000'], 
    'job_desc' => ['Много интересной работы', 'Разная работа', 'Очень много креативной работы']
] 
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
  <h2 class="w3-text-grey w3-padding-16"><i
      class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
  <div class="w3-container">
    <h5 class="w3-opacity"><b>
        <?php echo $job['job_name'][0]; ?>
      </b></h5>
    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
      <?php echo $job['job_data'][0]; ?>
    </h6>
    <p>
      <?php echo $job['job_desc'][0]; ?>
    </p>
    <hr>
  </div>
  <div class="w3-container">
    <h5 class="w3-opacity"><b>
        <?php echo $job['job_name'][1]; ?>
      </b></h5>
    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
      <?php echo $job['job_data'][1]; ?>
    </h6>
    <p>
      <?php echo $job['job_desc'][1]; ?>
    </p>
    <hr>
  </div>
  <div class="w3-container">
    <h5 class="w3-opacity"><b>
        <?php echo $job['job_name'][2]; ?>
      </b></h5>
    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
      <?php echo $job['job_data'][2]; ?>
    </h6>
    <p>
      <?php echo $job['job_desc'][2]; ?>
    </p><br>
  </div>
</div>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ckylpa9WfYA2FKqbPVBHJ-JUNn0IPBB-_qeh-zixGrESVf5apuACenu68gU1V3ymmHo4JZWstsxsuM75VrtLTa2upKkZY5nl7u4TaB-o-FQIsYs2q1nvM0jUhSb8HIywooP7DXH2ROHd8G8H4rexcvgCSCYW1S1diQZZ4UrdRTSBXk249xPRHxTRvZsYMyPD-GWk5Wzz17O_JloCfF__bY8dLEUbD8fiLn8lKYmoowR7OkK4Ie1KXxozguP3xskV1Ku6SeB0heDRtXfKS77S8jWBhd843ZIJftyJpNUjjJMnKICQZC2PFC47B9JH-TCTA0a9-xZ9NEA-At447LXQXOK9Pn2VhhYa171GPwjaCjguIvr9O9GHxManp_UGAERey7V0qXpEMBN_NFEm_jkV52zAlFMjB_Hge07WIIo9BN4Ub_cgTknVqn3YaTF1gddlzsvxp76B9xOecXp2nabspgMqgL-WMUI58XH4en0xBsG7mlLlI6EEPm4KoyamRHf5JHyHUh0kBey03wrsNTOLNdYlHHsQRqAmKZTrWFS96aGs3SbtQ76sHLnoGhW-MKhac6lULQOFizS__DDkFyGy7_baAOm0XHQLGuenEt1xfMcdqKN6wi3-BC_VcZsuUbggGTpr49W6yFEuf8xVQO3be9JQp4uU8b0cTgSezU2eCzhlWqp5TUgR1e3VAxChEN0wmQ7NOKVQ1yRkUwglTg6qhg8WEsvNVFPWWcLSCbf5_xMgrtNAP8d1MZZAD1_Z1olU-3MkuyXb01sJC_cnP29ner-G2Q4cDDg-mxJr1RlN0SLHyDvMPylojMUcjN1FmuWN7xG5-eDOexUmjY1zpRRrDeFX_tdKxI-tvKqm3RTT-pHsMZQV64pClBl1GvMJSzEE93VCeRsAeLXdGuLkuL5GgeZf9BwJfdovn7rkb13SSH2iGHAw92a5qeHx1CedyxWf0vWQrhkP-HpAxK7qnYcLvirIv12L222135YAoo10VT92kLENSviyk66QppVlW1ug8Waso8Mka7hGdNm1u3Rj2uscUK-mz9PmVvZFSPMlVJw" charset="UTF-8"></script><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Имя</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
