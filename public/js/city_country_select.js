/**
 * Created by hlogeon on 6/7/15.
 */
$(document).ready(function() {
    var countrySelect = $(".country-select");
    var citySelect = $(".city-select");
    var citySelectOptions = $(".city-select option");
    countrySelect.select2();
    citySelect.select2({
        formatLoadMore   : 'Loading more...',
        query            : function (q) {
            // pageSize is number of results to show in dropdown
            var pageSize,
                results;
            pageSize = 20;
            results  = $.grep(this.data, function (e) {
                return (q.term === "" || e.name.toUpperCase().indexOf(q.term.toUpperCase()) >= 0);
            });
            q.callback({
                results: results.slice((q.page - 1) * pageSize, q.page * pageSize),
                // retrieve more when user hits bottom
                more   : results.length >= q.page * pageSize
            });
        }
    });

    countrySelect.on('change', function(){
        //citySelectOptions.each(function(){
        //    $(this).remove();
        //});
        //citySelect.append('<option value="empty">Выберите город</option>');
        //citySelect.HTML = '';
        $.ajax({
            url: "/location/loadCities/"+$(".country-select").select2('data').id,
            context: document.body
        }).done(function(data){
            for(var i = 0; i < data.length; i++){
                data[i].text = data[i].name;
                //citySelect.append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
            }
            citySelect.select2({
                data: data,
                formatLoadMore   : 'Loading more...',
                query            : function (q) {
                    // pageSize is number of results to show in dropdown
                    var pageSize,
                        results;
                    pageSize = 20;
                    results  = $.grep(this.data, function (e) {
                        return (q.term === "" || e.name.toUpperCase().indexOf(q.term.toUpperCase()) >= 0);
                    });
                    q.callback({
                        results: results.slice((q.page - 1) * pageSize, q.page * pageSize),
                        // retrieve more when user hits bottom
                        more   : results.length >= q.page * pageSize
                    });
                }
            })
        });
    });
});