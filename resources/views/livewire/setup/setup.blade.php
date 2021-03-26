<div class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Setup</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="row">
                <div class="col-lg-12">
                    @if ($updateMode)

                    @include('livewire.setup.partials.edit')

                    @else

                    @include('livewire.setup.partials.show')

                    @endif
                    <!-- /.card -->
                </div>

            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
