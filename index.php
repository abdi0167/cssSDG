<?php get_header(); ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="./images/logo.png" alt="CSS Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
                            <i class="fas fa-bars"></i>
						</span>
					</button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarNav',
                                'menu_class'        => 'navbar-nav nav-fill w-100',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
        </div>
    </div>
    <!--end of container-->
</nav>


</header>

<!--     HERO IMAGE / SLIDER     -->

<div id="carouselCSS" class="carousel slide" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carouselFood" data-slide-to="0" class="active"></li>
        <li data-target="#carouselFood" data-slide-to="1"></li>
    </ol>

    <!--Wrapper for slides-->
    <div class="carousel-inner" role="listbox">
        <!--Items and Captions for the Carosuel-->
        <!--ITEM #1-->

        <div class="carousel-item active">
            <img class="d-block h-25 w-100 contrast" src="<?php bloginfo( 'template_url' ); ?>/images/homepage-banner.jpg" alt="First carousel slide">
            <div class="carousel-caption d-md-block">
                <h1 class="display-4">Walk-in Counselling Services Now Available</h1>
                <button class="btn light-blue-theme white-text"><a href="programs_services.html" class="nav-link-sub">Learn More</a></button>
            </div>
        </div>

        <!--ITEM #2-->

        <div class="carousel-item">
            <img class="d-block w-100 contrast" src="<?php bloginfo( 'template_url' ); ?>/images/WIC.jpg" alt="Second carousel slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">E-Counselling Now Available</h1>
                <button class="btn light-blue-theme white-text"><a href="https://app.oncallhealth.ca/booking/css/" class="nav-link-sub">Learn More</a></button>
            </div>
        </div>

    </div>

    <!--end of carousel inner-->

    <!--Forward and Previous icons for the carousel-->
    <a class="carousel-control-prev" href="#carouselCSS" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

    <a class="carousel-control-next" href="#carouselCSS" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<!--end of caro-->





<!--    WELCOME TO SDG    -->
<div class="container welcome">

    <div class="row">
        <div class="d-none d-md-block col">
            <img src="<?php bloginfo( 'template_url' ); ?>/images/welcome-image-1.jpg" class="img-fluid rounded" alt="">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">
            <h2 class="centered"> Welcome to S.D. &amp; G.</h2>

            <p class="welcome-text">
                Counselling and Support Services of S.D. &amp; G. is a multi-service, non-profit, accredited organization providing a range of support and services to children, youth, adults and families in the city of Cornwall and the counties of Stormont, Dundas and Glengarry.
            </p>

            <div class="btn-center">
                <button class="btn light-blue-theme white-text"><a href="about.html" class="nav-link-sub">Read More</a></button>
            </div>

        </div>
    </div>


</div>


<div class="container-fluid services">
    <div class="col-12">
        <h2 class="services centered"> OUR SERVICES </h2>

    </div>

    <!-- TABBED NAVIGATION -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active service-tab" id="clinical-tab" data-toggle="tab" href="#clinical-services" role="tab" aria-controls="clinical-services" aria-selected="true">Clinical Services</a>

            <a class="nav-item nav-link service-tab" id="community-tab" data-toggle="tab" href="#community-services" role="tab" aria-controls="community-services" aria-selected="false">Community Support Services</a>
        </div>


        <!-- CLINICAL  SERVICES -->

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="clinical-services" role="tabpanel" aria-labelledby="clinical-tab">
                <!--     OUR SERVICES     -->
                <div id="clinical-services">

                    <div class="row no-gutters home-images">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/GC.jpg" alt="" id="gcBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">General Counselling (Individual/Family)
                                </h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/VAM.jpg" alt="" id="vawBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Violence Against Women (VAW) Counselling</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/EAP.jpg" alt="" id="eapBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Employee Assistance Program (EAP)</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/PAR.jpg" alt="" id="parBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Changing Directions (PAR)</h4>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/CCK.jpg" alt="" id="cckBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Creative Coping for Kids (CCK)</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/WIC.jpg" alt="" id="wicBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">The Walk-In Counselling Clinic</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/MSSA.jpg" alt="" id="mssaBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Male Survivors of Sexual Assault (MSSA)</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/CC.jpg" alt="" id="ccBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Cyber-Counselling</h4>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- COMMUNITY SUPPORT SERVICES -->
            <div class="tab-pane fade" id="community-services" role="tabpanel" aria-labelledby="community-tab">

                <div id="community-support-services">
                    <div class="row no-gutters home-images">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/SCM.jpg" alt="" id="scmBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Specialized Case Management
                                </h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/TAY.jpg" alt="" id="tayBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Transitional Aged Youth</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/BS.jpg" alt="" id="bsBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Brokerage Services</h4>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/UR.jpg" alt="" id="urBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Urgent Response</h4>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/CCB.jpg" alt="" id="ccbBtn" class="img-fluid contrast obj-fit">
                            <div class="img-title">
                                <h4 class="white-text">Community Capacity Building</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Community Support Services-->
            </div>
        </div>
    </nav>

</div>
<!--END OF SERVICES -->

<!-- MODAL POP OVERAY - EXPLAINING THE SERVICES WHAT WERE CLICKED ON -->
<div class="modals">
    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="gcModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">General Counselling</h4>
                        </div>

                        <div class="modal-body">
                            <p>Counselling and Support Services of S.D. &amp; G. offers bilingual counselling and support services to individuals, couples, parents and families for the purpose of alleviating problem situations and encouraging positive personal growth. The agency experienced counsellors and case managers are committed to promoting individual, partner, parental and family well being. This support leads to healthy relationships and strong communities.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="modal fade" id="vawModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Violence Against Women (VAW) Counselling</h4>
                        </div>

                        <div class="modal-body">
                            <p>This program provides confidential, safe and supportive counselling to individual and at times group to women and children who have been or are victims of violence in a relationship. This service lets woman talk and explore their options. We do not judge women or tell them what to do. Violence can take many forms. Counselling services are women and child centered.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="eapModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Employee Assistance Program (EAP)</h4>
                        </div>

                        <div class="modal-body">
                            <p>An EAP Program provides voluntary counselling services. Professional counselors work confidentially with employees and/or their families to support them in coping with a wide array of life’s challenges that could be work-related, family concerns or personal issues.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="parModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Changing Directions (PAR)</h4>
                        </div>

                        <div class="modal-body">
                            <p>The Partner Assault Response (P.A.R.) Program is a province-wide Domestic Violence Court initiative that delivers specialized community-based group intervention programming to domestic violence offenders who have been court mandated to attend. Our Cornwall and area P.A.R. program is called the Changing Direction Program.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="cckModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Creative Coping for Kids (CCK)</h4>
                        </div>

                        <div class="modal-body">
                            <p>Creative Coping for Kids is a response to an identified need to assist children and their mothers who have experienced family violence. This is an 6 week program with a 3 hour session each week. The group is for children who have witnessed mom being abused physically, emotionally and/or verbally by the partner and who want to help their children deal with the impact of the abuse they have witnessed.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="modal fade" id="wicModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Walk-In Counselling Clinic</h4>
                        </div>

                        <div class="modal-body">
                            <p>Offering no-fee, single-session counselling to individuals, couples, and families on a first come, first served basis on Thursdays from 1:00 PM to 8:00 PM (last session at 6:30 PM). No appointment is necessary. No referrals required. Everyone is welcome!</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="modal fade" id="mssaModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Male Survivors of Sexual Assault (MSSA)</h4>
                        </div>

                        <div class="modal-body">
                            <p>Group therapy sessions will permit men to provide support to one another during their time of healing, as they learn healthy coping strategies to deal with the trauma of their childhood experiences. All sessions are confidential and provide a safe environment.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="parModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Changing Directions (PAR)</h4>
                        </div>

                        <div class="modal-body">
                            <p>The Partner Assault Response (P.A.R.) Program is a province-wide Domestic Violence Court initiative that delivers specialized community-based group intervention programming to domestic violence offenders who have been court mandated to attend. Our Cornwall and area P.A.R. program is called the Changing Direction Program.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ccModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Cyber-Counselling</h4>
                        </div>
                        <div class="modal-body">
                            <h3>
                                *NEW* Cyber Counselling Available!
                            </h3>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="https://app.oncallhealth.ca/booking/css/" class="white-text">Click Here!</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="scmModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Specialized Case Management</h4>
                        </div>

                        <div class="modal-body">
                            <p>The Case Management program is a specialized community-based support program for adults with an intellectual disability or a dual diagnosis (adults with a developmental disability and mental health needs), who have little or no supports. Services and supports are person-centered and person-directed. A Case Manager/Planner can assist individuals in accessing the necessary supports and services from various service systems available in their community in order to participate fully in all aspects of life.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="tayModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Transitional Aged Youth</h4>
                        </div>

                        <div class="modal-body">
                            <p>The Case Manager/Planner along with members of the individual’s support network will develop an Individualized Support Plan reflecting the individual’s goals and needs. The Case Manager/Planner will strive to secure the necessary supports and services required from local service providers as identified in the plan.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="bsModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Brokerage Service</h4>
                        </div>

                        <div class="modal-body">
                            <p>
                                The Ministry of Community and Social Services offers the Passport program across the province of Ontario. Passport is a program that helps people with a developmental disability live as independently as possible in their communities. Individuals with a developmental disability (or their families) can apply for funding to support their personal development and growth.</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="urModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Urgent Response Program</h4>
                        </div>

                        <div class="modal-body">
                            <p>
                                The Adult Developmental Services Urgent Response Guildelines were implemented in June 2014 for adults with a developmental disability in urgent need where natural or community supports are not available. The Agency's Community Support Services was chosen by MCSS to deliver this provincial initiative in Cornwall and the United Counties of SDG, known as the Urgent Response Lead..</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <button class="btn light-blue-theme"><a href="#" class="white-text">Learn More</a></button>

                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ccbModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title">Community Capacity Building</h4>
                        </div>

                        <div class="modal-body">
                            <p>
                                Information coming soon!</p>
                        </div>

                        <div type="button" class="modal-footer">
                            <div data-dismiss="modal">
                                <button class="btn btn-default">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








        </div>
        <!-- End of Column for Modals-->
    </div>
    <!-- End of Row for Modals -->
</div>
<!-- End of Modals -->

<!--    MISSION STATEMENT      -->
<!--  Blue Banner      -->
<div class="mission-statement light-blue-theme">
    <h1 class="white-text mission-text">
        "Empowering individuals towards a better wellbeing..."
    </h1>
</div>

<!--    ACCREDITED STATEMENT     -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="accredited-text">Accredited to Serve You Better.
                <br> CSS has been an accredited agency since ____.</h2>

            <p>
                Counselling and Support Services of S.D. &amp; G. is a multi-service, non-profit, accredited organization providing a range of support and services to children, youth, adults and families in the city of Cornwall and the counties of Stormont, Dundas and Glengarry.
            </p>
        </div>
    </div>

    <!--    LATEST NEWS      -->
    <div class="row latest-news">
        <div class="col-12">
            <h2 class="news-title centered">Latest News</h2>
        </div>
    </div>


    <!-- NEWS / POST CARDS -->
    <div class="row">
        <div class="col-md-4">

            <!-- CARD #1 -->
            <div class="card">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/PAR.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Lastest News</h5>

                    <p class="card-text">
                        S.D. &amp; G. Developmental Services Centre &amp; Counselling and Support Services of S.D. &amp; G. are joining together as one agency!
                    </p>

                    <a href="#" class="light-blue-text">Read More</a>
                </div>
            </div>
        </div>

        <!-- CARD #2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/PAR.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Lastest News</h5>

                    <p class="card-text">
                        S.D. &amp; G. Developmental Services Centre &amp; Counselling and Support Services of S.D. &amp; G. are joining together as one agency!
                    </p>

                    <a href="#" class="light-blue-text">Read More</a>
                </div>
            </div>
        </div>


        <!-- CARD #3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/PAR.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Lastest News</h5>

                    <p class="card-text">
                        S.D. &amp; G. Developmental Services Centre &amp; Counselling and Support Services of S.D. &amp; G. are joining together as one agency!
                    </p>

                    <a href="#" class="light-blue-text">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>
<!--   PARTNERS       -->
<div class="container">
    <div class="row partners">
        <div class="col-12">
            <h2 class="partners-title centered">Partners/Funders</h2>
        </div>
    </div>

    <div class="row resource-partners">
        <div class="col-md-3">
            <a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/FSOLogo.jpg" alt="" class="img-fluid"></a>
        </div>
        <div class="col-md-3">
            <a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/ontario.jpg" alt="" class="img-fluid"></a>
        </div>
        <div class="col-md-3">
            <a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/trillium.jpg" alt="" class="img-fluid"></a>
        </div>
        <div class="col-md-3">
            <a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/united_way.jpg" alt="" class="img-fluid"></a>
        </div>
    </div>
</div>



<?php get_footer(); ?>
