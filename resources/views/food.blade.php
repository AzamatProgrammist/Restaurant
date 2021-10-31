 <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          @foreach($data as $data)
       
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img style="width: 300px; height: 250px;" src="foodimage/{{ $data->image }}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{ $data->title }}</h4></a>
                <h6>${{ $data->price }}</h6>
                <p>{{ $data->description }}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
  <form action="{{url('/addcart', $data->id)}}" method="get">
            <input type="number" min="1" value="1" style="width: 60px;" name="quantity">
            <input type="submit" class="btn btn-success" value="Add cart">
  </form>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </div>
