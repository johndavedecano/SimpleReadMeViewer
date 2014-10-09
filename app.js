function view() {

    var contents = $('#markdown').val();
    
    if (contents.length > 0) {
        
        $.ajax({
           url: "process.php",
           type: "POST",
           data: "contents=" + encodeURIComponent(contents),
           success: function(data) {
                console.log(data);
                $('#contents').html(data);
                
                $('table').addClass('table table-striped table-bordered');
           }
        });
        
    }



}