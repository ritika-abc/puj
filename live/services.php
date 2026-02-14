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
            height: 400px;
            border-radius: 10px;
            border:2px solid #61010133;
            transition: 0.5s;
            transform: translateY(0px);

        }
        .b:hover {
            background-color: white;
            height: 400px;
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
        <div class="text-center">
            <h1 class="title-font"><a href="#" class="title-hover text-dark my-5 d-block delay03">Our Services</a></h1>
        </div>
        <div class="container">
            <div class="row  ">
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p1.jpg" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Saree Manufacturing</h3>
                            <p>We produce high-quality sarees in a variety of fabrics, patterns, and designs. From traditional styles to modern trends, our sarees are crafted with precision and superior finishing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p2.jpg" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Kurti Manufacturing</h3>
                            <p>Our kurtis are designed to meet contemporary fashion demands while maintaining comfort and durability. We offer bulk production in multiple sizes, fabrics, and design variations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p3.jpg" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Salwar Set Manufacturing</h3>
                            <p>We manufacture elegant and comfortable salwar sets with coordinated designs, quality stitching, and premium fabrics suitable for wholesale markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p4.png" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Private Label & OEM Manufacturing</h3>
                            <p>We support brands with private labeling and custom manufacturing services, helping businesses build their own brand identity with reliable production support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p5.png" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Bulk & Wholesale Supply</h3>
                            <p>We are fully equipped to handle large-volume orders with efficient production planning and consistent quality control.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4  my-3 ">
                    <div class="b">
                        <div class="shape-box">
                            <img src="image/p6.jpg" height="300px" width="100%" class="obj" alt="">
                        </div>
                        <div class="content-box-a  px-3  text-center ">
                            <h3>Custom Design & Fabric Sourcing</h3>
                            <p>Our team assists clients in selecting fabrics, creating customized designs, and developing collections tailored to specific market requirements.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="my-5">
            <video src="Our Global Reach (1).mp4" class="obj" height="auto" width="100%" autoplay muted loop type="video/mp4"></video>
        </div>
    </section>

    <?php

    include "footer.php";
    ?>