<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packages</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../css/pages/home.css" />
  </head>
  <body>
    <?php include './navbar.php' ?>
    <main>
      <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
          <!--this is an utility class and it allows me to set the child element a text-align of center because the child elemnet becomes an inline-block element -->
          <h2 class="heading-secondary">Most promising packages</h2>
        </div>

        <div class="row">
          <div class="col-1-of-3"><br /></div>
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
          <div class="col-1-of-3"><br /></div>
        </div>

        <div class="row">
          <div class="col-1-of-3"><br /></div>

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
          <div class="col-1-of-3"><br /></div>
        </div>

        <div class="row">
          <div class="col-1-of-3"><br /></div>

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
          <div class="col-1-of-3"><br /></div>
        </div>
      </section>
    </main>
    <?php include './footer.php' ?>
  </body>
</html>
