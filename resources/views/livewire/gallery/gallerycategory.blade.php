<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                @if ($updateMode)
                @include('livewire.gallery.update')
                @else

                @include('livewire.gallery.create')

                @endif
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-8">

                <div class="card card-primary card-outline">
                    @include('livewire.gallery.table')
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
