<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                @if ($updateMode)
                @include('livewire.notice.partials.notice.update')
                @else

                @include('livewire.notice.partials.notice.create')

                @endif
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-8">

                <div class="card card-primary card-outline">
                    @include('livewire.notice.partials.notice.table')
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
