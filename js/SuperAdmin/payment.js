$(function(e) {
    $('.payment_edit').click(function () {
        var this_row = $(this).parent('div').closest('td').parent('tr').children('td');
        var sch_data = Number(this_row.eq(0).text());
        // alert(sch_data); 
        $('#sch_id').val(sch_data);
        sch_data = Number(this_row.eq(4).text());
        $('#sch_pay_actual').val(sch_data);
        sch_data = Number(this_row.eq(5).text());
        $('#sch_pay_paid').val(sch_data);
        sch_data = Number(this_row.eq(6).text());
        $('#sch_pay_pending').val(sch_data);
        var sch_data = this_row.eq(1).text();
        $('#sch_name').text(sch_data);
    });
});