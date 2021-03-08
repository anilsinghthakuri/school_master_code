<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Upload image</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>

        </div>
    </div>
    <!-- /.card-header -->
    <form>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Minimal</label>
                        <select class="form-control select2bs4" wire:model='gallery_album_id' style="width: 100%;">
                            <option value="0" selected="selected">Choose Album</option>
                            @foreach ($gallery_album_list as $item)
                            <option value="{{$item->gallery_album_id}}">{{$item->gallery_album_name}}</option>
                            @endforeach



                        </select>
                    </div>
                    <!-- /.form-group -->

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Choose Image</label>
                        <input type="file" wire:model = 'gallery_image_name' class="form-control" multiple>
                    </div>
                    <!-- /.form-group -->

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="form-control btn btn-primary " wire:click.prevent = 'store'>Submit</button>
                    </div>
                    <!-- /.form-group -->

                </div>
            </div>
        </div>
    </form>

</div>
