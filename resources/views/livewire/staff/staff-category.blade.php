<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                @if ($updateMode)
                @include('livewire.staff.partials.staffcategory.update')
                @else

                @include('livewire.staff.partials.staffcategory.create')

                @endif
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-8">

                <div class="card card-primary card-outline">
                    @include('livewire.staff.partials.staffcategory.table')
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
