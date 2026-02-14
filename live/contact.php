<?php

include "nav.php";
?>
<main class=" ">
    <style>
        .shape-box {
            height: 200px;
            width: 200px;
            overflow: hidden;
            margin: auto;
            border-radius: 50%;
            border:2px solid #ffffff;

            margin-top: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .shape-box img {
            transition: 0.5s;
            transform: scale(1);
        }

        .b {
              background-color: #610101 !important;
            color: white;
            background-color: white;
            height: 200px;
            border-radius: 10px;
            border:2px solid #61010133;
            transition: 0.5s;
            transform: translateY(0px);
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .b:hover {
            background-color: white;
           
            border-radius: 10px;
            background-color: #360303 !important;
            color: white;
            border: 2px solid #610101;
             transform: translateY(-10px);
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .b:hover .shape-box {
            
            border:2px solid #ffffff;

            
        }


        .b:hover img {
            transition: 0.5s;
            transform: scale(1.1);
        }
    </style>

    <video src="image/banner/services.mp4" class="obj" height="300px" width="100%" autoplay muted loop type="video/mp4"></video>
    <section class="my-6">
       
        <div class="container">
            <div class="row  ">
                
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Call Now</h3>
                            <hr>
                            <p class="h4">+91 8436423228    </p>
                            <p class="h4"> +91  9851053042 </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Address</h3>
                            <hr>
                            <p class="h4">Hooghly, West Bengal, India </p>
                        
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Email Address</h3>
                            <hr>
                            <p class="h4">Pabitra.poddar@gmail.com </p>
                        
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   <section>
    <div class="container">
        
    </div>
   </section>
 

    <?php

    include "footer.php";
    ?>