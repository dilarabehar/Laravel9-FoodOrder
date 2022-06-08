<!-- slider section -->
<section class="slider_section ">
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="detail-box">
                    <h1>
                        Discover Restuarant And Food
                    </h1>
                    <p>
                        when looking at its layout. The point of using Lorem Ipsum
                    </p>
                </div>
                <div class="find_container ">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-row ">
                                        <div class="form-group col-lg-5">
                                            <input type="text" class="form-control" id="inputHotel" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control" id="inputLocation" placeholder="All Locations">
                                            <span class="location_icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <div class="btn-box">
                                                <button type="submit" class="btn ">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider_container">
        @foreach($sliderdata as $rs)
        <div class="item">
            <div class="img-box">
                <img src="{{Storage::url($rs->image)}}" style= "width: 308px; height: 307px" />
                <h1>{{$rs->title}}</h1>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
<!-- end slider section -->
</div>
