<?php if (isset($_GET['katipunan1'])){?>
    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
        <div class="single-grid-left-grid">
            <div class="gallery ">
                <h3 class="animated wow zoomIn" data-wow-delay=".5s">Leasing Services</h3>
                <p class="qui animated wow zoomIn" data-wow-delay=".5s">Description about Leasing Service</p>
                <div class="gallery-grids">
                    <div class="gallery-grids1">
                        <div class="gallery-grid animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/1.jpg" class="big">
                                <img src="images/salcedo/1.jpg" style="width: 640px;height: 190px;" alt=" " title="Quisz autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/5.jpg" class="big">
                                <img src="images/salcedo/5.jpg" style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/6.jpg" class="big">
                                <img src="images/salcedo/6.jpg" style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/7.jpg" class="big">
                                <img src="images/salcedo/7.jpg"  style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="gallery-grids1">
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/8.jpg" class="big">
                                <img src="images/salcedo/8.jpg"  style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/2.jpg" class="big">
                                <img src="images/salcedo/2.jpg"  style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/3.jpg" class="big">
                                <img src="images/salcedo/3.jpg"  style="width: 640px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="gallery-grid-left animated wow slideInUp" data-wow-delay=".5s">
                            <a href="images/salcedo/4.jpg" class="big">
                                <img src="images/salcedo/4.jpg"  style="width: 550px;height: 190px;" alt=" " title="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil." class="img-responsive" />
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--											Start Page Details-->
                <div class="single-grid-left-grid1">
                    <div class="single-grid-left-grid1-left">
                        <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                    </div>
                    <div class="single-grid-left-grid1-right">
                        <h4>Trevi Vista</h4>
                        <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true">106 L.P. Leviste Street,Salcedo Village,Makati City,1227 </p>
                    </div>
                    <div class="clearfix"> </div>
                    <p class="fugiat">
                        Our condominium developments offer amenities the Global Filipinos need to live the life they've always dreamed and worked hard for.
                        Every unit option, from studios to two-bedroom units, are designed with the same attention to detail and space-planning expertise.
                    </p>
                    PLACES NEARBY:
                    <ul>
                        <!--													<li>PLACES NEARBY</li>-->
                        <li><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a></li>
                        <li><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</li>
                    </ul>
                </div>
                <!--											End Page Details-->


                <script type="text/javascript" src="js/simple-lightbox.min.js"></script>
                <script>
                    $(function(){
                        var gallery = $('.gallery a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
                    });
                </script>
            </div>

        </div>

        <!--FlexSlider-->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>

        <!--End-slider-script-->
    </div>
<?php } ?>

<?php if (isset($_GET['katipunan'])){?>
    <br>
    <br>
                    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="single-grid-left-grid">
                                            <img src="images/katipunan/katipunan.jpg" alt=" " class="img-responsive" style="height: 500px" />
                                            <div class="single-grid-left-grid1">
                                                <div class="single-grid-left-grid1-left">
                                                    <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                                                </div>
                                                <div class="single-grid-left-grid1-right">
                                                    <h4>Pointe Katipunan</h4>
                                                    <p> Katipunan Avenue cor. B.Gonzales, Quezon City 1105</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                                <p class="fugiat text-justify">Vista Pointe Katipunan will soon tower over Quezon City’s U-Belt at the corner of Katipunan and B.Gonzales Street-
                                                    almost directly in front of Miriam College and Ateneo de Manila. With the Light Railway Transit (LRT 2) a brisk walk away,
                                                    residents will enjoy easy access to the rest of QuezonCity and most of Metro Manila. Behind Katipunan Avenue
                                                    are residential villages, offering a perimeter of quiet andsafety, as well as the places of worship found within
                                                    local communities. Further down Katipunan sprawls the U.P. Town Center allowing residents even more
                                                    lifestyle options and a place to de-stress and bond.
                                                    <br><br>

                                                    Vista Pointe Katipunan’s triangular footprint makes perfect use of the three-sided, over 1,000 square-meter property.
                                                    The vertical village will rise up to 37 storeys with six for parking, two for businesses, the ground floor for commercial,
                                                    and another floor fpr an amenities area. The remaining 27-storeys will be residential, with 24 units per floor.
                                                    The unit sizes range from 18.23 to 24.42 square-meter studios, to 27.71 to 30.96 square-meter one bedroom residences -
                                                    each complete with a study and dining area, kitchen, and toilet and bath.</p>

                                                PLACES NEARBY:
                                                <ul>
                                                    <!--													<li>PLACES NEARBY</li>-->
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="Ateneo de Manila University <br/>
                                                            Miriam College <br/>
                                                            UP Diliman <br/>
                                                            CCA "
                                                            data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="LRT Line 2 "
                                                            data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="Rustan's Supermarket <br/>
                                                            Shoppersville"
                                                            data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="UP Town Center <br/>
                                                            Trinoma <br/>
                                                            SM North Edsa <br/>
                                                            Gateway Mall"
                                                            data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="The Old Spaghetti House <br/>
                                                            Flaming wings <br/>
                                                            Banapple <br/>
                                                            IHOP <br/>
                                                            Cravings <br/>
                                                            Cafe Sweet Inspiration <br/>
                                                            Katsu Cafe"
                                                            data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="Quirino Memorial Medical Center <br/>
                                                            Sta. Monica Hospital <br/>
                                                            Philippine Heart Center <br/>
                                                            Immaculate Concepcion Hospital"
                                                            data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a>
                                                    </li>
                                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                                            data-content="Sta.Maria della Strada Parish <br/>
                                                            Monasterio dela Sta. Clara <br/>
                                                            Victory Quezon City <br/>
                                                            Our Lady Of Pentecost Church"
                                                            data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                            </div>
                        </section>
                        <!--FlexSlider-->
                        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                        <script defer src="js/jquery.flexslider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function(){
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                        $('body').removeClass('loading');
                                    }
                                });
                            });
                        </script>
                        <!--End-slider-script-->
                    </div>

    <br><br>
<?php } ?>

<?php if (isset($_GET['brenthill'])){?>
    <br>
    <br>
    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="single-grid-left-grid">
                            <img src="images/brenthill/brenthill.jpg" alt=" " class="img-responsive" style="height: 500px" />
                            <div class="single-grid-left-grid1">
                                <div class="single-grid-left-grid1-left">
                                    <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                                </div>
                                <div class="single-grid-left-grid1-right">
                                    <h4>Brenthill Baguio</h4>
                                    <p> 9 Yangco Road, Upper Pacdal, Baguio City 2600</p>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="fugiat text-justify">Vista Brenthill Baguio will rise on a 2,694 sqm. lot in an exclusive enclave on Yangco Road -
                                    yet still easily accessed by both public and private transportation. The location, while quieter and greener,
                                    is very near Session and Leonard Wood Roads, and across the expansive Brent International School Campus.
                                    <br><br>
                                    Brenthill's location puts it conveniently close to main landmarks likethe Baguio Cathedral, the Public Market,
                                    Teacher’s Camp, the Pink Sisters, and the Botanical Gardens. Camp John Hay and the Baguio Country Club
                                    are an easy 15 minutes away and Burnham Park is even closer and takes a scenic ten-minute drive.</p>

                                PLACES NEARBY:
                                <ul>
                                    <!--													<li>PLACES NEARBY</li>-->
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                               data-content="Ateneo de Manila University <br/>
                                                            Miriam College <br/>
                                                            UP Diliman <br/>
                                                            CCA "
                                            data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="LRT Line 2 "
                                            data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Rustan's Supermarket <br/>
                                                            Shoppersville"
                                            data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="UP Town Center <br/>
                                                            Trinoma <br/>
                                                            SM North Edsa <br/>
                                                            Gateway Mall"
                                            data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="The Old Spaghetti House <br/>
                                                            Flaming wings <br/>
                                                            Banapple <br/>
                                                            IHOP <br/>
                                                            Cravings <br/>
                                                            Cafe Sweet Inspiration <br/>
                                                            Katsu Cafe"
                                            data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Quirino Memorial Medical Center <br/>
                                                            Sta. Monica Hospital <br/>
                                                            Philippine Heart Center <br/>
                                                            Immaculate Concepcion Hospital"
                                            data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Sta.Maria della Strada Parish <br/>
                                                            Monasterio dela Sta. Clara <br/>
                                                            Victory Quezon City <br/>
                                                            Our Lady Of Pentecost Church"
                                            data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
            </div>
        </section>
        <!--FlexSlider-->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <!--End-slider-script-->
    </div>

    <br><br>
<?php } ?>

<?php if (isset($_GET['vistaheights'])){?>
    <br>
    <br>
    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="single-grid-left-grid">
                            <img src="images/vistaheights/vistaheights.jpg" alt=" " class="img-responsive" style="height: 500px" />
                            <div class="single-grid-left-grid1">
                                <div class="single-grid-left-grid1-left">
                                    <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                                </div>
                                <div class="single-grid-left-grid1-right">
                                    <h4>Vista Heights</h4>
                                    <p> Nepomuceno Street corner C. Aguilla, Manila</p>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="fugiat text-justify">Reach new investment heights with Vista Heights, an eight-storey, mid-rise building that has a total area of 2,210 square meters,
                                    towering along Nepomuceno St., corner C.Aguila, Manila, developed by Vista Residences, in partnership with First Tropicana, Inc.
                                    <br><br>
                                    Vista Heights provides a place that integrates learning and fun and with its clean and secured environment,
                                    parents can have peace of mind while giving their kids individual, social and academic independence.
                                    <br><br>
                                    With its convenient location, top-of-the-line amenities and efficiently-spaced units,
                                    investors are guaranteed of a sound investment with Vista Heights.

                                </p>

                                PLACES NEARBY:
                                <ul>
                                    <!--													<li>PLACES NEARBY</li>-->
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Ateneo de Manila University <br/>
                                                            Miriam College <br/>
                                                            UP Diliman <br/>
                                                            CCA "
                                            data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="LRT Line 2 "
                                            data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Rustan's Supermarket <br/>
                                                            Shoppersville"
                                            data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="UP Town Center <br/>
                                                            Trinoma <br/>
                                                            SM North Edsa <br/>
                                                            Gateway Mall"
                                            data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="The Old Spaghetti House <br/>
                                                            Flaming wings <br/>
                                                            Banapple <br/>
                                                            IHOP <br/>
                                                            Cravings <br/>
                                                            Cafe Sweet Inspiration <br/>
                                                            Katsu Cafe"
                                            data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Quirino Memorial Medical Center <br/>
                                                            Sta. Monica Hospital <br/>
                                                            Philippine Heart Center <br/>
                                                            Immaculate Concepcion Hospital"
                                            data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Sta.Maria della Strada Parish <br/>
                                                            Monasterio dela Sta. Clara <br/>
                                                            Victory Quezon City <br/>
                                                            Our Lady Of Pentecost Church"
                                            data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
            </div>
        </section>
        <!--FlexSlider-->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <!--End-slider-script-->
    </div>

    <br><br>
<?php } ?>

<?php if (isset($_GET['taft'])){?>
    <br>
    <br>
    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="single-grid-left-grid">
                            <img src="images/vistagltaft/taft.jpg" alt=" " class="img-responsive" style="height: 500px" />
                            <div class="single-grid-left-grid1">
                                <div class="single-grid-left-grid1-left">
                                    <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                                </div>
                                <div class="single-grid-left-grid1-right">
                                    <h4>Vista GL Taft</h4>
                                    <p> 1344 Taft Avenue Manila</p>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="fugiat text-justify">Located along Taft Avenue, Manila, the 42-storey tower is set to rise across
                                    the University of the Philippines – Manila and the Philippine General Hospital.
                                    <br><br>
                                    Offering studio and dorm-type units, Vista GL Taft will provide a safe environment that allows its residents
                                    to keep up with their school works and day-to-day activities. Providing round-the-clock security system,
                                    safety is the least of a parent’s worry in Vista GL Taft. Going to and from the school proves to be easy
                                    with a 24/7 commutable road and LRT stations nearby.
                                    <br><br>
                                    With its contemporary design, Vista GL Taft speaks of what’s young and innovative,
                                    bringing about a taste of the good life found in Vista GL Taft’s modern-day amenities.

                                </p>

                                PLACES NEARBY:
                                <ul>
                                    <!--													<li>PLACES NEARBY</li>-->
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Ateneo de Manila University <br/>
                                                            Miriam College <br/>
                                                            UP Diliman <br/>
                                                            CCA "
                                            data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="LRT Line 2 "
                                            data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Rustan's Supermarket <br/>
                                                            Shoppersville"
                                            data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="UP Town Center <br/>
                                                            Trinoma <br/>
                                                            SM North Edsa <br/>
                                                            Gateway Mall"
                                            data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="The Old Spaghetti House <br/>
                                                            Flaming wings <br/>
                                                            Banapple <br/>
                                                            IHOP <br/>
                                                            Cravings <br/>
                                                            Cafe Sweet Inspiration <br/>
                                                            Katsu Cafe"
                                            data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Quirino Memorial Medical Center <br/>
                                                            Sta. Monica Hospital <br/>
                                                            Philippine Heart Center <br/>
                                                            Immaculate Concepcion Hospital"
                                            data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Sta.Maria della Strada Parish <br/>
                                                            Monasterio dela Sta. Clara <br/>
                                                            Victory Quezon City <br/>
                                                            Our Lady Of Pentecost Church"
                                            data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
            </div>
        </section>
        <!--FlexSlider-->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <!--End-slider-script-->
    </div>

    <br><br>
<?php } ?>

<?php if (isset($_GET['recto'])){?>
    <br>
    <br>
    <div class="flex-slider-single animated wow slideInLeft" data-wow-delay=".5s">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="single-grid-left-grid">
                            <img src="images/vistarecto/recto.jpg" alt=" " class="img-responsive" style="height: 500px" />
                            <div class="single-grid-left-grid1">
                                <div class="single-grid-left-grid1-left">
                                    <h3><i class="glyphicon glyphicon-star"></i> <span>new</span></h3>
                                </div>
                                <div class="single-grid-left-grid1-right">
                                    <h4>Vista Recto</h4>
                                    <p> 1896 C.M. Recto, Quiapo, Manila 1001</p>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="fugiat text-justify">Vista Recto’s 36-storey high-rise tower will stand tall above the University Belt,
                                    surrounded by major universities like the Far Eastern University and University of the East, San Sebastian College
                                    and University of Sto. Tomas. An easy ride down C. M. Recto A venue and one finds Centro Escolar University,
                                    La Consolacion College and San Beda College.
                                    <br><br>
                                    The tower has a Garden Units floor where each residence has a balcony-cum-garden.
                                    Three floors are dedicated to covered parking while the ground floor, to a guarded reception and commercial area.
                                    Each studio unit comes complete with a living and dining area, kitchen, and bath.

                                </p>

                                PLACES NEARBY:
                                <ul>
                                    <!--													<li>PLACES NEARBY</li>-->
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Ateneo de Manila University <br/>
                                                            Miriam College <br/>
                                                            UP Diliman <br/>
                                                            CCA "
                                            data-html="true"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> School</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="LRT Line 2 "
                                            data-html="true"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> Transpo</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Rustan's Supermarket <br/>
                                                            Shoppersville"
                                            data-html="true"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Supermarket</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="UP Town Center <br/>
                                                            Trinoma <br/>
                                                            SM North Edsa <br/>
                                                            Gateway Mall"
                                            data-html="true"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Mall</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="The Old Spaghetti House <br/>
                                                            Flaming wings <br/>
                                                            Banapple <br/>
                                                            IHOP <br/>
                                                            Cravings <br/>
                                                            Cafe Sweet Inspiration <br/>
                                                            Katsu Cafe"
                                            data-html="true"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Resto</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Quirino Memorial Medical Center <br/>
                                                            Sta. Monica Hospital <br/>
                                                            Philippine Heart Center <br/>
                                                            Immaculate Concepcion Hospital"
                                            data-html="true"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Hospital</a>
                                    </li>
                                    <li><a  tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="What's Nearby"
                                            data-content="Sta.Maria della Strada Parish <br/>
                                                            Monasterio dela Sta. Clara <br/>
                                                            Victory Quezon City <br/>
                                                            Our Lady Of Pentecost Church"
                                            data-html="true"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Church</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
            </div>
        </section>
        <!--FlexSlider-->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <!--End-slider-script-->
    </div>

    <br><br>
<?php } ?>

