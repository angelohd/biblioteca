@section('css')
    <link href="{{url('dist/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{url('dist/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{url('dist/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
            });
        });
    </script>

   {{--
     <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>
    --}}
@endsection
