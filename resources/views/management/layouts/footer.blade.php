<script src="{{asset('raja/js/app.min.js')}}"></script>
<script src="{{asset('raja/js/chart.min.js')}}"></script>
<!-- Custom Js -->
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        order: [
            [0, 'desc']
        ],
    });
    $('#myTable2').DataTable({
        pageLength: 25,
        lengthMenu: [
            [5, 10, 25, 50, 100],
            [5, 10, 25, 50, 100]
        ]
    });
    $('#myTable3').DataTable({
        pageLength: 25,
        lengthMenu: [
            [5, 10, 25, 50, 100],
            [5, 10, 25, 50, 100]
        ]
    });
    $('#myTable4').DataTable({
        pageLength: 25,
        lengthMenu: [
            [5, 10, 25, 50, 100],
            [5, 10, 25, 50, 100]
        ]
    });
});
</script>
<script src="{{asset('raja/js/admin.js')}}"></script>
<script src="{{asset('raja/js/pages/index.js')}}"></script>
<script src="{{asset('raja/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('raja/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('raja/js/pages/medias/carousel.js')}}"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>