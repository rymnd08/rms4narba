<div class="card shadow mb-4">
<div class="card-header py-3">
    @props(['card_header' => 'Card Header'])
    <!-- <h6 class="m-0 font-weight-bold text-primary"></h6> -->
    {{ $card_header }}

</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{ $table_header }}
                </tr>
            </thead>
            <tfoot>
                <tr>
                    {{ $table_header }}
                </tr>
            </tfoot>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
</div>