<?php
include("./connection/config.php");
include("./helpers/SystemOperators.php");

require("./components/header.php");
require("./components/navbar.php");

$con = connection();
$so = new SystemOperators();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnSubmit'])){
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $valNumber = filter_input(INPUT_POST,'valNumber', FILTER_SANITIZE_SPECIAL_CHARS);
   

    $insert_query = 'INSERT INTO `contact` (`name`,`email`, `valNumber`) VALUES (?, ?, ?)';
    $inset_stmt = $con->prepare($insert_query);
    $inset_stmt->bind_param('sss',$name,$email,$valNumber);
        try{
            $inset_stmt->execute();
            echo "<script> alert('Thank you for your for contacting us we will reply to you ASAP!');
                window.location='index.php#contactUs';
            </script>";
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
        }
}
   
?>

<!-- Main content-->
<div class="main-content">

  <section id="homepage" class="d-flex flex-column justify-content-center align-items-center min-vh-100">
  <h1>Welcome To My Boosting account</h1>
 <img src="welcome.png" class="img-fluid" style="max-width: 1000px;" alt="Welcome">
</section>

  <section id="services" class="d-flex flex-column justify-content-center align-items-center min-vh-100">
  <h1>Our Services</h1>
  <img src="SERVICES.png" class="img-fluid" style="max-width: 1000px;" alt="Our Services">
</section>
    

  <section id="products" class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2>Products</h2>
     <img src="products.png" class="img-fluid" style="max-width: 1000px;" alt="Products">
  </section>

  <section id="aboutus" class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h2>About me</h2>
    <h1> i boost for fun </h1>
    <h5> i need money and also its fun</h5>
    <h5> my name is lui or you can call me L.A</h5>
     <img src="aboutme.jpg" class="img-fluid" style="max-width: 500px;" alt="About me">
  </section>

  <section id="contactme">
    <h2>Contact Us</h2>
    <div class="form-contain">
        <form action="#contactUs" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="valNumber" class="form-control" id="floatingInput" required>
                <label for="floatingInput">valNumber</label>
            </div>

            <button type="submit" class="buttonContainer btn btn-primary" name="btnSubmit">Submit</button>
        </form>
    </div>
</section>

</div>






</div>

<?php
require("components/footer.php");?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
</body>