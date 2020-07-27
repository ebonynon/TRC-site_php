<?php $pageTitle = "Gallary" ; ?>
<!DOCTYPE html>
 
<html lang="en">

<head>
    <!-- page icon -->
    <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">

    <!-- page title -->
    <title><?php echo $pageTitle ; ?></title>

    <!-- metadata includes -->
    <?php include "../php_components/metadata_includes.php";?>

    <!-- stylesheet includes -->
    <?php include "../php_components/stylesheet_includes.php";?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- navigation bar -->
    <?php include "../php_components/navigation_bar.php";?>

    <!-- jumbotron -->
    <?php include "../php_components/saying.php";?>

    <!-- page content -->
    
    <div class="text-center">
    <!--Card Set-->
    <div class="container-fluid">
      <!--Card_Block00-->
      <div class="row px-2">
        <!--Card00-->
        <div class="col mx-2 pt-5 px-5 bg-dark mb-3" data-toggle="collapse" href="#collapse00" role="button" aria-expanded="false" aria-controls="collapse00">
          <h2 class="mt-3"><b>Thorana 2013</b></h2>
          <p class="lead mb-5">2015 cool team.</p>
          <img class="img-fluid d-block" src="assets/img/2013/img_2013 (1).jpg" width="" style="filter: grayscale(100%)">
        </div>
        <!--Card_Txt-->
        <div class="collapse" id="collapse00">
            <div class="card card-body">
              <!--Gallery-->
              <div class="container page-top">
                  <div class="row">
                    <?php $dir = 'assets/img/2013'; foreach (array_diff(scandir($dir), array('..', '.')) as $img) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 rounded img-fluid img-thumbnail d-block"> 
                            <a data-fancybox="gallery" href="<?php echo $dir."/".$img ?>"> 
                            <img  src="<?php echo $dir."/".$img ?>" class="img-fluid"> 
                            </a> 
                        </div>
                    <?php } ?>                       
                 </div>
              </div>
              <!--Gallery-->  
            </div>
        </div>
        <!--Card_Txt-->
        <!--Card00-->
        <!--Card01-->
        <div class="col mx-2 pt-5 px-5 bg-primary mb-3" data-toggle="collapse" href="#collapse01" role="button" aria-expanded="false" aria-controls="collapse01">
          <h2 class="mt-3"><b>Thorana 2014</b></h2>
          <p class="lead mb-5">2016 hot & sexy team.</p>
          <img class="img-fluid d-block" src="assets/img/2014/img_2014 (1).jpg" width="" style="filter: grayscale(100%)">
        </div>
        <!--Card01-->
        <div class="collapse" id="collapse01">
          <div class="card card-body">
            <!--Gallery-->
            <div class="container page-top">
                <div class="row">
                    <?php $dir = 'assets/img/2014'; foreach (array_diff(scandir($dir), array('..', '.')) as $img) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 rounded img-fluid img-thumbnail d-block"> 
                            <a data-fancybox="gallery" href="<?php echo $dir."/".$img ?>"> 
                        <img  src="<?php echo $dir."/".$img ?>" class="img-fluid"> 
                            </a> 
                        </div>
                    <?php } ?>
                </div>
            </div>
           </div>     
      </div>
      <!--Card_Block00-->
      <!--Card_Block01-->
      <div class="row px-2">
        <div class="col mx-2 pt-5 px-5 mb-3 bg-light" data-toggle="collapse" href="#collapse02" role="button" aria-expanded="false" aria-controls="collapse02">
          <h2 class="mt-3"><b>Thorana 2016</b></h2>
          <p class="lead mb-5">F team by P-Use.</p>
          <img class="img-fluid d-block" src="assets/img/2016/dis (1).jpg" width="" style="filter: grayscale(100%)">
        </div>
        <div class="collapse" id="collapse02">
            <div class="card card-body">
              <!--Gallery-->
              <div class="container page-top">
                  <div class="row">
                    <?php $dir = 'assets/img/2016'; foreach (array_diff(scandir($dir), array('..', '.')) as $img) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 rounded img-fluid img-thumbnail d-block"> 
                            <a data-fancybox="gallery" href="<?php echo $dir."/".$img ?>"> 
                            <img  src="<?php echo $dir."/".$img ?>" class="img-fluid"> 
                            </a> 
                        </div>
                    <?php } ?>                        
                    </div>
                  </div>
                 </div>     
            </div>  
        <div class="col mx-2 pt-5 px-5 mb-3 bg-secondary" data-toggle="collapse" href="#collapse03" role="button" aria-expanded="false" aria-controls="collapse03">
          <h2 class="mt-3"><b>Robotics</b></h2>
          <p class="lead mb-5">The first step toward future automation.</p>
          <img class="img-fluid d-block" src="assets/img/robot/img-R_23.jpg" width="" style="filter: grayscale(100%)">
        </div>
        <div class="collapse" id="collapse03">
            <div class="card card-body">
              <!--Gallery-->
              <div class="container page-top">
                  <div class="row">
                    <?php $dir = 'assets/img/robot'; foreach (array_diff(scandir($dir), array('..', '.')) as $img) { ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 rounded img-fluid img-thumbnail d-block"> 
                            <a data-fancybox="gallery" href="<?php echo $dir."/".$img ?>"> 
                            <img  src="<?php echo $dir."/".$img ?>" class="img-fluid"> 
                            </a> 
                        </div>
                    <?php } ?>
                 </div>
                </div>
               </div>     
          </div>    
      </div>
<!-- // 
      <div class="row px-2">
        <div class="col mx-2 pt-5 px-5 mb-3 bg-info">
          <h2 class="mt-3"><b>Another headline</b></h2>
          <p class="lead mb-5">And an even wittier subheading.</p>
          <img class="img-fluid d-block" src="assets/styleguide/people_3.jpg" width="">
        </div>
        <div class="col mx-2 pt-5 px-5 mb-3 bg-primary">
          <h2 class="mt-3"><b>Another headline</b></h2>
          <p class="lead mb-5">And an even wittier subheading.</p>
          <img class="img-fluid d-block" src="assets/styleguide/people_4.jpg" width="">
        </div>
      </div>
      <div class="row px-2">
        <div class="col mx-2 pt-5 px-5 mb-3 bg-light">
          <h2 class="mt-3"><b>Another headline</b></h2>
          <p class="lead mb-5">And an even wittier subheading.</p>
          <img class="img-fluid d-block" src="assets/styleguide/people_5.jpg" width="">
        </div>
        <div class="col mx-2 pt-5 px-5 mb-3 bg-light">
          <h2 class="mt-3"><b>Another headline</b></h2>
          <p class="lead mb-5">And an even wittier subheading.</p>
          <img class="img-fluid d-block" src="assets/styleguide/people_6.jpg" width="">
        </div>
      </div>
// --> 
    </div>
  </div>
  <!--Card Set-->
</body>

    <!-- footer -->
    <?php include "../php_components/footer_bar.php";?>

    <!-- javascript includes -->
    <?php include "../php_components/javascript_includes.php";?>

</html>
