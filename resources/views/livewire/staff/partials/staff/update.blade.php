<div class="card card-primary card-outline">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Staff </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Staff Category</label>
                    <select class="form-control select2bs4" wire:model='staff_category_id' style="width: 100%;">
                        <option value="0" selected="selected">Choose staff category</option>
                        @foreach ($staff_category_list as $item)
                        <option value="{{$item->staff_category_id}}">{{$item->staff_category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Staff Name" wire:model = 'staff_name'>
                        @error('staff_name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1"
                         wire:model = 'staff_image'>
                        @error('staff_image')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Staff Designation" wire:model = 'staff_designation'>
                        @error('staff_designation')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button wire:click.prevent = "update()" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<script>

</script>
