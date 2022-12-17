<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Thirty Three </title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../css/pages/home.css" />
    <link rel="stylesheet" href="./css//base/typography.css" />

</head>

<body>
    <?php include './navbar.php'?>
    <main>
    <section class="section-about" id="section-about" style="padding: 2rem 3rem">
        <div class="u-center-text u-margin-bottom-big">
          <!--this is an utility class and it allows me to set the child element a text-aling of center because the child elemnet becomes an inline-block element -->
          <h2 class="heading-secondary">About us</h2>
        </div>
       
        <div class="row">
            <div class="col-1-of-2">
            <h3 class="heading-tetiary u-margin-bottom-small">
                Who are we ?
            </h3>
            <p class="paragraph">
            Thirty three is a multi-service organization founded by group  with the prime focus of making it easier for people with undiluted talents to get noticed, 
            by providing the avenue for athletes to get noticed by scouts all over the world.
            </p>
            </div>
            <div class="col-1-of-2">

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1-of-3">
                <h3 class="heading-tetiary u-margin-bottom-small">Mission</h3>
                <p class="paragraph">Our core mission is provide a platform for athletes to be able 
                    to connect with scouts  
                </p>
            </div>
            <div class="col-1-of-3">
                <h3 class="heading-tetiary u-margin-bottom-small">Vision</h3>
                <p class="paragraph">The vision of the company is to instill </p>
            </div>
            <div class="col-1-of-3">
                <h3 class="heading-tetiary u-margin-bottom-small">Core Values</h3>
                <p class="paragraph"></p>
            </div>
        </div>
        <hr>
        <div class="row" >
          <div class="col-1-of-2">
            <h3 class="heading-tetiary u-margin-bottom-small">
              The sport in scouting is to find the good in every boy and develop
              it
            </h3>
            <p class="paragraph">
              Thirty Three gives you the chance to bag that future NBA call up
              or that contract you need to sign
            </p>

            <h3 class="heading-tetiary u-margin-bottom-small">
              Get the chance to take on an adventure like you've never before
            </h3>
            <p class="paragraph">
              Thirty Three opens the door for many Nigerians all over the world
              to get noticed despite their skills
            </p>

            <!-- <a href="#section-features" class="btn-text">learn more &rarr; </a -->
            ><!--codingheroes.io/resources-->
          </div>
          <div class="col-1-of-2">
            <!-- .composition>(composition__photo.composition__photo--p1)*3 -->
            <div class="composition">
              <img
                src="../assets/images/bron-wade.jpg"
                alt=""
                class="composition__photo composition__photo--p1"
              />
              <img
                src="../assets/images/mess-ronaldo.jpg"
                alt=""
                class="composition__photo composition__photo--p2"
              />
              <img
                src="../assets/images/serena.jpg"
                alt=""
                class="composition__photo composition__photo--p3"
              />
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include './footer.php' ?>
</body>
</html>