<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thirty Three</title>
    <link rel="stylesheet" href="./css/pages/home.css" />
    <link rel="stylesheet" href="./css//base/typography.css" />
    <!-- <link rel="stylesheet" href="./css/components/button.css" /> -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <?php include './navbar.php' ?>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-1-of-2">
            <div class="wrapper">
              <div class="wrapper-main">
                <p class="heading-large wrapper-main__heading">
                  REDEFINING THE SCOUTING PROCESS.
                </p>
                <p class="text-primary wrapper-main__secondary-heading">
                  Get noticed by the most prestigous scouting organisations out
                  there with just the click of a button.
                </p>
                <div style="margin: 20px 0">
                  <a href="./sign-up.html" class="btn btn-green"
                    >Sign Up</a
                  >
                </div>
              </div>
              <div></div>
            </div>
          </div>
          <div class="col-1-of-2">
            <div class="home-image-container">
              <img
                src="assets/images/HomeSoccerImage.png"
                alt="Home page picture"
                class="home-image"
              />
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="section-about" id="section-about">
        <div class="u-center-text u-margin-bottom-big">
          <!--this is an utility class and it allows me to set the child element a text-aling of center because the child elemnet becomes an inline-block element -->
          <h2 class="heading-secondary">Get connected with your helper</h2>
        </div>
        <div class="row">
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

            <a href="./about.php" class="btn-text">learn more &rarr; </a
            ><!--codingheroes.io/resources-->
          </div>
          <div class="col-1-of-2">
            <!-- .composition>(composition__photo.composition__photo--p1)*3 -->
            <div class="composition">
              <img
                src="./assets/images/bron-wade.jpg"
                alt=""
                class="composition__photo composition__photo--p1"
              />
              <img
                src="./assets/images/mess-ronaldo.jpg"
                alt=""
                class="composition__photo composition__photo--p2"
              />
              <img
                src="./assets/images/serena.jpg"
                alt=""
                class="composition__photo composition__photo--p3"
              />
            </div>
          </div>
        </div>
      </section>

      <!--please note that while you want to use fonts in your page or project please it is important to note that you also have to copy the font folder that is included in the linea basic -->
      <section class="section-features" id="section-features">
        <!--every icon you want to include must begin with the prefix of icon- -->
        <div class="row">
          <div class="col-1-of-4">
            <div class="feature-box">
              <i
                class="feature-box__icon icon-basic-world u-margin-bottom-small"
              ></i>
              <h3 class="heading-tetiary">Joe Patern</h3>
              <p class="feature-box__text">
                “You have to perform at a consistently higher level than others.
                That’s the mark of a true professional.”
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i
                class="feature-box__icon icon-basic-compass u-margin-bottom-small"
              ></i>
              <h3 class="heading-tetiary">J.J. Watt</h3>
              <p class="feature-box__text">
                “Remember, once you set a goal, it’s all about how hard you’re
                willing to work, how much you’re willing to sacrifice and how
                badly you truly want it.”
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i
                class="feature-box__icon icon-basic-map u-margin-bottom-small"
              ></i>
              <h3 class="heading-tetiary">Mike Dahna</h3>
              <p class="feature-box__text">
                "Success isn’t measured by money or power or social rank.
                Success is measured by your discipline and inner peace.”
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i
                class="feature-box__icon icon-basic-heart u-margin-bottom-small"
              ></i>
              <h3 class="heading-tetiary">Wayne Rooney</h3>
              <p class="feature-box__text">
                "It’s an incredible rise to stardom. At 17 you're more likely to
                get a call from Michael Jackson than Sven Goran Eriksson."
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
          <!--this is an utility class and it allows me to set the child element a text-align of center because the child elemnet becomes an inline-block element -->
          <h2 class="heading-secondary">Most promising packages</h2>
        </div>

        <div class="row">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__size card__size--front">
                <div class="card__picture card__picture--1">
                  &nbsp;<!--this is the sybol for an empty space in html rather than just leaving it empty because we wanted it to be a css background image-->
                </div>

                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">
                    The city Explorer
                  </span>
                </h4>

                <div class="card__details">
                  <ul>
                    <li>Appear on the feed of many scouts</li>
                    <li>discover different</li>
                    <li>2 minimum traning centers</li>
                    <li>sleep in an all expense paid hotel</li>
                    <li>Difficulty : easy</li>
                  </ul>
                </div>
              </div>
              <div class="card__size card__size--back card__size--back--1">
                <div class="card__cta card__cta--1">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">&#8358;300,000</p>
                  </div>
                  <a href="#popup" class="btn btn-white">Book Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-1-of-3">
            <div class="card">
              <div class="card__size card__size--front">
                <div class="card__picture card__picture--2">&nbsp;</div>

                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--2">
                    The Forest Hiker
                  </span>
                </h4>

                <div class="card__details">
                  <ul>
                    <li>7 days tour</li>
                    <li>discover various opportunites</li>
                    <li>6 minimum centers</li>
                    <li>Afford to witness the magesty of stamford bridge</li>
                    <li>Difficulty : Medium</li>
                  </ul>
                </div>
              </div>
              <div class="card__size card__size--back card__size--back--2">
                <div class="card__cta card__cta--1">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">&#8358;450,000</p>
                  </div>
                  <a href="#popup" class="btn btn-white">Book Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-1-of-3">
            <div class="card">
              <div class="card__size card__size--front">
                <div class="card__picture card__picture--3">&nbsp;</div>

                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--3">
                    The Sea Voyage
                  </span>
                </h4>

                <div class="card__details">
                  <ul>
                    <li></li>
                    <li>Up to 15 trainers</li>
                    <li>3 tour guides</li>
                    <li>Experience the luxurios traning centers</li>
                    <li>Difficulty : Medium</li>
                  </ul>
                </div>
              </div>
              <div class="card__size card__size--back card__size--back--3">
                <div class="card__cta card__cta--3">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">&#8358;350,000</p>
                  </div>
                  <a href="#popup" class="btn btn-white">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="u-center-text u-margin-top-big">
          <a href="#" class="btn btn-green">Discover All Tours</a>
        </div>
      </section>

      <section class="section-stories">
        <div class="bg-video">
          <video class="bg-video__content" autoplay muted loop>
            <source src="/img/Surfers hanging out.mp4" />
            <source src="/img/Surfers hanging out.mp4" />
          </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
          <!--this is an utility class and it allows me to set the child element a text-aling of center because the child elemnet becomes an inline-block element -->
          <h2 class="heading-secondary">Testimonies</h2>
        </div>

        <div class="row">
          <div class="story">
            <figure class="story__shape">
              <img
                src="/img/dan-ROJFuWCsfmA-unsplash.jpg"
                alt="person on a tour"
                class="story__img"
              />
              <figcaption class="story__caption">Paul Agboola</figcaption>
            </figure>

            <div class="story__text">
              <h3 class="heading-tetiary u-margin-bottom-small">
                I had the best experience
              </h3>
              <p>
                I was able to get noticed soon after joining thirty-three and
                now playing for the spanish league second division
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="story">
            <figure class="story__shape">
              <img
                src="/img/jonas-kakaroto-mjRwhvqEC0U-unsplash.jpg"
                alt="person on a tour"
                class="story__img"
              />
              <figcaption class="story__caption">Agba Baller</figcaption>
            </figure>

            <div class="story__text">
              <h3 class="heading-tetiary u-margin-bottom-small">
                Truly life changing!
              </h3>
              <p>
                This platform has given me the opportunity to take my whole
                basketball career to the next level!
              </p>
            </div>
          </div>
        </div>
        <div
          class="u-margin-top-small u-center-text"
          style="font-size: 1.9rem; font-weight: 600"
        >
          <a href="#" class="btn-text">Read more stories &rarr;</a>
        </div>
      </section>

      <section class="section-book">
        <div class="row">
          <div class="book">
            <div class="book__form">
              <h2
                class="heading-secondary u-center-text u-margin-bottom-medium"
              >
                Get Noticed Now!
              </h2>

              <form action="" class="form">
                <div class="form__group">
                  <input
                    type="text"
                    id="name"
                    class="form__input"
                    placeholder="Full Name"
                    required
                  />
                  <label for="name" class="form__label">Full Name</label>
                </div>

                <div class="form__group">
                  <input
                    type="email"
                    id="email"
                    class="form__input"
                    placeholder="Email Adress"
                    required
                  />
                  <label for="email" class="form__label">Email </label>
                </div>
                <div class="form__group u-margin-bottom-medium">
                  <div class="form__radio-group">
                    <input
                      type="radio"
                      class="form__radio-input"
                      id="small"
                      name="size"
                    />
                    <label for="small" class="form__radio-label">
                      <span class="form__radio-button"></span>

                      Athlete
                    </label>
                  </div>

                  <div class="form__radio-group">
                    <input
                      type="radio"
                      class="form__radio-input"
                      id="large"
                      name="size"
                    />
                    <label for="large" class="form__radio-label">
                      <span class="form__radio-button"></span>
                      Scouts
                    </label>
                  </div>
                </div>

                <div class="form__group">
                  <button class="btn btn-green">Next Step &rarr;</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include './footer.php'?>
  </body>
</html>
