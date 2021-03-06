<div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('{{asset('public/assets/img/husky.jpg')}}')">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading"></h1>
                <p class="super-paragraph"></p>
            </div>
        </div>
        <div class="item" style="background-image:url('{{asset('public/assets/img/husky2.jpg')}}')">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading"></h1>
                <p class="super-paragraph"></p>
            </div>
        </div>
        <div class="item" style="background-image: url('{{asset('public/assets/img/golden.jpg')}}')">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading"></h1>
                <p></p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>