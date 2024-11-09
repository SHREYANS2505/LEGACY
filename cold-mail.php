<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>Mail Templates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- <link rel="stylesheet" href="css/coldMail.css"> -->
    
    <!-- Favicon -->
    <link rel="icon" href="img/jobsConnect.svg" type="image/x-icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="mcss/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="mcss/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

.slide{
    width: 40%;
    margin: 20px auto;
}
.slide h3{
    margin: 20px;
}

    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        
        
        <?php include 'mainNavbar.php'; ?>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script>
            function sendContact() {
                var valid;
                valid = validateContact();
                if (valid) {
                    jQuery.ajax({
                        url: "contact_mail.php",
                        data: 'userName=' + $("#userName").val() + '&userEmail=' + $("#userEmail").val() + '&subject=' + $("#subject").val() + '&content=' + $(content).val(),
                        type: "POST",
                        success: function(data) {
                            $("#mail-status").html(data);
                        },
                        error: function() {}
                    });
                }
            }

            function validateContact() {
                var valid = true;
                $(".demoInputBox").css('background-color', '');
                $(".info").html('');

                if (!$("#userName").val()) {
                    $("#userName-info").html("(required)");
                    $("#userName").css('background-color', '#FFFFDF');
                    valid = false;
                }
                if (!$("#userEmail").val()) {
                    $("#userEmail-info").html("(required)");
                    $("#userEmail").css('background-color', '#FFFFDF');
                    valid = false;
                }
                if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#userEmail-info").html("(invalid)");
                    $("#userEmail").css('background-color', '#FFFFDF');
                    valid = false;
                }
                if (!$("#subject").val()) {
                    $("#subject-info").html("(required)");
                    $("#subject").css('background-color', '#FFFFDF');
                    valid = false;
                }
                if (!$("#content").val()) {
                    $("#content-info").html("(required)");
                    $("#content").css('background-color', '#FFFFDF');
                    valid = false;
                }

                return valid;
            }
        </script>


    <!-- Carousel -->
    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <h3>Cold Mail Templetes</h3>
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#imageCarousel" data-slide-to="1"></li>
        <li data-target="#imageCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/4.png" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="img/5.png" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="img/6.png" class="d-block w-100" alt="Image 3">
        </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Manual slide buttons -->
    <div class="container text-center mt-3">
        <button class="btn btn-primary mx-1" onclick="$('#imageCarousel').carousel(0)">1</button>
        <button class="btn btn-primary mx-1" onclick="$('#imageCarousel').carousel(1)">2</button>
        <button class="btn btn-primary mx-1" onclick="$('#imageCarousel').carousel(2)">3</button>
    </div>
  
  
    <?php include 'mainFooter.php'; ?>
  

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="coldMail.js"></script>
    
    <!-- Bootstrap JS and dependencies (jQuery and Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

</html>