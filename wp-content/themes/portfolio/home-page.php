<?php
/**
* Template Name: Home Page
*
*/

get_header();


?>

<section id="head" class="page-container">
  <div class="header">
    <div class="head-container">
      <h1 class="animated fadeIn">Taeyong Kim<br></h1>
      <div class="descriptions">
        <h2 class="what-i-do1"></span>
        <h2 class="what-i-do2"></span>
        <h2 class="what-i-do3"></span>
        <h2 class="what-i-do4"></span>
      </div>
    </div>

    <div class="down-arrow-wrapper">
      <a href="#aboutme"> <img src="<?php echo get_template_directory_uri(); ?>/public/images/down-arrow.png"></a>
    </div>
  </div>
</section>

<section id="aboutme">
  <div class="container">
    <div class="about-me-container">
      <h1 class="about-header"> about me </h1>

      <?php
        // check if the repeater field has rows of data
        if( have_rows('about_sections') ):
         	// loop through the rows of data
            while ( have_rows('about_sections') ) : the_row();?>

            <img class="side-images" src="<?php echo get_sub_field('image');?>">

            <h2 class="about-subheads"> <?php echo get_sub_field('header');?> </h2>
            <div class="about-text">
              <p class="first-line"> <?php echo get_sub_field('subhead');?>
              <p> <?php echo get_sub_field('body');?>
            </div>

            <div style="clear: both;"></div>

            <?php endwhile;
        else :
            // no rows found
        endif;
        ?>

      <div class="block-wrapper">
        <div class="creative-block">
          <div class="creative"></div>
          <h2> Creative </h2>
          <p>  Inspiration approaches us from even the smallest moments; a coffee-stained napkin, a melody from a passing ice cream truck, a fleeting cloud. Seizing this moment and following it where it leads
               is just one of the ways I strive to be distinctive.
          </p>
        </div>

        <div class="teamplayer-block">
          <div class="teamplayer"></div>
          <h2> Teamplayer </h2>
          <p> I strongly believe that synergy through teamwork can produce results an individual can only dream of. My open-mindedness allows me to flourish in a team-environment and learn from others to grow
              not only as a professional, but as an individual.
          </p>
        </div>

        <div class="skills-block">
          <div class="skills"></div>
          <h2> Skills </h2>
          <p> HTML5 · CSS3 ·  PHP · jQuery · Node.js · Python · JavaScript · C++ · WordPress · Adobe Photoshop · Adobe Audition · Adobe Premiere · Avid Pro Tools · SEO · Social Media Marketing · Filmmaking
            · Film Editing · Audio Mixing · Graphic Design
          </p>
        </div>
    </div>


    </div>
  </div>
</section>



<section id="work">
  <div class="container">
    <div class="my-work-container">
      <div class="dividing-line"></div>
      <h1 class="work-header"> my work </h1>
      <p style="font-size:20px; text-align:center;"> click to enlarge

      <div class="slick">

        <?php
          // check if the repeater field has rows of data
          if( have_rows('work_examples') ):
            // loop through the rows of data
              while ( have_rows('work_examples') ) : the_row();?>

              <div class="work-block">
                <a href="<?php echo get_sub_field('link');?>"> <img class="work-images" style="margin-bottom:20px;"src="<?php echo get_sub_field('image');?>"> </a>
                <h2><?php echo get_sub_field('header');?></h2>
                <p><?php echo get_sub_field('subhead');?>
                <p class="skillsets"><?php echo get_sub_field('skills');?></p>
              </div>

              <?php endwhile;
          else :
              // no rows found
          endif;
          ?>

        <!-- <div class="work-block">
          <a href="<?php echo get_sub_field('link');?>"> <img class="work-images" style="margin-bottom:20px;"src="<?php echo get_sub_field('image');?>"> </a>
          <h2><?php echo get_sub_field('header');?></h2>
          <p><?php echo get_sub_field('subhead');?>
          <p class="skillsets"><?php echo get_sub_field('skills');?></p>
        </div>

        <div class="work-block">
          <a href="https://www.referjohngrace.com"> <img class="work-images" style="margin-bottom:20px;"src="<?php echo get_template_directory_uri(); ?>/public/images/works/johngrace.png"> </a>
          <h2> Landing Pages </h2>
          <p> landing pages created during internship with <a href="https://deksia.com">Deksia</a>
          <p class="skillsets"> HTML5 · CSS3 · jQuery · WordPress · JavaScript · PHP </p>
        </div>

        <div class="work-block">
          <a href="https://www.entrepreneursofmichigan.com/"> <img class="work-images" style="margin-bottom:20px;" src="<?php echo get_template_directory_uri(); ?>/public/images/works/eomichigan.png"> </a>
          <h2> Landing Pages </h2>
          <p> landing pages created during internship with <a href="https://deksia.com">Deksia</a>
          <p class="skillsets"> HTML5 · CSS3 · jQuery · WordPress · JavaScript · PHP </p>
        </div>

        <div class="work-block">
          <a href="https://pupsandputts.com"> <img class="work-images" src="<?php echo get_template_directory_uri(); ?>/public/images/works/pups.png"> </a>
          <h2> Landing Pages </h2>
          <p> landing pages created during internship with <a href="https://deksia.com">Deksia</a>
          <p class="skillsets"> HTML5 · CSS3 · jQuery · WordPress · JavaScript · PHP </p>
        </div>

        <div class="work-block"  style="margin-top:10px; border-top:none;">
          <a href="public/images/works/theatre.png" data-lightbox="Theatre Suite" data-title="Theatre Suite"> <img class="work-images" src="<?php echo get_template_directory_uri(); ?>/public/images/works/theatre.png"></a>
          <h2> Theatre Software Suite </h2>
          <div class="github-logo">
            <a href="#" onclick='window.open("https://github.com/cs262software");return false;'><img class="github-black" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/social/github-black.png"></a>
          </div>
          <p> group project to create a web application for Calvin's Theatre Company in Software Engineering course. was assigned to back-end architecture
          <p class="skillsets"> HTML5 · CSS3 · Node.js · JavaScript
        </div>

        <div class="work-block">
          <a target="_blank" href="https://mosbyspopcorn.com"> <img class="work-images" src="<?php echo get_template_directory_uri(); ?>/public/images/works/mosbys.png"></a>
          <h2> mosbys website </h2>
          <div class="github-logo">
            <a href="#" onclick='window.open("https://github.com/taeyongkim95/mosbys");return false;'><img class="github-black" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/social/github-black.png"></a>
          </div>
          <p> website I worked in during my internship with <a href="http://aurikk.com">Aurikk Brand Movement Group</a>
          <p class="skillsets"> HTML5 · CSS3 · jQuery
        </div>

        <div class="work-block">
          <iframe src="https://player.vimeo.com/video/208565370" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          <h2> the album </h2>
          <p> short film created for filmmaking course at Calvin College
          <p class="skillsets"> Adobe Premiere · Audio Mixing · Film Editing </p>
        </div>

        <div class="work-block">
          <a href="public/images/works/highschool.jpg" data-lightbox="high-school" data-title="digital freeform"> <img class="work-images" src="<?php echo get_template_directory_uri(); ?>/public/images/works/highschool.jpg"> </a>
          <h2> digital free association </h2>
          <p> digital artwork I created for my high-school senior year
          <p class="skillsets"> Adobe Photoshop · Adobe Illustrator </p>
        </div> -->

      </div>



    </div>
  </div>
</section>

<section id="contact">
    <div class="contact-container">
      <h1 class="contact-header"> contact me </h1>
      <p class="contact-text"> I am looking for a job in any position that could further enhance my versatility of digital media <br>
        I would love to talk to you about any opportunities that you may have <br>
        Here is my <a href="resume.pdf" target="_blank" style="color:$gold;">RESUME</a> and you can reach me with any of the ways below

      <div class="contact-icon-wrapper">
        <a href="mailto:taeyongkim.95@gmail.com" target="_blank"><img class="contact-icons" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/email/emailIconWhite.png"></a>
        <a href="tel:616-717-2423" target="_blank"><img class="contact-icons" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/phone/phoneIconWhite.png"></a>
        <a href="https://www.facebook.com/taeyongggggg" target="_blank"><img class="contact-icons" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/social/facebookIconWhite.png"></a>
        <a href="https://www.linkedin.com/in/taeyong-kim/" target="_blank"><img class="contact-icons" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/social/linkedInIconWhite.png"></a>
        <a href="https://github.com/taeyongkim95" target="_blank"><img class="contact-icons" src="<?php echo get_template_directory_uri(); ?>/public/images/icons/social/github.png"></a>
      </div>

      <p class="contact-text"> Created by myself © 2018 <br>
        <a href="#head"><img class="up-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/up-arrow.png"></a>
      </p>
    </div>
</section>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js"></script>
<script>
  $(function(){
      $(".what-i-do1").typed({
          strings: ["Writer"],
          typeSpeed: 150,
      });

      $(".what-i-do2").typed({
          strings: ["^1500 Reader"],
          typeSpeed: 150,
      });

      $(".what-i-do3").typed({
          strings: ["^3000 Listener"],
          typeSpeed: 150,
      });

      $(".what-i-do4").typed({
          strings: ["^4500 Creator"],
          typeSpeed: 150,
      });

      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });

      $('.slick').slick({
        infinite:true,
        arrows:true,
        dots:true,
      });

  });
</script>

<?php
get_footer();
