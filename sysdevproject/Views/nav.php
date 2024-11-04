<?php
$path = dirname($_SERVER['SCRIPT_NAME']);

$controller = isset($_GET['controller']) ? $_GET['controller'] : "";
?>
<html lang="en">
    <head>
    <link rel="stylesheet" href=<?=$path."/CSS/nav.css"?>>
    </head>
    <header>
        <div class="page-content-inner">
            <div class="header-inner top">
                <div class="section-left">
                    <div class="header-nav logo">
                        <a href=<?=$path?> id="logo">
                            <span class="first-letter">C</span>yber <span class="second-letter">S</span>tation
                        </a>
                    </div>
                </div>
                <div class="section-right">
                    <?php if($controller != "admin"){ ?>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path . "/Location"; ?> id="account">
                                LOCATIONS
                            </a>
                        </div>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path . "/Contact"; ?> id="account">
                                CONTACT US
                            </a>
                        </div>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path . "/Reservation"; ?> id="account">
                                RESERVE NOW
                            </a>
                        </div>
                    <?php }elseif($controller == "admin") {?>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path . "/Admin/logout"; ?> id="account">
                                LOGOUT
                            </a>
                        </div>
                    <?php }?>
                    <div class="header-nav languages">
                        <select id="languages">
                            <option disabled selected>Languages</option>
                            <option>English</option>
                            <option>Francais</option>
                        </select>
                    </div>
                </div>
            </div> 
        </div>
    </header>
</html>