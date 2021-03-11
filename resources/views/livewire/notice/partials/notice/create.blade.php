<div class="card card-primary card-outline">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Notice</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Notice Category</label>
                    <select class="form-control select2bs4" wire:model='notice_category_id' style="width: 100%;">
                        <option value="0" selected="selected">Choose Notice category</option>
                        @foreach ($notice_category_list as $item)
                        <option value="{{$item->notice_category_id}}">{{$item->notice_category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Notice Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter notice heading" wire:model = 'notice_heading'>
                        @error('notice_heading')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Write notice description" wire:model = 'notice_description'></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Notice File Type</label>
                    <select class="form-control select2bs4" wire:model='notice_type_id' style="width: 100%;">
                        <option value="0" selected="selected">Choose Notice file type</option>
                        @foreach ($notice_type_list as $item)
                        <option value="{{$item->notice_type_id}}">{{$item->notice_type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
                    <input type="file" class="form-control" id="exampleInputEmail1"
                         wire:model = 'notice_file' id="{{ rand() }}">
                        @error('notice_file')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button wire:click.prevent = "store()" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>

</script>
