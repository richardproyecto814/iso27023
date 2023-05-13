$(document).ready(function() {
    $('.js-select2').select2({
        placeholder: 'CATEGORIAS',
        ajax: {
            url: '/categorias',
            dataType: 'json',
            processResults: function(data) {
                var results = [];

                for (var i = 0; i < data.length; i++) {
                    var categoria = {
                        id: i + 1,
                        text: data[i]
                    };

                    results.push(categoria);
                }

                return {
                    results: results
                };
            }
        }
    });
});