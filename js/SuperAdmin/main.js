$(function(e) {
    $('.main-toggle').click(function () {
        var toggleBtn = $(this);
        var sch_id = Number($(this).closest('td').parent('tr').children('td').eq(0).text());
        var state = (toggleBtn.hasClass('on'))? 1 : 0;
        var text = (state)? "suspended" : "activated";
        var btn_txt = (state)? "suspend" : "active";
        swal({
            title: "Are you sure?",
            text: "This school will be " + text + "!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            cancelButtonText: "No, cancel!",
            confirmButtonText: "Yes, " + btn_txt + " it!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {            
                $.ajax({
                    url: "schools/act_sus/" + sch_id,
                    type: "POST",
                    success: function(result){
                        if(state)
                            swal("Suspended!", "This school has been suspended.", "error");
                        else
                            swal("Activated!", "This school has been activated.", "success");
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
            }
        });
    });
});