<div class="card shadow mb-4">
<div class="card-header py-3">
    
    <!-- <h6 class="m-0 font-weight-bold text-primary"></h6> -->
    {{$cardHeader}}
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{$tableHeaders}}
                </tr>
            </thead>
            <tfoot>
                <tr>
                    {{$tableHeaders}}
                </tr>
            </tfoot>
            <tbody>
                {{$tableData}}
            </tbody>
        </table>
    </div>
</div>
</div>