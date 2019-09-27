@extends('main')

<style>
    * {
        box-sizing: border-box;
    }

    .columns {
        float: left;
        width: 33.3%;
        padding: 8px;
    }

    .price {
        list-style-type: none;
        border: 1px solid #eee;
        margin: 0;
        padding: 0;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    .price:hover {
        box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
    }

    .price .header {
        background-color: #29C1D7;
        color: white;
        font-size: 25px;
    }

    .price li {
        border-bottom: 1px solid #eee;
        padding: 20px;
        text-align: center;
    }

    .price .grey {
        background-color: #eee;
        font-size: 20px;
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
    }

    @media only screen and (max-width: 600px) {
        .columns {
            width: 100%;
        }
    }

</style>

@section('content')


    <!--<div class="banner_area">
            <img src="images/about.png" alt="">
        </div>-->

    <div class="contact_title">
        <h2>Tekno Print Shop</h2> <hr>
    </div>

    <div class="container">
        <div class="columns">
            <ul class="price">
                <li class="header">Door Hangers</li>
                <li class="grey">3.5 x 8.5 4/4 14pt with AQ</li>
                <li>5,000 = $327.50</li>
                <li>10,000 = $660.00</li>
                <li>20,000 = $1060.00</li>
                <li>25,000 = $1290.00</li>
            </ul>
        </div>

        <div class="columns">
            <ul class="price">
                <li class="header" style="background-color:#29C1D7">Magnets</li>
                <li class="grey"> 2 x 3.5 17pt 4/0 </li>
                <li>1,000 = $226.25</li>
                <li>2,000 = $407.50</li>
                <li>5,000 = $727.50</li>
            </ul>
        </div>

        <div class="columns">
            <ul class="price">
                <li class="header">Box Tops</li>
                <li class="grey">5.5 x 8.5 4/0 80lb AQ</li>
                <li>5,000 = $235.00</li>
                <li>10,000 = $386.00</li>
                <li>20,000 = $683.75</li>
                <li>25,000 = $907.50 </li>
            </ul>
        </div>
        <div class="columns">
            <ul class="price">
                <li class="header">Flyers</li>
                <li class="grey">8.5 x 11 4/4 80lb AQ flat</li>
                <li>5,000 = $33</li>
                <li>10,000 = $591.25</li>
                <li>20,000 = $1,108.75</li>
                <li>25,000 = $1,427.50</li>
            </ul>
        </div>

        <div class="columns">
            <ul class="price">
                <li class="header">Menus</li>
                <li class="grey">11 x 17 80lb 4/4 AQ trifold</li>
                <li>5,000 = $633.75</li>
                <li>10,000 = $1,085.00</li>
                <li>20,000 = $1,891.25</li>
                <li>25,000 = $2,508.75</li>
            </ul>
        </div>

    </div>





    <section class="grid">





    </section>




@endsection