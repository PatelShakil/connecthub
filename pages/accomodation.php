<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>ConnectHub | Accomodation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/connecthub/">ConnectHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/connecthub/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/connecthub/about.php">About</a>
        </li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/connecthub/pages/admission.php">Admission</a>
            <a class="dropdown-item" href="/connecthub/pages/accomodation.php">Accomodation</a>
            <a class="dropdown-item" href="/connecthub/pages/additionalservices.php">additional Services</a>
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="/connecthub/contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- image  -->
  <h3 class="my-3 text-center">HOMESTAY SOLUTIONS</h3>
  <img src="https://source.unsplash.com/2400x500/?homestay,families,relatives" alt="image">
  <!-- body 1 article  -->
  <div class="container text-center my-3">
    <p class="font-weight-bolder"><span style="font-weight: 400; font-size: 101%;">We carefully handpick families based on each student's individual needs, we especially pay attention to those needing restrictions based on dietary and religious requirements. We are proud to choose families based on references, active recruiting and selective processes by interviewing. Once we know specifically all the requirements, we will find an appropriate match. We will provide you with homestay solutions such as; meals included or excluded, shared accommodations with other students, or individual accommodations. Our services do not end with finding a suitable home for the student, we conduct a follow-up phone call with both parties or with their agents to make sure everybody is content with the arrangements. Should there be a case that we need to change the accommodation for an unforeseen reason, there will be no charge to the first change.</span></p>
  </div>
  <!-- body 2 -->
  <div class="container">
    <div class="row">
      <div class="col md-4 mx-2 my-2">
        <div class="card" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title">For Students</h5>
            <!-- addimission icon from svg -->
            <img src="/connecthub/assets/students.png" alt="students">
            <p class="card-text">If you are looking to study abroad, specifically in North America and/ or you are in need of homestay accommodations you are in the right place. We can provide you with all the solutions required so you can meet your future goals. We will make homestay arrangements on your behalf and connect you with settlement services to obtain your local identification, open bank accounts, cell phones, and your Social Insurance Numbers (SIN). You will have nothing to worry about other than focusing on your education.</p>
          </div>
        </div>
      </div>
      <div class="col md-4 mx-2 my-2">
        <div class="card" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title">For Schools</h5>
            <!-- addimission icon from svg -->
            <img src="/connecthub/assets/schools.png" alt="students">
            <p class="card-text">Many of our students come from the Middle East and Europe, however we are seeing more students coming to us from countries within South Asia and South America. We are always interested in working with students from other countries and would like to provide solutions to your students. If this is of interest to you, let us know so we may see how we can be of service to one another.</p>
          </div>
        </div>
      </div>
      <div class="col md-4 mx-2 my-2">
        <div class="card" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title">For Host Families</h5>
            <!-- addimission icon from svg -->
            <img src="/connecthub/assets/host_families.png" alt="students">
            <p class="card-text">We are currently looking for new families to welcome our students coming from other countries. If you are a caring family that enjoys other cultural backgrounds and would like to open your home and hearts to show them what our Canadian hospitality looks like, then please contact us below.</p>
          </div>
        </div>
      </div>
      <div class="col md-4 mx-2 my-2">
        <div class="card" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title">For Agents</h5>
            <!-- addimission icon from svg -->
            <img src="/connecthub/assets/agents.png" alt="students">
            <p class="card-text">We are always open to referrals and new partnership opportunities in hopes to expand with you. If you happen to be in urgent need of accommodations, call us, and we will be happy to assist you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include '/xampp/htdocs/connecthub/footer.php' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>