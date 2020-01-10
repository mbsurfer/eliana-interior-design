<?php
    $carousel_images = array(
        "/new/slider/modern_eclective_interior_design.JPG",
        "/new/slider/asian_inspired_interior_design.jpg",
        "/new/slider/custom_interior_design.jpg",
        "/new/slider/IMG_5116.jpg",
        "/new/2019-images/combo2.jpg",
        "/new/slider/modern_interior_design.jpg",
        "/new/slider/home_theater_design.jpg",
        "/new/2019-images/combo1.jpg",
        "/new/slider/IMG_3670.jpg",
        "/new/slider/IMG_5113.jpg",
        "/new/2019-images/combo3.jpg",
        "/new/slider/IMG_8469.jpg",
        "/new/slider/IMG_2290.JPG",
        "/new/slider/silver_couch.jpg",
        "/new/slider/Traditional_European_interior_design.JPG",
        "/new/slider/sustainable_recyclable_materials_and_design.jpg",
        "/new/slider/custom_bathroom_wall_treatment.jpg"
    );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Creativity is the most important skill an interior designer can possess. A designer needs to be responsive to client wants & have communication skills">
    <meta name="keywords" content="eliana interior, eliana de leon, interior design, interior designer, paso robles ca, el paso de robles, california, san luis obispo county, designs, interior decorator,">

    <title>Eliana Interior Design | Paso Robles, CA | Designer Resources</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body,td,th {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 13px;
      color: #333333;
      padding-bottom: 30px;
    }
    body {
      background-color: #FFFFFF;
    }
    .container {
      position: relative;
    }
    a {
      font-weight: bold;
      text-decoration: underline;
    }
    a:link, a:visited, a:hover, a:active {
      color: #666666;
    }
    h1,h2,h3,h4,h5,h6 {
      font-weight: bold;
      font-family: Georgia, Times New Roman, Times, serif;
      color: #222222;
    }
    h1 {
      font-size: 18px;
    }
    h2 {
      font-size: 16px;
    }
    h3 {
      font-size: 14px;
    }
    .style1 {
      font-size: 14px;
      font-weight: bold;
    }

    .social-header {
      font-size: 2.5em;
      color: #666666;
      position: absolute;
      top: 15px;
      right: 15px;
      z-index: 999;
    }
    .social-header a {
      display: inline-block;
      float: right;
      margin-left: .4em;
    }
    body .modal-dialog { /* Width */
      max-width: 100%;
      width: auto !important;
      display: inline-block;
    }
    .modal {
      z-index: -1;
      display: flex !important;
      justify-content: center;
      align-items: center;
    }

    .modal-open .modal {
      z-index: 1050;
    }
  </style>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-4724837-29']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script src="https://kit.fontawesome.com/07655ed92b.js" crossorigin="anonymous"></script>
</head>
<body>

<main role="main" class="container">

  <div class="social-header clearfix">

    <a target="_blank" href="https://www.instagram.com/elianainteriordesign/"><i class="fab fa-instagram"></i></a>
    <a target="_blank" href="https://twitter.com/elianainterior"><i class="fab fa-twitter"></i></a>
    <a target="_blank" href="https://www.facebook.com/ElianaInteriorDesign"><i class="fab fa-facebook"></i></a>

  </div>

  <div class="row">

    <div class="col">

      <img class="my-4" src="/new/interior-design/eliana-interior-design-logo.jpg" width="146" height="60" alt="Logo for Eliana Interior Design">
      <h1>Eliana de Leon, Interior Designer</h1>
      <hr />
      <p>The desire to create comfortable and visually pleasing living spaces has existed for centuries. Creativity is the most important skill an interior designer can possess. A designer also needs to be responsive to client wants, have communication skills and create in diverse styles.</p>
      <p>With over 30 years of experience Eliana de Leon brings a strong sense of color, texture, pattern and proportion to her projects. She embraces the idea of eclecticism to create dynamic environments. For example, a classical vase can be placed with Baroque art and antique Moroccan pillows can sit on a modern sofa.</p>

    </div>

  </div>

  <div class="row">

    <div class="col">

      <h2>Recent Projects from Eliana</h2>
      <hr />

      <div id="carouselFade" class="carousel slide carousel-fade mb-4" data-ride="carousel">

        <ol class="carousel-indicators">
            <?php
            $i = 0;
            foreach($carousel_images as $img) {
                ?>
                <li data-target="#carouselFade" data-slide-to="<?php echo $i ?>" class="<?php if($i===0) echo ' active'; ?>"></li>
                <?php
                $i++;
            }
            ?>
        </ol>

        <div class="carousel-inner">
            <?php
                $i = 0;
                foreach($carousel_images as $img) {
                ?>
                    <div class="carousel-item<?php if($i===0) echo ' active'; ?>">
                        <img src="<?php echo $img ?>" class="d-block w-100">
                    </div>
                <?php
                    $i++;
                }
            ?>
        </div>

        <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

    </div>

  </div>

  <div class="row mb-4">

    <div class="col col-4">

      <a href="#" data-toggle="modal" data-target="#imgModal" data-imgsrc="/new/2019-images/livingroom_600x600.jpg" title="Assisted Living Facility">
        <img src="/new/2019-images/livingroom_600x600.jpg" class="img-fluid img-thumbnail" alt="Assisted Living Facility">
      </a>

    </div>

    <div class="col col-4">

      <a href="#" data-toggle="modal" data-target="#imgModal" data-imgsrc="/new/2019-images/kitchen_600x600.jpg" title="Private Residence">
        <img src="/new/2019-images/kitchen_600x600.jpg" class="img-fluid img-thumbnail" alt="Private Residence">
      </a>

    </div>

    <div class="col col-4">

      <a href="#" data-toggle="modal" data-target="#imgModal" data-imgsrc="/new/2019-images/bar_600x600.jpg" title="Tasting Room">
        <img src="/new/2019-images/bar_600x600.jpg" class="img-fluid img-thumbnail" alt="Tasting Room">
      </a>

    </div>

  </div>

  <div class="row">

    <div class="col">

      <h2>Services by Eliana</h2>
      <hr />
      <p>Eliana's projects cover a spectrum of budgets; everything does not need to be done at the same level of richness. Mixing old and new, high cost and low cost creates contrast and, therefore, creates interest.</p>
      <p>Interior design services range from limited changes to complete renovations and the fee is based on the complexity of the project. Additionally,  Eliana can assess clients' current design and recommend improvements. Services are available in Los Angeles, throughout the Central Coast, and San Francisco. (5 hour minimum.)</p>

    </div>

  </div>

  <div class="row">

    <div class="col-12 col-md-6">

      <h2>Recent Press about Eliana</h2>
      <hr />
      <p>
        Click each to expand: <br>
        <a href="#" data-toggle="modal" data-target="#imgModal" data-imgsrc="/new/interior-design/ga-houses-architecture-magazine-cover.jpg">GA Houses Magazine Cover</a> <br>
        <a href="/new/documents/harpersbazaar.pdf" target="_blank"> UK Harper's Baazar</a>
      </p>

    </div>

    <div class="col-12 col-md-6">

      <h2>Contact Eliana</h2>

      <hr />

      <img src="/new/interior-design/eliana-de-leon.jpg" alt="Eliana de Leon, Interior Designer" class="float-left mr-3">

      <div>
       <span class="style1">Eliana de Leon, Interior Designer</span><br>
        Email: <a href="mailto:elianainde@gmail.com" target="_blank">elianainde@gmail.com</a><br>
        Paso Robles, CA: (805) 237-0011<br>
        Los Angeles, CA: (310) 503-4465<br>
        Website: <a href="http://www.elianainteriordesign.com" target="_blank">www.elianainteriordesign.com</a>
      </div>

    </div>

  </div>

</main><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" class="text-center" style="max-width: 100%" />
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('.carousel').carousel();

    $('#imgModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var imgSrc = button.data('imgsrc');
      var modal = $(this);
      modal.find('.modal-body img').attr('src', imgSrc);
    })

  });
</script>

</body>
</html>
