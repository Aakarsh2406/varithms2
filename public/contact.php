  <!DOCTYPE html>
<html>
<head>
<title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" >
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;500&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <a class="navbar-brand" href="#">Varithms</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="about.php">About</a></li>
	<li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
  </ol>
</nav>
<div class=" jumbotron">
  <h1 class="wow flip">Contact us</h1>
  <p>All time here to help you peoples</p>
</div

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 wow zoomIn">
<div class="card" style="width:300px">
  <img class="card-img-top" src="images/A1.jpeg" alt="Card image" height="300vh">
  <div class="card-body">
    <h4 class="card-title">Aakarsh Singh</h4>
    <p class="card-text">aakarshsingh2406@gmail.com</p>
    <a href="www.linkedin.com/in/aakarsh-singh-2406" class="btn btn-success">Linkdin</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12 wow zoomIn">
<div class=" card" style="width:300px">
  <img class="card-img-top" src="images/V2.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class=" card-title">Vivek Sharma</h4>
    <p class="card-text">vivek.sharma7354@gmail.com</p>
    <a href="https://www.linkedin.com/in/vstfiz" class="btn btn-success">Linkdin</a>
</div>
</div>
</div>







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
<script>
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();
</script>



</body>
</html>
