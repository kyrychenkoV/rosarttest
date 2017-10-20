<footer class="footer" style="background-image: url({{ \App\Models\Product::PATH_TO_IMAGE }}footer.jpg);">
    <div class="wrapper">
        <div class="footer_content">
            <div class="column cl1">
                <a href="#" class="footer_logo">
                    <img src="{{ asset( \App\Models\Product::PATH_TO_IMAGE."logo.png") }}" alt="РосАрт">
                </a>
                <p>Искусство русских мастеров</p>
            </div>
            <div class="column cl2">
                <h3 class="hh">Каталог</h3>
                <ul class="footer_nav">
                    <li id="active_menu_101"><a class="underscore" href="#">Живопись</a></li>
                    <li id="active_menu_102"><a class="underscore" href="#">Графика</a></li>
                    <li id="active_menu_103"><a class="underscore" href="#">Изделия</a></li>
                </ul>
            </div>
            <div class="column cl3">
                <h3 class="hh">О компании</h3>
                <ul class="footer_nav">
                    <li id="active_menu_104"><a class="underscore" href="#">Популярные статьи</a></li>
                    <li id="active_menu_105"><a class="underscore" href="#">Как купить</a></li>
                </ul>
            </div>
            <div class="column cl4">
                <h3 class="hh">Присоединяйтесь к нам</h3>
                <div class="social">
                    <a href="#" target="_blank"><svg class="icon icon-facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ \App\Models\Product::PATH_TO_IMAGE }}svgdefs.svg#icon-facebook"></use></svg></a>
                    <a href="#" target="_blank"><svg class="icon icon-vk"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ \App\Models\Product::PATH_TO_IMAGE }}svgdefs.svg#icon-vk"></use></svg></a>
                </div>
            </div>
        </div>
        <div class="footer_copy">© РосАрт 2016-2017</div>
        <div class="btn_up_wrap"><div class="btn_up"></div></div>
    </div>
</footer>