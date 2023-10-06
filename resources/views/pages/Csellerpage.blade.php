@extends('pages.main')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="formbgcolor">
    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="local-form content-box">
        @csrf
        <div class="form-group"> <label class="control-label" for="inputAddress">Address*</label>
            <div class="controls"> <input required="" type="text" name="property_address" value="" class="form-control pac-target-input" id="inputAddress" placeholder="Address" autocomplete="off"> </div>
        </div>
        <!-- <div class="form-group"> <label class="control-label" for="inputGps">Gps*</label>
                <div class="controls"> <input type="text" name="inputGps" value="" class="form-control" id="inputGps" readonly="">
                </div>
            </div> -->
        <div class="form-group"> <label class="control-label" for="inputListingName">Listing Name*</label>
            <div class="controls"> <input required="" type="text" name="property_listing_name" value="" class="form-control" id="inputListingName" placeholder="Listing Name"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputCategory">Category</label>
            <!-- <div class="controls">
                    <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle selectpicker-primary" data-toggle="dropdown" data-id="inputCategory" title="I’m looking for..."><span class="filter-option pull-left" name="property-type">I’m looking to...</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                        <div class="dropdown-menu open">
                            <ul class="dropdown-menu inner" role="menu">
                                <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Trending</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Restaurants</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Coffee</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Nightlife</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                            </ul>
                        </div><select class="form-control selectpicker" name="Category" id="inputCategory" title="I’m looking for..." tabindex="-98">
                            <option class="bs-title-option" value="">I’m looking for...</option>
                            <option value="a">Trending</option>
                            <option value="B">Restaurants</option>
                            <option value="c">Coffee</option>
                            <option value="d">Nightlife</option>
                        </select>
                    </div>
                </div> -->
            <select name="property_type" class="form-control">
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
            </select>
        </div>
        <div class="form-group"> <label class="control-label" for="inputKeywords">Keywords</label>
            <div class="controls"> <input type="text" name="password_confirm" value="" class="form-control" id="inputKeywords" placeholder="Keywords"> </div>
        </div>

        <div class="form-group"> <label class="control-label" for="inputDescription">Description short</label>
            <div class="controls"> <input type="text" name="property_purpose" value="" class="form-control" id="inputKeywords" placeholder="Description"> </div>
        </div>
        <!-- <div class="form-group"> <label class="control-label" for="inputPurpose">Purpose</label>
                <div class="controls"> <input type="text" name="Purpose" value="" id="inputPurpose" class="form-control" placeholder="Purpose"> </div>
            </div> -->
        <div class="form-group"> <label class="control-label" for="inputCity">City</label>
            <div class="controls"> <input type="text" name="property_city" value="" id="inputCity" class="form-control" placeholder="City"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputZip">Zip code</label>
            <div class="controls"> <input type="text" name="Zip code" value="" id="inputZip" class="form-control" placeholder="Zip code"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputArea">Area</label>
            <div class="controls"> <input type="text" name="Area" value="" id="inputArea" class="form-control" placeholder="Area"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputBathrooms">Bathrooms</label>
            <div class="controls"> <input type="text" name="property_bathrooms" value="" id="inputBathrooms" class="form-control" placeholder="Bathrooms"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputRooms">Rooms</label>
            <div class="controls"> <input type="text" name="property_rooms" value="" id="inputRooms" class="form-control" placeholder="Rooms"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputPrice">Price</label>
            <div class="controls"> <input type="text" name="price" value="" id="inputPrice" class="form-control" placeholder="Price"> </div>
        </div>
        <div class="form-group"> <label class="control-label" for="inputPrice">Price</label>
            <div class="controls"> <input type="file" name="property_image" value="" id="inputPrice" class="form-control" placeholder="Price"> </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="checkbox"> <label> <input type="checkbox" value="">I agree to the terms and conditions and that choice
                    hotels or its service provider may contact me by e-mail about my review.</label> </div>
        </div>
        <div class="form-group text-center">
            <div class="controls"> <button type="submit" class="btn btn-success" value="Add">Add</button> <button type="reset" class="btn btn-danger">Reset</button> </div>
        </div>
    </form>
</div>
@endsection