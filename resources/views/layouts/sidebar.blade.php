<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        @foreach ($categories as $category)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{ strtolower($category->name) }}">
                            @if (count($category->brands))
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            @endif
                            {{ $category->name }}
                        </a>
                    </h4>
                </div>
                @if (count($category->brands))
                <div id="{{ strtolower($category->name) }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach ($category->brands as $brand)
                                <li><a href="#">{{ $brand->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        @endforeach
    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach ($brands as $brand)
                    <li><a href="#">
                            <span class="pull-right">
                                ({{ $brand->products_count }})
                            </span>
                            {{ $brand->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div><!--/brands_products-->

    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="assets/images/home/shipping.jpg" alt="" />
    </div><!--/shipping-->

</div>