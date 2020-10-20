$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Asesoria/preguntita",
            async: false,
            dataType: "json",
            success: function(data) {

                for (let i = 0, ien = data.preguntas.length; i < ien+1; i++) {
                    alert('paso');
                    var $select = $('#custom-tabs-one-'+data.preguntas[i].num_rama);
                     $select.append('<div class="row">'+
                                     '<div class="col-lg-6">'+
                                        '<div class="form-group">'+
                                        '<label>'+data.preguntas[i].pregunta+'</label>'+
                                        '<input type="text"class="form-control">'+
                                              '</div>'+
                                            '</div>'+
                                        '</div');


                }
            },
            error: function(err) {
                //alert('error');
            }
        });

    });