<div class="card card-primary">

    <div class="card-header">
      <h4 class="card-title">Ekko Lightbox</h4>
    </div>

    <div class="card-body">
      <div class="row">

        @foreach ($gallery_image_list as $item)
        <div class="col-sm-2">
            <img src="{{asset('storage/'.$item->gallery_image_name)}}" class="img-fluid mb-2" alt="white sample"/>

        </div>
        @endforeach


      </div>
    </div>
  </div>
