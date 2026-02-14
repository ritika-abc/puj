<?php
include "nav.php";

?>
    <main>
          
<img src="image/banner/product.jpg" height="auto" width="100%" alt="">

      

       <div class="my-6">
         <div class="container margin_bottom_130 section-bestseller-home1">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-font capital margin_bottom_10 title-bestseller">Our Products</h1>
                    <p class="des-font margin_bottom_50 des-bestseller">At Puja Enterprise, we specialize in
                        manufacturing high-quality ethnic wear that combines traditional elegance with modern trends.
                        Our products are crafted with care, ensuring comfort, durability, and style for every wearer.
                    </p>
                    <div class="row">
                       <?php
                include "config.php";

                $sel = "SELECT * from `pro`";
                $q = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($q)) {
                ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 my-3">
                            <div class="product h-100">
                                <div class="pro_img">
                                    <img src="image/pro/<?php echo $row['image'] ?>" height="100%" class="obj" width="100%" alt="<?php echo $row['name'] ?>">
                                </div>
                                <div class="py-3">
                                    <h4 class="mt-3 mb-2 text-capitalize"><?php echo $row['name'] ?>
                           </h4>
                                    <a href="" class="btn-grad">Enquire Now</a>
                                </div>
                            </div>
                        </div>
  <?php } ?>
                    </div>
                </div>
            </div>
        </div>
       </div>


    </main>
 
<?php

include "footer.php"
?>