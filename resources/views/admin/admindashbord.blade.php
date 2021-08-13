@extends("layout.layout")
@section("content")
<br>

<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
    

    <div class="widget mercado-widget filter-widget brand-widget">
        <h2 class="widget-title">Brand</h2>
        <div class="widget-content">
            <ul class="list-style vertical-list list-limited" data-show="6">
                <li class="list-item"><a class="filter-link " href="{{route('adminproductlist')}}">products</a></li>
                <li class="list-item"><a class="filter-link " href="{{route('go_category_for_admin')}}">categories</a></li>
                <li class="list-item"><a class="filter-link " href="{{route('showordersforadmin')}}">orders</a></li>
            </ul>
        </div>
    </div><!-- brand widget--> 
    <br>   
@endsection