/**
 * Created by hlogeon on 6/14/15.
 */
$(document).ready(function(){
    $('.htmlTreeJs').jstree();

    $.ajax({
        url: "/category",
        method: "GET"
    }).success(function(response){
        //for(var i = 0; i < response.length; i++){
        //
        //}
        $("#jstree").jstree({
            core: {
                data: response
            }
        });
    });
});