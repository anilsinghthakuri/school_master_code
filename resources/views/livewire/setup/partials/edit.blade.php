<div class="card-body">
    <form >
    <div class="row">

        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">School Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Name" wire:model = 'school_name'>
                        @error('school_name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Address" wire:model = 'school_adderss'>
                        @error('school_adderss')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Phone" wire:model = 'school_phone'>
                        @error('school_phone')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Email" wire:model = 'school_email'>
                        @error('school_email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Facebook Link" wire:model = 'school_facebook_link'>
                        @error('school_facebook_link')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Insta Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter School Insta Link" wire:model = 'school_insta_link'>
                        @error('school_insta_link')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>
            </div>
            <!-- /.form-group -->
        </div>

        <div class="col-md-12">
            <!-- /.form-group -->
            <div class="card-body">
                <div class="form-group">
                <button wire:click.prevent = "update()" class="btn btn-primary btn-block">Update</button>
                </div>
            </div>
            <!-- /.form-group -->
        </div>

        <!-- /.col -->
    </div>
</form>
</div>
