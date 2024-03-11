@extends('admin.layout')
<div id="main-content">
    <div id="header">
        <div class="header-left float-left">
            <i id="toggle-left-menu" class="ion-android-menu"></i>
        </div>
        <div class="header-right float-right">
            <i class="ion-ios-people"></i>
        </div>
    </div>

    <div id="page-container">
        
        <button id="get-data-sheet">lấy dữ liệu từ sheet</button>    

        <br>

        <button>cập nhật lại tồn </button> 
        
    </div>
</div>

@push('js')

<script type="text/javascript">

    $('#get-data-sheet').click(function() {

        var $this = $(this);
        $this.button('loading');

        alert('đang lấy dữ liệu');
        
        //  $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $.ajax({
        //     type: 'POST',
        //     url: "{{ route('get_data_to_sheet') }}",
           
           
        //     success: function(result){
               
        //         alert('thành công');
        //     }
        // });
    })


</script>


@endpush