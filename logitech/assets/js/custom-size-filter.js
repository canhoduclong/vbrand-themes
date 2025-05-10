jQuery(document).ready(function($) {
    $('.size-filter-checkbox').on('change', function() {
        var termSlug = String($(this).data('term'));
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var paramName = 'filter_pa_size';
        var currentValues = urlParams.get(paramName) ? urlParams.get(paramName).split(',') : [];

        if ($(this).is(':checked')) {
            if (!currentValues.includes(termSlug)) {
                currentValues.push(termSlug);
            }
        } else {
            currentValues = currentValues.filter(function(value) {
                return value !== termSlug;
            });
        }

        if (currentValues.length > 0) {
            urlParams.set(paramName, currentValues.join(','));
        } else {
            urlParams.delete(paramName);
        }

        window.location.search = urlParams.toString();
    });

    $('.color-filter-checkbox').on('change', function() {
        var termSlug = String($(this).data('color'));
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var paramName = 'filter_pa_color';
        var currentValues = urlParams.get(paramName) ? urlParams.get(paramName).split(',') : [];

        if ($(this).is(':checked')) {
            if (!currentValues.includes(termSlug)) {
                currentValues.push(termSlug);
            }
        } else {
            currentValues = currentValues.filter(function(value) {
                return value !== termSlug;
            });
        }

        if (currentValues.length > 0) {
            urlParams.set(paramName, currentValues.join(','));
        } else {
            urlParams.delete(paramName);
        }

        window.location.search = urlParams.toString();
    });

    $('.clcate').on('click', function(event){
        //event.preventDefault();
        //$(this).toggleClass('selected'); 
        //var cate = $(this).data('cate'); 

        var cate = String($(this).data('cate'));
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var paramName = 'filter_pa_cate';
        var currentValues = urlParams.get(paramName) ? urlParams.get(paramName).split(',') : [];

        if ($(this).is(':checked')) {
            if (!currentValues.includes(cate)) {
                currentValues.push(cate);
            }
        } else { 
            currentValues = currentValues.filter(function(value) {
                return value !== cate;
            });  
        }

        if (currentValues.length > 0) {
            urlParams.set(paramName, currentValues.join(','));
        } else {
            urlParams.delete(paramName);
        }
        setTimeout(  window.location.search = urlParams.toString() , 2000);
 
    })

});
