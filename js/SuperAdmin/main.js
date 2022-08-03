$(function(e) {
    $('.main-toggle').click(function () {
        var toggleBtn = $(this);
        var sch_id = Number($(this).closest('td').parent('tr').children('td').eq(0).text());
        swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        cancelButtonText: "No, cancel!",
        confirmButtonText: "Yes, active it!",
        closeOnConfirm: false,
        closeOnCancel: false
        },
        function(isConfirm) {
        if (isConfirm) {            
            $.ajax({
                url: "schools/act_sus/" + sch_id,
                type: "POST",
                success: function(result){
                    swal("Activated!", "Your imaginary file has been deleted.", "success");
                    toggleBtn.toggleClass('on');
                },
                error: function(xhr, status, error){
                    swal({
                        type: "error",
                        title: "Model was unable to load",
                        text: xhr.status + " " + xhr.statusText,
                    });
                }
            });
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
        });
    });
});