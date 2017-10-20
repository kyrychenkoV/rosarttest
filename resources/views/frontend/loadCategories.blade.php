<div class="category_items">
    @foreach($products as $item)
        <div class="category_item" style="background-image: url({{ \App\Models\Product::PATH_TO_IMAGE.$item->img }});">
            <div class="img" style="background-image: url({{ \App\Models\Product::PATH_TO_IMAGE.$item->img }});"></div>
            <div class="category_info">
                <h3 class="hh"><span>{{ $item->title }} <p style="font-size: 14px"><small> {{$item->master->name.'/'.$item->technique->name.'/'.$item->category->name }}</small></p></span></h3>

                <div class="currency || js_DropWrap">
                    <div><span>{{ $item->currency }} руб.</span><i class="currency_btn || js_DropBtn"></i></div>
                    <ul class="currency_box || js_DropBox">
                        <li class="cur_item">USD</li>
                        <li class="cur_item">EUR</li>
                    </ul>
                </div>
                <div class="category_btns">
                    <a href="#" class="button"><span>Подробнее</span><i class="ic_dir_arrow"></i></a>
                    <button class="button"><span>В корзину</span><svg class="icon icon-cart"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{ asset(\App\Models\Product::PATH_TO_IMAGE."svgdefs.svg#icon-cart") }}"></use></svg></button>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $products->links() }}