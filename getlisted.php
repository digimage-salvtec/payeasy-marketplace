<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet" />

    <title>
      Get listed on Marketplace - PayEasy Marketplace on ePayNet | Powered by
      Digimage
    </title>

    <!-- Additional CSS Files -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="assets/css/tooplate-artxibition.css" />
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Pre HEader ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">Marketplace</a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="getlisted.html" class="active">Get Listed</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Get listed today</h2>
            <span
              >Submit your business details to get listed on the PayEasy
              Marketplace</span
            >
          </div>
        </div>
      </div>
    </div>
    <div class="ticket-details-page">
      <div class="container">
        <div class="row">
          <div class="rent-venue-application">
            <div class="container">
              <div class="row">
                <div class="col-lg-9">
                  <div class="heading-text">
                    <h4>Tell us about your business</h4>
                  </div>
                  <div class="contact-form">
                    <form id="contact" action="action.php" method="POST">

                      <span>
                        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                      </span>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input
                              name="companyName"
                              type="text"
                              id="name"
                              placeholder="Company Name"
                              required />
                          </fieldset>
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <select name="businessCategory">
                              <option value="">Category</option>
                              <option value="Insurance">Insurance</option>
                              <option value="Credit Provider">
                                Credit Provider
                              </option>
                              <option value="Micro-lender">Micro-lender</option>
                              <option value="Bank">Bank</option>
                              <option value="SACCO">SACCO</option>
                            </select>
                          </fieldset>
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input
                              name="emailAddress"
                              type="email"
                              pattern="[^ @]*@[^ @]*"
                              placeholder="Email Address"
                              required />
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input
                              name="telephone"
                              type="text"
                              id="phone-number"
                              placeholder="Telephone"
                              required />
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input
                              name="mobile"
                              type="text"
                              id="phone-number"
                              placeholder="Mobile No. "
                              required />
                          </fieldset>
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input
                              name="physicalAddress"
                              type="text"
                              id="physicaladdress"
                              placeholder="Physical Address"
                              required />
                          </fieldset>
                        </div>

                        <div class="col-lg-12">
                          <fieldset>
                            <textarea
                              name="description"
                              rows="6"
                              id="about-event-hosting"
                              placeholder="Describe your business"
                              required></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button
                              type="submit"
                              id="form-submit"
                              class="main-dark-button">
                              Get listed
                            </button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  *** Footer *** -->
    <footer>
      <div class="copyright">
        &copy; 2023
        <script>
          new Date().getFullYear() > 2023 &&
            document.write("- " + new Date().getFullYear());
        </script>
        | <strong>Digimage</strong> | All Rights Reserved
      </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/quantity.js"></script>

    <!-- Form Validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
      const constraints = {
        companyName: {
          presence: { allowEmpty: false },
        },
        businesCategory: {
          presence: { allowEmpty: false },
        },
        emailAddress: {
          presence: { allowEmpty: false },
        },
        telephone: {
          presence: { allowEmpty: false },
        },
        mobile: {
          presence: { allowEmpty: false },
          email: true,
        },
        physicalAddress: {
          presence: { allowEmpty: false },
        },
        description: {
          presence: { allowEmpty: false },
        },
      };

      const form = document.getElementById("contact-form");
      form.addEventListener(
        "submit",
        function (event) {
          const formValues = {
            companyName: form.elements.companyName.value,
            businesCategory: form.elements.businesCategory.value,
            emailAddress: form.elements.emailAddress.value,
            telephone: form.elements.telephone.value,
            mobile: form.elements.mobile.value,
            physicalAddress: form.elements.physicalAddress.value,
            description: form.elements.description.value,
          };

          const errors = validate(formValues, constraints);

          if (errors) {
            event.preventDefault();
            const errorMessage = Object.values(errors)
              .map(function (fieldValues) {
                return fieldValues.join(", ");
              })
              .join("\n");
            alert(errorMessage);
          }
        },
        false
      );
    </script>
  </body>
</html>
