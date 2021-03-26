<div class="card">
    <div class="card-header">
        <h3 class="card-title">Staff Category</h3>

        {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">

            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Category Name</th>
                    <th>Action</th>
                    {{-- <th>Status</th> --}}
                </tr>

            </thead>

            <tbody>

                @if ( $staff_category_list == !null)
                @foreach ($staff_category_list as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->staff_category_name}}</td>
                    <td>
                        <span><button wire:click = 'edit({{$item->staff_category_id}})'><i class="fas fa-edit"></i></button></span>
                        <span><button wire:click = "delete({{$item->staff_category_id}})" ><i class="fas fa-trash"></i></button></span>
                    </td>
                    {{-- <td> <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                          <input type="checkbox" class="custom-control-input" id="customSwitch3">
                          <label class="custom-control-label" for="customSwitch3"></label>
                        </div>
                      </div></td> --}}
                </tr>
                @endforeach

                @endif


            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
