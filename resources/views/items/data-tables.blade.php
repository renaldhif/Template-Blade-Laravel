@extends('master')

@yield('content')

@section('content')
    @include('partials.data-tables')
@endsection


@push('scripts')
<script src="../../plugins/datatables/jquery.dataTables.js')"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js')"></script>
<script>
    $(function (){
        $("#example1").DataTable();
});
</script>
@endpush
