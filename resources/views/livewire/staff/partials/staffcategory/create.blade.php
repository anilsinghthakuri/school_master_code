<div class="card card-primary card-outline">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Staff Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter category Name" wire:model = 'staff_category_name'>
                        @error('staff_category_name')
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
