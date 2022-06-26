<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   
    $(document).ready(function(){
        refreshTable();
    })
    function refreshTable(){
        
        $.ajax({
             url: "/api/get-data",
             type: "GET",
             cache: false,
             success: function(resp) {
                var data = resp;
                var result = "";
                let no = 1;
                let arraymerek = [];
                let laptopcount = "<h1>" + data.length + "</h1>";
                for(i=0; i<data.length; i++){
                    result +=
                    "<tr>" +
                    "<td>" +
                     no++ +
                    "</td>" +
                    "<td>" +
                    data[i].merek +
                    "</td>" +
                    "<td>" +
                    data[i].serial +
                    "</td>" +
                    "<td>" +
                    data[i].tahun_produksi +
                    "<td>" +
                    '<a class="btn btn-danger mx-3" id="delete" fid="'+ data[i].id +
                    '"><i class="fa-solid fa-trash-can"></i></a>' + 
                    '<a class="btn btnubah" id="update" fid="' + data[i].id + 
                    '"><i class="fa-solid fa-pencil"></i></a>' + "</td>" +
                    "</tr>";
                    arraymerek.push(data[i].merek);
                }
                let filtermerek = [];
                $.each(arraymerek, function(i, el) {
                    if($.inArray(el, filtermerek) === -1) filtermerek.push(el);
                })
                $('#tabelisi').html(result);
                $('#laptopcount').html(laptopcount);
                $('#merekcount').html("<h1>" + filtermerek.length + "</h1>")
            }
        });
    }
    
        $(document).on('click', '#submit', function() {
        var data = new Object();
        data.merek = $('#merek').val();
        data.seri = $('#serial').val();
        data.tahun_produksi = $('#tahun_produksi').val();
        $.post('/api/create-data',data, function(resp) {
            if(resp == "Data Saved") {
                 window.location.href = "/";
                
            }
        });
    });
    $(document).on('click','#update',function(){
        $.get('/api/update-data/' + $(this).attr('fid'),function(resp){
            $('#mycollapse').collapse('show');
            $('#id').val(resp.id);
            $('#merek').val(resp.merek);
            $('#seri').val(resp.serial);
            $('#tahun_produksi').val(resp.tahun_produksi);
        });
    });
    $(document).on('click', '#submit_update', function() {
        var data_update = new Object();
        data_update._token = "{{ csrf_token() }}";
        data_update.id = $('#id').val();
        data_update.merek = $('#merek').val();
        data_update.seri = $('#seri').val();
        data_update.tahun_produksi = $('#tahun_produksi').val();
        $.post('/api/updated/'+ data_update.id,data_update, function(resp) {
            if(resp == "Data Updated") {
                $('#mycollapse').collapse('hide');
                location.reload();
            }
        });
    });
    $(document).on("click", "#delete", function() {
        if (confirm("Are you sure ?") == true) {
                $.ajax({
                    url:"/api/delete-data/" + $(this).attr("fid"),
                    type: "GET", 
                    success: function(resp) {
                        console.log(resp);
                        
                        respon = resp;
                        
                        if(respon == "Data Deleted") {
                            refreshTable();
                        } else { 
                            alert("Data gagal terhapus");
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
        }
    });
        
        
</script>