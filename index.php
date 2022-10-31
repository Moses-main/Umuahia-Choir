<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo/main-logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/css/choir.css">
    <title>Home</title>
    <?php
    require_once("mail.php");
    ?>
</head>
<body id="up">

    <!-- to trigger when js is deactivated -->
    <noscript>
        <meta http-equiv="refresh" content="0; url=blank.html">
        <!-- window.location.href = "thank_you.php"; -->
    
    </noscript>
    



    <!-- The navigation bar -->

    <div id="nav-box" >
        <nav id="navigation">
            <a href="#" class="main" >Home</a>
            <a href="/html/library.html" class="main" ><span class="e-icon">&#8495;</span> - Library</a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCRVcENPCUkeHOHdjpb3ZqiA">Youtube</a>
            <a href="#contact">Contact Us</a>
            <!-- <form action=""> -->
                <!-- <input id="searchbox" class="search" type="search" placeholder="&#x1F50E;"> -->
            <!-- </form> -->
        </nav>
        

        <div id="toggle" class="container">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <nav id="nav2">
            <a id="content" href="#" class="main" >Home</a>
            <a href="/html/library.html" class="main" ><span class="e-icon">&#8495;</span> - Library</a>
            <a id="content" target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/channel/UCRVcENPCUkeHOHdjpb3ZqiA">Youtube</a>
            <a id="content" href="#contact">Contact Us</a>
            <!-- <form id="content" action=""> -->
                <!-- <input id="searchbox" class="search" type="search" placeholder="&#x1F50E;"> -->
            <!-- </form> -->
        </nav>    
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

<!-- The slide show -->
    <div class="slideshow-container">


        <div class="mySlides fade">
            <img class="slide-image" src="/images/umuahia-sisters-at-awo.jpg" alt="slide-show">
            <!-- <div class="text">Caption Three</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/voice-on-mouau-uniform.jpg" alt="slide-show">
            <!-- <div class="text">Caption four</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/nmachi-and-emerem-at-mouau-concert.jpg" alt="slide-show">
            <!-- <div class="text">Caption five</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/umuahia-diocese-at-ministers-conference.jpg" alt="slide-show">
            <!-- <div class="text">Caption two</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/helen-with-other-sisters.jpg" alt="slide-show">
            <!-- <div class="text">Caption six</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/3-string-players.jpg" alt="slide-show">
            <!-- <div class="text">Caption seven</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/Bro Ifeanyi conduct.jpg" alt="slide-show">
            <!-- <div class="text">Caption eight</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/sisters-at-awo.jpg" alt="slide-show">
            <!-- <div class="text">Caption ten</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/orchestra/orchestra-at-august-visit.jpg" alt="slide-show">
            <!-- <div class="text">Caption eleven</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/orchestra/semi-youth-at-august-visit.jpg" alt="slide-show">
            <!-- <div class="text">Caption twelve</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/orchestra/semi-youth-orchestra-at-august-visit.jpg" alt="slide-show">
            <!-- <div class="text">Caption thirteen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/semiyouth/semi-youth-vocalists.jpg" alt="slide-show">
            <!-- <div class="text">Caption fourteen</div> -->
        </div>

        <!-- change from here -->

        <div class="mySlides fade">
            <img class="slide-image" src="/images/semi-youth-orchestra.jpg" alt="slide-show">
            <!-- <div class="text">Caption fifteen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/auntie-kelechi-conducting.jpg" alt="slide-show">
            <!-- <div class="text">Caption sixteen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/nmeso-blessing-emerem-blossom.jpg" alt="slide-show">
            <!-- <div class="text">Caption seventeen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-b.jpg" alt="slide-show">
            <!-- <div class="text">Caption eighteen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-c.jpg" alt="slide-show">
            <!-- <div class="text">Caption nineteen</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-d.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-e.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty one</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-f.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty two</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-g.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty three</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-h.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty four</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022-i.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty five</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/ossah-outreach-2022.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty six</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/outreach/victor-nmeso-blossom-blessing-amaka.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty seven</div> -->
        </div>

        <!-- Newly added -->
        <div class="mySlides fade">
            <img class="slide-image" src="/images/five-string-players.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty eight</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/awo-national-program.jpg" alt="slide-show">
            <!-- <div class="text">Caption twenty nine</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/trombone-and-tuba.jpg" alt="slide-show">
            <!-- <div class="text">Caption thirty</div> -->
        </div>

        <div class="mySlides fade">
            <img class="slide-image" src="/images/youth-week.jpg" alt="slide-show">
            <!-- <div class="text">Caption thirty one</div> -->
        </div>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>


  

  <!-- Band Description -->
  <section id="description">
    <h2 class="the-band">UMUAHIA CHOIR</h2>
    <h4 id="band-desc">We love music, we make music and we minister through music</h4>
    <p>The Umuahia Diocesan Choir of the <i class="italic"> Watchman Catholic Charismatic Renewal Movement</i>  is up on the space to provide to the whole world her soul transform, reviving, healing melodies. Futhermore, the choir is here on the space with her <a href="archive.html">resources (orchestrated songs)</a> for anyone to download and make use of.</p>
    
    <p>Never search outside for quality performers and instructors of instruments like: 
        <ul id="instrument-list">
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20violin%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Violin</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20viola%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Viola</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20cello%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Cello</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20trumpet%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Trumpet</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20trombone%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Trombone</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20saxophone%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Saxophone</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20euphonuim%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Euphonuim</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20keyboard%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Piano</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20flute%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Flute</a></li>
            <li><a class="italic" href="https://wa.me/2348039489150?text=Good,%20day%20Sir,%20I%Please%20i%20am20%in%20need%20of%20a%20clarinet%20instructor%20or%20performer.%20Kindly%20brief%20me20with%your%20services.%20Thank%20you%20sir%20?%20">Clarinet</a></li>
        </ul>
    </p>
    <br>
    <br>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Youtube section -->
    <div id="iframe">
        <p id="iframe-logo">
            <a href="#youtube"><img src="/images/SOCIAL MEDIA LOGO/youtube.png" alt="youtube"></a>
        </p>
        <p class="Subscribe-comment">Subscribe and like our youtube channel to get more of our newly released melodies</p>
        <br>
        <br>
        <div id="youtube"></div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- The Embeded youtube vidoes -->
        <div class="video" id="youtube-videos">
            <!-- Moses - love lifted me -->
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/3iBMp-vKE6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Love Lifted Me</p>
            </div>
        </div>
        
        <div class="video" id="youtube-videos">
            <!-- Moses - It Is Well -->
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/l_bXuA1-_iQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">It Is Well</p>
            </div>
        </div>
        
        <div class="video" id="youtube-videos">
            <!-- Moses - I Gave My Life -->
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/cSqFcUJ1r-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">I Gave My Life</p>
            </div>
        </div>
        
        <div class="video" id="youtube-videos">
            <!-- Moses - Jesus keep me near the cross -->
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/8d2XUSfaXm4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jesus keep me near the cross</p>
            </div>
        </div>
        
        <div class="video" id="youtube-videos">
            <!-- Moses - His Eye is on the sparrow -->
            <div class="frame-container">
                <iframe  src="https://www.youtube.com/embed/5OjuQb3t9GE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">His Eye is on the sparrow</p>
            </div>
        </div>
        
        <!-- Jackmira -->
<!-- 
        <div id="youtube-videos">
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/9F1xgngz8w4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira - For your glory (Tasha Cobbs)</p>
            </div>
        </div>

        <div id="youtube-videos">
            <div class="frame-container">
                <iframe  src="https://www.youtube.com/embed/RfE_druJOxs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira - Healing room2 (You riegn)</p>
            </div>
        </div>

        <div id="youtube-videos">
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/SIgCa6aMEkQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira ft Goodnews Chidera - Chimnecherem</p>
            </div>
        </div>

        <div id="youtube-videos">
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/CR0xe9gbAlw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira - Let the whole world bow</p>
            </div>
        </div>

        <div id="youtube-videos">
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/j_8tIzT2WjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira - Grace to go higher</p>
            </div>
        </div>
        
        <div id="youtube-videos">
            <div class="frame-container">
                <iframe src="https://www.youtube.com/embed/-oQEA6fEgw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="iframe-song">Jackmira - Unlimited God</p>
            </div>
        </div>
 -->
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <!-- document section -->
    <div id="document-section">
        <p id="iframe-logo">
            <a href="#documents"><img src="/images/SOCIAL MEDIA LOGO/notebook.png" alt="youtube"></a>
        </p>
        <p class="documents">View and download music resources as well as instrument tutors(e-book)</p>
        <a href="/html/library.html">Click to view full <span class="e-icon">&#8495;</span> - Library <span> &#10149;</span><a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="profile-section">
        <p id="iframe-logo">
            <a href="#member"><img src="/images/SOCIAL MEDIA LOGO/group.png" alt="group"></a>
        </p>
        <p class="profile-comment">Personalities behind the success</p>
    </div>
    <br>
    <br>
    <br>
    <br>

  <!-- Band Members -->
  <section id="member">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <article>
        <p><strong>Music Director</strong></p>
        <br>
      <img id="memberImage" src="images/Pastor Chidi.jpg" alt="Pastor Chidi">
      <p><q class="quote">The worst tragedy on earth is never death but a life that exits as history, without purpose.</q></p>
      <br>
      <p><i class="qualification">The Music Director, Pastor Chidiebere Igbokwe through the leading and inspiration of the Holy Spirit has raised a phenomenal choir which operates from the eastern part of Nigeria.</i></p>
      
      <!-- Modal container -->
      <div id="modal-container">
        <span id="close">×</span>
        <img id="modal" src="/images/Pastor Chidi.jpg" alt="Music Director">
        <p class="modal-title">Pastor Chidiebere Igbokwe</p>
        <p class="modal-title">Music Director</p>
        <br>
      </div>
    </article>

    <article>
        <p><strong>Choir Mistress</strong></p>
        <br>
      <img id="mistressImage" src="images/choir-mistress.jpg" alt="Mama Choir">
      <p><q class="quote">Abuse is inevitable when purpose is not known.</q></p>
      <br>
      <p><i class="qualification">Through the aid of a woman of virtue, the music director have been able to raise, retain and grow the choir. Mrs Kelechi Marshal,through her motherly love, public relation and human management has stood her ground to bring alongside the emergence of the great choir.</i></p>


        <!-- Modal container -->
      <div id="mistress-container">
        <span id="close2">×</span>
        <img id="modal" src="/images/choir-mistress.jpg" alt="Music Director">
        <p class="modal-title">Mrs. Kelechi Marshal</p>
        <p class="modal-title">Choir Mistress</p>
        <br>
      </div>
    </article>

    <article>
        <p><strong>Youth Choir Coordinator</strong></p>
        <br>
      <img id="youthMasterImage" src="images/nnadozie-obinna-on-white.jpg" alt="Bro Obinna">
      <p><q class="quote">It is abysmal to live below the potential and greatness you've been created to be.</q></p>
      <br>
      <p><i class="qualification">Mr. Obinna Nnadozie (prodigy), has fought the battle and has won in raising the young ones through to the highest self they can be. He has laid all musical, spiritual and moral foundation within his reach to produce the great youth of honour of the choir</i></p>


        <!-- Modal container -->
        <div id="youth-container">
            <span id="close3">×</span>
            <img id="modal" src="/images/nnadozie-obinna-on-white.jpg" alt="Music Director">
            <p class="modal-title">Mr. Obinna Nnadozie</p>
            <p class="modal-title">Youth Choirmaster</p>
            <br>
        </div>
    </article>

    <article>
        <p><strong>Youth Choirmistress</strong></p>
        <br>
      <img id="youthMistressImage" src="images/sister-angela.jpg" alt="Bro Obinna">
      <p><q class="quote">It's not about me ... I was created for a purpose and that's the making music for human soul.</q></p>
      <br>
      <p><i class="qualification">Miss Angela Chiamaka Emejuru, the music power-house herself. A renown Violin major and suprano singer. All about her is music.</i></p>


      
        <!-- Modal container -->
        <div id="youthMis-container">
            <span id="close4">×</span>
            <img id="modal" src="/images/sister-angela.jpg" alt="Music Director">
            <p class="modal-title">Miss Angela Emejuru Chiamaka</p>
            <p class="modal-title">Youth Choirmistress</p>
            <br>
        </div>
    </article>


    <article>
        <p><strong>Orchestra Master</strong></p>
        <br>
      <img id="orchestraMasterImage" src="images/ukachukwu-ifeanyi.jpg" alt="Goodluck Ifeanyi">
      <p><q class="quote">Glory rises to God much more from the minstrel.</q></p>
      <br>
      <p><i class="qualification">Mr. Goodluck Ukachukwu Ifeanyi(Ifeco-keys), has has raised a great band of instrumentalist and also headed the orchestra section of the choir. There's nothing as making music with instruments</i></p>


      <!-- Modal container -->
      <div id="orchestra-container">
        <span id="close5">×</span>
        <img id="modal" src="/images/ukachukwu-ifeanyi.jpg" alt="Music Director">
        <p class="modal-title">Mr. Goodluck Ifeanyi Ukachukwu</p>
        <p class="modal-title">Orchestra Master</p>
        <br>
    </div>
    </article>
  </section>
  <br>
  <br>
  <br>
    
  <!-- The comment section -->

  <?php if(isset($smsg)){ ?><script type="text/javascript"> alert('<?php echo $smsg; ?> ') ;
  </script>
   <?php } ?>
  
  <?php if(isset($fmsg)){ ?><script type="text/javascript"> alert('<?php echo $fmsg; ?> ') ;
  </script>
   <?php } ?>
  
    <div id="comment-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <p id="comment-label">Leave a comment here</p>
            <div class="comment-inner-container">
                <textarea  name="usertext" id="textarea" cols="28" rows="10" placeholder="Enter Comment / Message..." required></textarea>
            </div>

            <div id="name-and-mail-address" class="comment-inner-container">
                <input class="form-input" type="text" id="" name="username" required placeholder="First Name">
                <input class="form-input" type="email" placeholder="Email Address" name="usermail" required>
                <input id="submit_button" type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>  

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <!-- Footer -->

  <footer id ="socialPlat" onclick="closeElsewhere()">
    <div class="footer-inside">
        <div class="footer-content">
         <span>INTEGRATION</span>
            <a href="https://wa.me/2348039489150">Whatsapp</a>
            <a id="content" target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/channel/UCRVcENPCUkeHOHdjpb3ZqiA">Youtube</a>
            <a href="#">&nbsp;</a>
            <a href="#">&nbsp;</a>
            <!-- <a href="http://www.instagram.com">Instagram</a> -->
            <!-- <a href="http://www.twitter.com">Twitter</a> -->
            <!-- <a id="content" target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/channel/UCRVcENPCUkeHOHdjpb3ZqiA">Youtube</a> -->
            <!-- <a href="http://www.wa.me/08039489150">Whatsapp</a> -->
        </div>

        <div class="footer-content">
            <span>RESOURCES</span>
            <a href="/html/library.html" class="" ><span class="e-icon">&#8495;</span> - Library</a>
            <a href="/html/Auditions/audition.html">Vocal Auditions</a>
            <a href="/html/Instrument_tutor/tutor.html">Instrument Tutor</a>
            <a href="/html/Music_archive/archive.html">Instrument Score</a>
        </div>

        <div class="footer-content">
            <span id="contact">CONTACT</span>
            <a href="mailto:moseschizaram8@gmail.com"><span class="e-icon">&#8495;</span> - mail</a>
            <a href="https://wa.me/2348039489150">&nbsp;</a>
            <a href="#">&nbsp;</a>
            <a href="#">&nbsp;</a>
        </div>

        <!-- <div class="footer-content">
            <span>CONTACT</span>
            <a href="#">e-mail</a>
            <a href="#">whatsapp</a>
            <a href="#"> &nbsp;</a>
            <a href="#">&nbsp;</a>
        </div> -->
    </div>


    <!-- <div class="footer-inside">
        <div class="footer-content">
         <span>CONNECT</span>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">Youtube</a>
        </div>

        <div class="footer-content">
            <span>MORE</span>
            <a href="#">Gallery</a>
            <a href="#">Service</a>
            <a href="/choir_products/choir-products.html">Store</a>
            <a href="/choir_products/choir-products.html">Store</a>
        </div>

        <div class="footer-content">
            <span>CONTACT</span>
            <a href="#">e-mail</a>
            <a href="#">whatsapp</a>
            <a href="#"> &nbsp;</a>
            <a href="#">&nbsp;</a>

        </div> -->
    </div>
    <a href=""></a>
    <a href="#up" id="arrow-up" title="Go Up">&#x27A5; </a>
</footer>

<div id="below-footer">
    <div class="after-footer-image-container">
        <img src="/logo/main-logo.jpg" alt="watchman logo">
        <p id="terms">W.C.C.R.M</p>
        <p id="terms">&copy; Umuahia Choir 2022 | Privacy | Terms | Cookies | SiteMap</p>
    </div>
</div> 



</body>
<script src="/js/index.js"></script>
</html>