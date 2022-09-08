<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elite Eats</title>
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/style-home.css" />
  <link rel="stylesheet" href="assets/css/hero.css" />
</head>

<body>
  <section class="hero">
    <nav>
      <ul>
        <li><a href="about.php" class="hero__link">about</a></li>
        <li><a href="services.php" class="hero__link">services</a></li>
        <li><a href="contact.php" class="hero__link">contact</a></li>
      </ul>
    </nav>
    <div class="hero__container">
      <div class="hero__logo">
        <img src="assets/img/elite-eats-logo-light.png" />
      </div>
      <div class="hero__text">
        <h1>HIGH PERFORMANCE SPORT SCIENCE & NUTRITION CONSULTING</h1>
        <h2>JENNIFER GIBSON</h2>
        <h3>MS, RD, CSSD, IOC DIP SPORT NUTR</h3>
      </div>
      <div class="hero__actions">
        <a href="about.php" class="button">Learn More</a>
      </div>
    </div>
  </section>

  <main>

    <section class="bg-accent">
      <div class="container">
        <div class="content-holder">

          <h2>What We Can Do For You</h2>
          <div class="grid-services">

            <div class="card-with-top-image">
              <img src="assets/img/master_classes_and_education.jpg" />
              <h3>Master Classes & Education</h3>
              <p>Take your practice to an elite level with our master classes and education sessions.</p>
            </div>

            <div class="card-with-top-image">
              <img src="assets/img/athlete_performance.webp" />
              <h3>Athlete Performance</h3>
              <p>Individual high performance plans for elite athletes. Sessions can be live or virtual.</p>
            </div>

            <div class="card-with-top-image">
              <img src="assets/img/organizational_consulting.webp" />
              <h3>Organizational Consulting</h3>
              <p>High performance programming, strategy, product evaluation and development.</p>
            </div>

            <div class="card-with-top-image">
              <img src="assets/img/media_and_communications.webp" />
              <h3>Media & Communications</h3>
              <p>Television, radio, web and written communications.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="bg-neutral-light">
      <div class="container row-split">
        <img src="assets/img/jennifer_gibson_headshot.jpg" />
        <div class="content-holder large-screen-only">
          <h2>About Jenn</h2>
          <p>Jennifer Gibson is an internationally recognized sport science and nutrition professional with 16 years of elite experience. Her applied physiology and nutrition work has included the NFL
            (Chicago Bears & New Orleans Saints), US Olympic and Paralympic Committee, Womens Tennis Association, Canadian Olympic Teams as well as MLS & NBA clients.</p>
        </div>
      </div>
      <div class="bg-primary small-screen-only">
        <div class="content-holder text-light">
          <h2>About Jenn</h2>
          <p>Jennifer Gibson is an internationally recognized sport science and nutrition professional with 16 years of elite experience. Her applied physiology and nutrition work has included the NFL
            (Chicago Bears & New Orleans Saints), US Olympic and Paralympic Committee, Womens Tennis Association, Canadian Olympic Teams as well as MLS & NBA clients.</p>
        </div>
      </div>
    </section>

    <section class="bg-secondary">
      <div class="container">
        <div class="content-holder">

          <h2>Testimonials</h2>
          <div class="grid-testimonials">


            <?php
$testimonials = [
    ["image" => "assets/img/lauren_marucci_headshot.webp", "name" => "Lauren Marucci MS, RD,CSSD, CSCS", "details" => "KBR Tactical Performance Dietitian", "content" => "Jenn is an amazing dietitian and teacher. The sweat testing class was phenomenal - from an informative PowerPoint to a hands-on practical session, I learned so much. I feel very confident doing the testing on my own after the class! I could not recommend Jenn enough and cannot wait for future classes."],
    ["image" => "assets/img/sam_acho.webp", "name" => "Sam Acho", "details" => "NFL Linebacker (9 yrs), ESPN sports analyst, Vice President, NFL Players Association", "content" => "Jenn Gibson is a trusted resource who has worked with some of the highest level athletes in the world. Whether in the National Football League, the Olympics, or anywhere in between, Jenn has continually been a catalyst for positive change in her industry. She's fearless, strong and will stop at nothing to see you at your best."],
    ["image" => "assets/img/alicia_glass.webp", "name" => "Alicia Glass, MS, RD, CSSD", "details" => "Senior Sport Dietitian, US Olympic & Paralympic Committee", "content" => "When I first met Jenn, I was blown away by the intensity and passion she brings to her work, especially new projects. Whether she’s familiar with the population or it’s brand new to her, she dives right in. Not only is her work unique and creative, it’s also evidence based (no quackery), realistic and practical. She knows how to target the areas that an athlete can realistically change, to get the best return on investment."],
    ["image" => "assets/img/pierre_ngo.webp", "name" => "Pierre Ngo", "details" => "Assistant Strength Coach Denver Broncos Football", "content" => "I can attest firsthand to Jenn's high level of competence, exceptional character, and notable professional body of work. I firmly believe that her professional competence is rooted in the balance of scientific knowledge and practical application. Jenn takes pride in her constant search for continuing education, collaboration skills, and the ability to work carefully with everyone based on their individual needs and demands."],
    ["image" => "assets/img/jake_varner.webp", "name" => "Jake Varner", "details" => "2012 Olympic Gold Medalist, Wrestling, Wrestling Coach, Penn State", "content" => "Jenn is a reliable and credible source of nutrition support for me. She has helped me with easy to manage plans for lean mass gain, performance nutrition during competition as well as supplement advising. Jenn traveled with USA Wrestling internationally to World and Olympic Games and her support on the road was really valued and appreciated by our athletes and coaches!"],
    ["image" => "assets/img/kayla_harrison.webp", "name" => "Kayla Harrison", "details" => "2x Olympic Gold Medalist - Judo, Pro MMA fighter", "content" => "I was diagnosed with hypoglycemia. To me that just meant I had to eat before workouts and eat more often. I was struggling to break through and found myself feeling lethargic, exhausted and drained during competition and training. It wasn’t until I began working with Jenn that I started to see changes in my results and my energy levels. She helped design a comprehensive plan that no doubt was a huge part of my success leading up to an in London. Jenn is a vital part of the team that helps make my dreams a reality!"],
];

foreach ($testimonials as $key) {
    $image = $key['image'];
    $name = $key['name'];
    $details = $key['details'];
    $content = $key['content'];
    ?>

            <div class="card-with-side-image">
              <div class="grid-side-by-side">
                <img src="<?=$image;?>" alt="<?=$name;?>" />
                <div>
                  <h3><?=$name;?></h3>
                  <h4><?=$details;?></h4>
                </div>
              </div>
              <p><?=$content;?></p>
            </div>

            <?php }?>

          </div>
        </div>
      </div>
    </section>


  </main>

  <?php include 'includes/footer.php';?>