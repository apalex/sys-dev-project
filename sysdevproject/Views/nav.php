<?php
$path = dirname($_SERVER['SCRIPT_NAME']);

$controller = isset($_GET['controller']) ? $_GET['controller'] : "";
$language = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
?>
<html lang="en">
    <head>
    <link rel="stylesheet" href=<?=$path."/CSS/nav.css"?>>
    </head>
    <script>
        function changeLanguage(lang) {
            const basePath = "<?= rtrim($path, '/') ?>";
            const controller = "<?= $controller ?>";
            const action = "<?= $action ?>"; // Include the action
            let url;

            if (controller) {
                // Include the action if it exists
                url = action 
                    ? `${basePath}/${lang}/${controller}/${action}` 
                    : `${basePath}/${lang}/${controller}`;
            } else {
                // Default to base path and language if no controller is present
                url = `${basePath}/${lang}`;
            }

            window.location.href = url;
        }
    </script>
    <header>
        <div class="page-content-inner">
            <div class="header-inner top">
                <div class="section-left">
                    <div class="header-nav logo">
                        <a href=<?php echo $path."/".$language?> id="logo">
                            <span class="first-letter">C</span>yber <span class="second-letter">S</span>tation
                        </a>
                    </div>
                </div>
                <div class="section-right">
                    <?php if($controller != "admin"){ ?>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path ."/". $language . "/Location"; ?> id="account">
                                LOCATIONS
                            </a>
                        </div>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path ."/". $language . "/Contact"; ?> id="account">
                                CONTACT US
                            </a>
                        </div>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path ."/". $language . "/Reservation"; ?> id="account">
                                RESERVE NOW
                            </a>
                        </div>
                        <div class="header-nav languages">
                            <select id="languages" onchange="changeLanguage(this.value)">
                                <option disabled selected>Languages</option>
                                <option value='en' <?=$language=='en' ? 'selected' : '' ?>>English</option>
                                <option value='fr' <?=$language=='fr' ? 'selected' : '' ?>>French</option>
                            </select>
                        </div>
                    <?php }elseif($controller == "admin") {?>
                        <div class="header-nav menu-items">
                            <a href=<?php echo $path ."/". $language . "/Admin/logout"; ?> id="account">
                                LOGOUT
                            </a>
                        </div>
                        <div class="header-nav languages">
                            <select id="languages" onchange="changeLanguage(this.value)">
                                <option disabled selected>Languages</option>
                                <option value='en' <?=$language=='en' ? 'selected' : '' ?>>English</option>
                                <option value='fr' <?=$language=='fr' ? 'selected' : '' ?>>French</option>
                            </select>
                        </div>
                    <?php }?>
                </div>
            </div> 
        </div>
    </header>
</html>