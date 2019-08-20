<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide bg-inverse w-59 asui ml-auto mr-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/huyentrang-vt/ket-thuc-khoa-an-cu-kiet-ha.jpg')}}" alt="First slide">
                <div class="carousel-caption">
                    <h3>First slide</h3>
                    <p>This is the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/huyentrang-vt/images.jpeg')}}" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Second slide</h3>
                    <p>This is the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/content/slider_12.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3>Third slide</h3>
                    <p>This is the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function() {
    $('[data-toggle="popover"]').popover()
})
</script>