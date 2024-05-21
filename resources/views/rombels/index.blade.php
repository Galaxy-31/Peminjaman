@extends('layouts.master')

@section('title', 'Rombel')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h3 class="text-capitalize">Data Rombel</h3>
                <p class="text-sm mb-0">
                    <a class="btn btn-success" href="{{ route('rombels.create') }}"> Create</a>
                </p>
            </div>
            <div class="card-body p-3">                
                <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
                <table id="example" class="table hover order-column row-border,sortable" style="width:100%">
                    <thead>
                        <tr>
                            <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
                            <th>No</th>
                            <th>Rombel</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('rombels.index') }}",
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "nama",
                    name: "nama"
                },
                {
                    data: "kelas",
                    name: "kelas"
                },
                {
                    data: "angkatan",
                    name: "angkatan"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });
    });
</script>
@endsection