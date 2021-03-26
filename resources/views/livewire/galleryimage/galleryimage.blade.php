<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @include('livewire.galleryimage.form')
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-12">

                <div class="card card-primary card-outline">
                    @include('livewire.galleryimage.imagegallery')
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<script>

  $(function () {

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
