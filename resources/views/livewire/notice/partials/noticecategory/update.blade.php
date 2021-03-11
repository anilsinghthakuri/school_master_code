<div class="card card-primary card-outline">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Notice Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter category Name" wire:model = 'notice_category_name'>
                        @error('notice_category_name')
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
