<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>ConnectHub</title>
</head>

<body>
  <!-- NavBar -->
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
            <a class="dropdown-item" href="/connecthub/pages/additionalservices.php">Additional Services</a>
          </div>
        </div>
        <li class="nav-item active">
          <a class="nav-link" href="/connecthub/contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- form for contact us  -->
  <div  class="container">
    <form>
      <div class="form-group my-3">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label>Your Name</label>
        <input type="name" class="form-control" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select your query topic</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Admission</option>
          <option>Processing</option>
          <option>Visa and Passport</option>
          <option>University</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Your query</label>
        <textarea class="form-control text-monospace" id="exampleFormControlTextarea1" rows="3" placeholder="Write your query in simple words"></textarea>
      </div>
      <div class="container text-center">
        <button class="btn btn-success my-4">Submit</button>
      </div>
    </form>
  </div>
  <?php include 'footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>