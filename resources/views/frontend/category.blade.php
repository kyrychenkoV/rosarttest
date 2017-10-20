@extends('frontend.layouts.app')

@section('main-content')
    <div class="adb_pic_wd" style="background-image: url({{ \App\Models\Product::PATH_TO_IMAGE}}category_bg.jpg);">
        <div class="wrapper">
            <ul class="breadcrumbs">
                <li><a class="underscore" href="#">Главная</a></li>
                <li><a class="underscore" href="#">Каталог</a></li>
                <li><span>Живопись</span></li>
            </ul>
        </div>
    </div>
    <section class="category">
        <div class="wrapper">
            <h1 class="title">Каталог</h1>
            <div class="category_nav">
                <a href="#" class="button || active"><span>Живопись</span><i class="ic_dir_arrow"></i></a>
                <a href="#" class="button"><span>Графика</span><i class="ic_dir_arrow"></i></a>
                <a href="#" class="button"><span>Изделия</span><i class="ic_dir_arrow"></i></a>
            </div>
            <div class="rows">
                <!-- CATEGORY SIDEBAR -->
                <form id="first-form">
                <aside class="category_sidebar">
                    <h3 class="h3">Показать</h3>
                    <div class="filterWrap isOpened">
                        <div class="filterHead">Все категории</div>
                        <ul class="filterBody">
                            <li><a href="#">Все</a></li>
                            @foreach($masters as $item)
                                <li><a href="#">{{$item->name}}</a></li>
                            @endforeach
                            @foreach($categories as $item)
                                <li><a href="#">{{$item->name}}</a></li>
                            @endforeach
                            @foreach($techniques as $item)
                                <li><a href="#">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filterWrap isOpened">
                        <div class="filterHead">Цена</div>
                        <div class="filterBody filterSlider">
                            <div id="filter_price"></div>
                            <div class="rows">
                                <input type="text" id="amount_from" name ="" class="from" readonly style="border:0;">
                                <input type="text" id="amount_to"  name ="" class="to" readonly style="border:0;">
                                <input type="hidden" id="amount_from_data" name ="minprice" class="" readonly style="border:0;">
                                <input type="hidden" id="amount_to_data"  name ="maxprice" class="" readonly style="border:0;">
                            </div>
                        </div>
                    </div>
                    <div class="filterWrap isOpened">
                        <div class="filterHead">Мастер</div>
                        <ul class="filterBody">
                            @foreach($masters as $item)
                                <li>
                                    <input type="checkbox" name="masters[]" value="{{$item->id}}" class="checkbox" id="filter_ch_{{$loop->index+1}}">
                                    <label for="filter_ch_{{$loop->index+1}}">{{$item->name}}</label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filterWrap isOpened">
                        <div class="filterHead">Категория</div>
                        <ul class="filterBody">
                            @foreach($categories as $item)
                            <li>
                                <input type="checkbox" name="categories[]" value="{{$item->id}}" class="checkbox" id="filter_cc_{{$loop->index+1}}">
                                <label for="filter_cc_{{$loop->index+1}}">{{$item->name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filterWrap isOpened">
                        <div class="filterHead">Техника</div>
                        <ul class="filterBody">
                            @foreach($techniques as $item)
                            <li>
                                <input type="checkbox" name="techniques[]" value="{{$item->id}}" class="checkbox" id="filter_ct_{{$loop->index+1}}">
                                <label for="filter_ct_{{$loop->index+1}}">{{$item->name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <!-- CATEGORY CONTENT -->
                <div class="category_content">
                    <div class="rows">
                        <select name="filter" class="filter_sort_by" data-placeholder="Сортировка">
                            <option value=""></option>
                            <option value="1">Новейшие</option>
                            <option value="2">По возрастанию цены</option>
                            <option value="3">По убыванию цены</option>
                            <option value="4">Название А-Я</option>
                            <option value="5">Название Я-А</option>
                        </select>
                    </div>
                    <div class="wrapper-categories">
                        @include('frontend.loadCategories')
                    </div>
                </div>
                </form>
                <div class="test"></div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('#active_menu_3').addClass('active');
            $('.pagination').addClass('paginations');
        });
    </script>
    <script>
        $('#first-form').change(function (e) {
            e.preventDefault();
            var dataArray = $(this).serializeArray();
            $.ajax({
                method: "GET",
                url: 'categories/ajax',
                data: dataArray,
                success: function (result) {
                    $(".wrapper-categories").html(result);
                    $('.pagination').addClass('paginations');
                }
            });
        });

        $('#filter_price').on("slidechange", function (event, ui) {
            $('#first-form').change();
        });
    </script>
@endsection