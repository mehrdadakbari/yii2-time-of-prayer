/**
 * Created by M.Akbari on 8/10/2016.
 */

(function ($) {
    $('#dropdown-province').on('change', function () {
        $.ajax({
             type     :"Post",
             cache    : false,
             url  : "site/prayer",
             data : {"province":this.value},
             success  : function(data) {
                var option = "";
                 $("#dropdown-city").empty();
                for(var i=0;data[i];i++)
                     option += '<option value="'+ data[i] + '">' + data[i] + '</option>';
                 $("#dropdown-city").append(option);
             }
        })
    })
    
    $('#dropdown-city').on('change', function () {
        $.ajax({
            type     :"Get",
            cache    : false,
            url  : $(this).data("url"),
            data : {"province":$("#dropdown-province").val(),"city":this.value},
            success  : function(data) {
                $("#prayer-content").html($(data).find(".prayer-row"));
            }
        })
    })
})