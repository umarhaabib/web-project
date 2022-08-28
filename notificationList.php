<?php
include 'head.php';
include 'header.php';
include 'db.php';
?>

<div id="layoutSidenav" style="display: block;">
    <div id="">
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4 " style="margin-top: 50px;">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                   Open University Walking Club
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mt-4">
                                <!-- show all posts -->
                                <div class="card mb-4">
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-n10">
                <div class="row">
                    <div class="col-xxl-4 col-xl-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body h-100 p-5">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-xxl-12">
                                        <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                            <h1 class="text-primary">Welcome to club members</h1>
                                            <p class="text-gray-700 mb-0">The way a team plays as a whole determines its
                                                success. You may have the greatest bunch of individual stars in the
                                                world, but if they don't play together, the club won't be worth a dime!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                            src="public/assets/img/illustrations/at-work.svg"
                                            style="max-width: 26rem" /></div>
                                    <div class="card-body custom-card bg-light pt-0 pb-0 mt-5">
                                        <div class="row ">
                                           <!-- notification list -->
                                           <div class="m-timeline-3">
                    <div class="m-timeline-3__items">
                        
                             
                            
                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                    <span class="m-timeline-3__item-time m--regular-font-size-" style="width:55px">
                                        May
                                        18
                                        <span class=" text-info ">2022</span>
                                    </span>
                                    <div class="m-timeline-3__item-desc">
                                        
                                        <div>
                                            <span class="m-timeline-3__item-text">
                                                                                              
                                                <a id="MainContent_Scrolling_News1_gvNews_lnkNews_1" title="View" class="newstext m--font-bolder" href="javascript:__doPostBack('ctl00$MainContent$Scrolling_News1$gvNews$ctl01$lnkNews','')">ONE-TIME/SEMESTER ENROLLMENT RELAXATION - Enrollment in leftover courses for completing the study program for the students who completed maximum duration</a>   
                                                 
                                            </span>
                                        </div>

                                        <span class="m-timeline-3__item-user-name">
                                            <span class="m-link m-link--metal m-timeline-3__item-link">May 18, 2022</span>                                       									
                                        </span>
                                    </div>
                                </div>
                            
                               
                            
                    </div>
                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
    </div>
</div>

<style>




    .m-footer--fixed.m-footer--push.m-aside-left--enabled.m-aside-left--minimize .m-footer {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        left: 80px;
    }

    .m-footer--push.m-aside-left--enabled:not(.m-footer--fixed) .m-footer {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        margin-left: 255px;
        margin-top: -60px;
    }

    .m-footer--push.m-aside-left--enabled:not(.m-footer--fixed).m-aside-left--minimize .m-footer {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        margin-left: 80px;
    }

    .m-footer--push.m-aside-left--enabled:not(.m-footer--fixed) .m-aside-right,
    .m-footer--push.m-aside-left--enabled:not(.m-footer--fixed) .m-wrapper {
        margin-bottom: 60px;
    }
}

@media (min-width: 993px) and (max-width: 1200px) {
    .m-footer .m-footer__nav .m-nav__item {
        padding: 0 0 0 10px;
    }

        .m-footer .m-footer__nav .m-nav__item:first-child {
            padding-left: 0;
        }
}

@media (max-width: 992px) {
    .m-footer {
        height: auto;
        padding: 7px 20px;
    }

        .m-footer .m-stack__item {
            text-align: center;
        }

        .m-footer .m-footer__copyright {
            display: inline-block;
            margin-bottom: 1rem;
        }

        .m-footer .m-footer__nav {
            text-align: center;
            float: none;
            margin: 0 auto;
        }
}

/*********************************Custom CSS****************************/
.Accounttbl .row .divborder {
    background: #716aca;
    color: #ffffff;
    border-bottom: 0;
    border-top: 0;
    font-weight:500;
    font-size:14px;
    text-align:center;
     border-top:1px solid #716aca !important;
    border:1px solid #847fc6;  
    padding-top:10px;
    padding-bottom:10px;
}
.LSCourseHeading {
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: uppercase;
    margin-top: 0.75rem;
    color: #575962;
}

.LSMainHeadingColor {
    color: #767780;
    font-weight: 700;
}

.LSDiv {
    /*background: red;*/
    border: 1px solid #d8d8d9;
    width: 80%;
    padding: 10px;
    margin: 0 auto;
    -webkit-box-shadow: 0px 1px 7px 7px rgba(69, 65, 78, 0.08);
    -moz-box-shadow: 0px 1px 7px 7px rgba(69, 65, 78, 0.08);
    box-shadow: 0px 1px 7px 7px rgba(69, 65, 78, 0.08);
}

.LSlblColor:before {
    content: "• ";
    line-height: 0 !important;
    font-size: 50px;
}

.tblWidth {
    width: 99%;
}

.newstext {
    color: black !important;
    cursor: pointer;
}

.newstext:hover {
    color: #1645f1 !important;
}

.grdviewHeader {
    color: white !important;
    background-color: #716aca !important;        
    border-top:1px solid #716aca !important;
    border:1px solid #847fc6;   
    font-family:Poppins !important;
    text-align:center;
    
}
 .grdviewHeader th
    {
        font-size: 14px;
        font-weight: 500 !important;
    }
.gvSemesterHeading {    
    /*color:white;*/
   font-weight:500;
   padding:1rem;
  
}
.grdviewRowPadding {
    padding:0.75rem;
}
.textdecoration {
    text-decoration: none !important;
}

.divNote {
    border: 1px solid #ebebeb;
    box-shadow: 0 0 8px 0px #d9d7d7;
}

.Note-separator {
    margin: 10px 0px;
    border: 1px dashed #a3a3a3;
}

@media (max-width: 1450px) {
    .LSDiv {
        width: 85%;
    }
}

@media (max-width: 1350px) {
    .LSDiv {
        width: 100%;
    }
}
.img-container-zoom .img-zoom {
    transform-origin: 0 0;
    transition: transform .13s, visibility .13s ease-in;
}

.img-zoom:hover {
    filter: invert(70%);
    -webkit-filter: invert(70%);
    transform: scale(1.1);
}
@media (min-width: 1800px) {
    .m-reset {
        margin-left: -1.5vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (min-width: 1200px) and (max-width: 1799px) {
    .m-reset {
        margin-left: -2vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (min-width: 950px) and (max-width: 1199px) {
    .m-reset {
        margin-left: -2.5vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (min-width: 750px) and (max-width: 949px) {
    .m-reset {
        margin-left: -3.5vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (min-width: 550px) and (max-width: 749px) {
    .m-reset {
        margin-left: -4.5vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (min-width: 350px) and (max-width: 549px) {
    .m-reset {
        margin-left: -6.5vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
@media (max-width: 349px) {
    .m-reset {
        margin-left: -9vw;
        margin-top: -1px;
        position: absolute;
        z-index: 100;
    }
}
/*-------LessonViewer Noureen--------*/
.formativeAssessment {
    min-height: 50vh !important;
    height: auto !important;
}
.formativeAssessmentQuiz {
    height: 80vh !important;
}

#pnlQuizStart .m--padding-top-10 {
    padding: 4px !important;
}

#ClientBodyContentsStartsHere iframe {
    min-height: 93vh;
    max-height: 100%;
}
#m_ver_menu .m-menu__item.m-menu__item--submenu{
	background:none !important;
	}
	#m_ver_menu a:hover .m-menu__link-text,#m_ver_menu .m-menu__link:active a{ color:#f5f5f5 !important;}
	#m_ver_menu .m-menu__link:hover,#m_ver_menu .m-menu__link:active,#m_ver_menu .m-menu__item.m-menu__item--submenu:active{ background:rgba(165, 165, 165, 0.59) !important;}
	
	.m-menu__item.m-menu__item--submenu a:hover i{color:#f5f5f5 !important;}
	img.pull-right {
    position: relative;
    top: 0;
    z-index: 9999;
    right: 0
	}
#m_ver_menu .m-menu__item.m-menu__item--submenu.current {
    background: rgba(165, 165, 165, 0.59) !important;
}
</style>