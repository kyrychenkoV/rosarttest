<header class="header">
    <div class="header_top">
        <div class="wrapper">
            <div class="navigation_btn"><span></span></div>
            <a href="#" class="header_logo"><img src="{{ asset(\App\Models\Product::PATH_TO_IMAGE."logo.png") }}" alt="РосАрт"></a>
            <ol class="header_right">
                <li><a href="#" onclick="$('.modal_login').dialog();return false;"><svg class="icon icon-login"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-login") }}"></use></svg></a></li>
                <li><a href="#" onclick="$('.modal_registration').dialog();return false;"><svg class="icon icon-user"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-user") }}"></use></svg></a></li>
                <li class="header_lang || js_DropWrap">
                    <div class="ttl || js_DropBtn">Ru <i class="ic_arrow"></i></div>
                    <div class="box || js_DropBox">
                        <a href="index.php">En</a>
                        <a href="index.php">En</a>
                        <a href="index.php">En</a>
                    </div>
                </li>
                <li class="cart"><a href="cart.php"><svg class="icon icon-cart"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-cart") }}"></use></svg></a></li>
            </ol>
        </div>
    </div>
    <div class="navigation_wrap">
        <div class="wrapper">
            <nav class="navigation">
                <ol class="nav_btns">
                    <li><a href="#" onclick="$('.modal_login').dialog();return false;"><svg class="icon icon-login"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-login") }}"></use></svg></a></li>
                    <li><a href="#" onclick="$('.modal_registration').dialog();return false;"><svg class="icon icon-user"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-user") }}"></use></svg></a></li>
                    <li class="header_lang || js_DropWrap">
                        <div class="ttl || js_DropBtn">Ru <i class="ic_arrow"></i></div>
                        <div class="box || js_DropBox">
                            <a href="index.php">En</a>
                            <a href="index.php">En</a>
                            <a href="index.php">En</a>
                        </div>
                    </li>
                </ol>
                <form action="#" class="header_search">
                    <input type="text" class="input" placeholder="Поиск">
                    <button><svg class="icon icon-search"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-search") }}"></use></svg></button>
                </form>
                <ul>
                    <li id="active_menu_1"><a href="#">О галерее</a></li>
                    <li id="active_menu_2"><a href="#">Мастера</a></li>
                    <li id="active_menu_3" class="dropDown">
                        <a href="catalog.php">Каталог <i class="ic_arrow"></i></a>
                        <ul class="navigation_dropDown">
                            <li><a href="#">Живопись</a></li>
                            <li><a href="#">Графика</a></li>
                            <li><a href="#">Изделия</a></li>
                        </ul>
                    </li>
                    <li id="active_menu_4"><a href="#">Блог</a></li>
                    <li id="active_menu_5"><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="dark_overlay"></div>
</header>
