$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data2.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            
            var newLine = $('#tbl_izv');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + 
                    value.id + '</td><td>' + 
                    value.date + '</td><td>' + 
                    value.name + '</td><td>' + 
                    value.eis + '</td><td>' + 
                    value.num_prot + '</td><td>' + 
                    value.ikz + '</td><td>' + 
                    value.srcs + '</td><td>' + 
                    value.kvr + '</td><td>' + 
                    value.kosgu + '</td><td>' + 
                    value.object + '</td><td>' + 
                    value.date_post + '</td><td>' + 
                    value.isp_date_pp + '</td><td>' + 
                    value.isp_date_fact + '</td><td>' + 
                    value.pay_subs + '</td><td>' + 
                    value.pay_budg + '</td><td>' + 
                    value.dop_sogl + '</td><td>' + 
                    value.peren_21 + '</td><td>' + 
                    value.opl_22 + '</td><td>' + 
                    value.opl_23 + '</td><td>' + 
                    value.all_pay + '</td><td>' + 
                    value.ostatok + '</td><td>' + 
                    value.change + '</td><td>' + 
                    value.neustoyka + '</td><td>' + 
                    value.rastorgnut + '</td><td>' + 
                    value.price_sub + '</td><td>' + 
                    value.price_budgt + '</td><td>' + 
                    value.price_contr + '</td><td>' + 
                    value.nach + '</td><td>' + 
                    value.economy + '</td><td>' + 
                    value.way + '</td><td>' + 
                    value.amount + '</td><td>' + 
                    value.not_take_part + '</td><td>' + 
                    value.reduction_of_25 + '</td><td>' + 
                    value.rejected + '</td><td>' + 
                    value.status + '</td><td>' + 
                    value.reserve + '</td><td>' + 
                    value.SMP + '</td><td>' + 
                    value.pp126n + '</td><td>' + 
                    value.pp3500P_OI + '</td><td>' + 
                    value.pp3500P_UIS + '</td><td>' + 
                    value.pp1292 + '</td><td>' + 
                    value.pp616 + '</td><td>' + 
                    value.pp617 + '</td><td>' + 
                    value.pp878 + '</td><td>' + 
                    value.pp1236 + '</td><td>' + 
                    value.pp2014 + '</td><td>' + 
                    value.type + '</td><td>' + 
                    value.provider + '</td><td>' + 
                    value.inn_prov + '</td><td>' + 
                    value.gruz + '</td><td>' + 
                    value.payer + '</td><td>' + 
                    value.reserve2 + '</td><td>' + 
                    value.pg + '</td><td>' + 
                    value.note + '</td><td>' + 
                    value.view1 + '</td><td>' + 
                    value.sum1 + '</td><td>' + 
                    value.date_PP_or_BG + '</td><td>' + 
                    value.validity_period1 + '</td><td>' + 
                    value.return_date + '</td><td>' + 
                    value.guarantee_yesNo + '</td><td>' + 
                    value.view2 + '</td><td>' + 
                    value.sum2 + '</td><td>' + 
                    value.date_PP_or_BG + '</td><td>' + 
                    value.validity_period2 + '</td><td>' + 
                    value.date_return + '</td></tr>';
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');
            $("#tbl_izv").trigger('updateCache');
            $("#tbl_izv").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    });
});