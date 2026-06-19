<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sticky-header {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .mega-menu {
            position: absolute;
            left: 0;
            right: 0;
            display: none;
            width: 1000%;
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .mega-menu .col-md-6 ul {
            list-style: none;
            padding: 1rem;
        }
        .mega-menu .col-md-6 ul li {
            margin-bottom: 10px;
        }
        .dropdown:hover .mega-menu {
            display: block;
        }
        .main-header__top {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .main-header__top-address,
        .main-header__top-right {
            display: flex;
            align-items: center;
        }
        .main-header__top-address ul,
        .main-header__top-menu {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .main-header__top-address li,
        .main-header__top-menu li {
            margin-right: 20px;
        }
        .main-header__top-social a {
            margin-right: 10px;
        }
        .main-menu__list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .main-menu__list li {
            margin-right: 20px;
        }
    </style>
</head>
<body>
<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container" >
            <div class="main-header__top-inner" >
                <div class="main-header__top-address"style="color:white;">
                    <ul class="list-unstyled main-header__top-address-list">
                        <li>
                            <i class="icon">
                                <span class="icon-pin"></span>
                            </i>
                            <div class="text">
                                <p style="color:white;">B/43, Sardar Patel Mall, Nr. BOI, Nikol Road, Ahmedabad. </p>
                            </div>
                        </li>
                        <li>
                            <i class="icon">
                                <span class="icon-email"></span>
                            </i>
                            <div class="text">
                                <p><a href="mailto:vipulpatel2089@gmail.com"style="color:white;">vipulpatel2089@gmail.com</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <!-- <div class="main-header__top-menu-box" >
                        <ul class="list-unstyled main-header__top-menu">
                            <li><a href="make-a-claim-death.html" style="color:white;">Make a claim</a></li>
                            
                        </ul>
                    </div> -->
                    <div class="main-header__top-social-box">
                        <div class="main-header__top-social">
                            <a href=""><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix sticky-header">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="index.php"><img src="assets/images/resources/logo-lic.png" alt="Logo"></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li class="dropdown">
                                        <a href="services.php" class="dropdown-toggle">Services</a>
                                        <div class="mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li><a href="child_edu_fund.php">Child Education Fund</a></li>
                                                            <li><a href="child_mrg_fund.php">Child Marriage Fund</a></li>
                                                            <li><a href="yuva_pension_plan.php">Yuva Pension Plan</a></li>
                                                            <li><a href="retirement_planning.php">Retirement Plan</a></li>
                                                            <li><a href="term_plan.php">Term Plan</a></li>
                                                            <li><a href="mediclaim.php">Mediclaim</a></li>

                                                            <li><a href="mutual_fund.php">SIP, Mutual Fund</a></li>
                                                            <li><a href="accident_policy.php">Accident Policy</a></li>
                                                            <li><a href="tax_planning.php">Tax Planning</a></li>
                                                            <li><a href="travel_insurance.php">Travel Insurance</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>
                                                        <li><a href="vehicle_insurance.php">Vehicle Insurance</a></li>
                                                            <li><a href="workar_policy.php">Workar wc policy</a></li>
                                                            <li><a href="shopkipar_policy.php">Shop keeper Policy</a></li>
                                                            <li><a href="fire_policy.php">Fire policy</a></li>
                                                            <li><a href="keyman_insurance.php">keyman Insurance</a></li>
                                                            <li><a href="employee_insurance.php">Employer Employee Insurance</a></li>
                                                            <li><a href="cancer_policy.php">Cancer Care Policy</a></li>
                                                            <li><a href="monthly_scheme.php">Monthly Saving Scheme</a></li>
                                                            <li><a href="fd_planning.php">FD Planning</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="achivement.php">Achievement</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="main-menu__call-content">
                                <a href="tel:9200368090">+91 98794 44710</a>
                                <p>Call to Our Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
