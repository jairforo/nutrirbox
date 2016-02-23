//Calendario Semanal
$(function () {
    $('#external-events div.external-event').each(function () {
        var eventObject = {
            title: $.trim($(this).text())
        };

        $(this).data('eventObject', eventObject);
        $(this).draggable({
            zIndex: 999,
            revert: true,
            revertDuration: 0
        });
    });

    $('#calendar').fullCalendar({
        defaultView: 'agendaWeek',
        firstDay: 0,
        allDaySlot: false,
        axisFormat: 'h(:mm) a',
        lang: 'pt-br',
        dayNamesShort: [
            'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'
        ],
        header: {
            left: '',
            center: '',
            right: ''
        },
        defaultDate: moment().format('YYYY-MM-DD'),
        editable: true,
        eventLimit: true,
        events: {
            url: '/app_dev.php/user/horario/list-json',
            type: 'POST',
            data: {coPlanejamentoSemanal: $("#calendar").attr('coPlanejamentoSemanal')},
            error: function () {
                bootbox.alert("Houve um erro ao buscar os eventos!");
            }
        },
        droppable: true,
        // Drop para dentro do Calendario
        drop: function (date) {
            console.log(date, date);
            $(".modal select#coAtividadeModal option[value='" + $(this).attr('coAtividade') + "']").attr("selected", true);
//            $(".modal input#hrInicio").val(date.start.format('HH:mm:ss'));
//            $(".modal input#hrFim").val(date.end.format('HH:mm:ss'));
            bootbox.dialog({
                title: "Evento",
                message: $('#modal-calendar').html(),
                buttons: {
                    success: {
                        label: "Salvar",
                        className: "btn-success",
                        callback: function () {
                            var coAtividade = $('.modal select#coAtividadeModal:last option:selected').val();
                            var hrInicio = $('.modal input[name=hrInicio]:last').val();
                            var hrFim = $('.modal input[name=hrFim]:last').val();
                            var diaSemanaCurto = [];
                            $(".modal input[type=checkbox][name='diaSemanaCurto[]']:checked").each(function () {
                                diaSemanaCurto.push($(this).val());
                            });

                            if (coAtividade !== null) {
                                var data = {
                                    coPlanejamentoSemanal: $("#calendar").attr('coPlanejamentoSemanal'),
                                    coAtividade: coAtividade,
                                    hrInicio: hrInicio,
                                    hrFim: hrFim,
                                    diaSemanaCurto: diaSemanaCurto
                                };
                                $.ajax({
                                    url: '/app_dev.php/user/horario/insert-json',
                                    data: data,
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function (response) {
                                        $.each(response, function (key, value) {
                                            $('#calendar').fullCalendar('renderEvent', value, false);
                                        });
                                    },
                                    error: function () {
                                        bootbox.alert("Houve um erro ao alterar o evento!");
                                    }
                                });
                            }
                        }
                    }
                }
            });
            $('#calendar').fullCalendar('unselect');
        },
        eventDrop: function (date) {
            var data = {
                coPlanejamentoSemanal: $("#calendar").attr('coPlanejamentoSemanal'),
                coHorario: date._id,
                hrFim: (date.end) ? date.end.format('HH:mm:ss') : null,
                hrInicio: date.start.format('HH:mm:ss'),
                dtInicio: date.start.format('YYYY-MM-DD')
            };
            AjaxRequest('user/horario/edit-json', data, date._id, true);
        },
        selectable: true,
        selectHelper: true,
        select: function (date) {
            bootbox.dialog({
                title: "Evento",
                message: $('#modal-calendar').html(),
                buttons: {
                    success: {
                        label: "Salvar",
                        className: "btn-success",
                        callback: function () {
                            var coAtividade = $('.modal select#coAtividadeModal:last option:selected').val();
                            var hrInicio = $('.modal input[name=hrInicio]:last').val();
                            var hrFim = $('.modal input[name=hrFim]:last').val();
                            var diaSemanaCurto = [];
                            $(".modal input[type=checkbox][name='diaSemanaCurto[]']:checked").each(function () {
                                diaSemanaCurto.push($(this).val());
                            });

                            if (coAtividade !== null) {
                                var data = {
                                    coPlanejamentoSemanal: $("#calendar").attr('coPlanejamentoSemanal'),
                                    coAtividade: coAtividade,
                                    hrInicio: hrInicio,
                                    hrFim: hrFim,
                                    diaSemanaCurto: diaSemanaCurto
                                };
                                $.ajax({
                                    url: '/app_dev.php/user/horario/insert-json',
                                    data: data,
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function (response) {
                                        $.each(response, function (key, value) {
                                            $('#calendar').fullCalendar('renderEvent', value, false);
                                        });
                                    },
                                    error: function () {
                                        bootbox.alert("Houve um erro ao alterar o evento!");
                                    }
                                });
                            }
                        }
                    }
                }
            });
            $('#calendar').fullCalendar('unselect');
        },
        eventClick: function (date) {
            $(".modal input#hrInicio").val(date.start.format('HH:mm:ss'));
            $(".modal input#hrFim").val(date.end.format('HH:mm:ss'));
            $(".modal  #" + date.start.format('ddd')).attr('checked', 'checked');

            bootbox.dialog({
                title: "Evento",
                message: $('#modal-calendar').html(),
                buttons: {
                    success: {
                        label: "Salvar",
                        className: "btn-success",
                        callback: function () {
                            var coAtividade = $('.modal select#coAtividadeModal:last option:selected').val();

                            if (coAtividade !== null) {
                                var data = {
                                    coHorario: date._id,
                                    coAtividade: coAtividade
                                };
                                AjaxRequest('user/horario/edit-json', data, date._id, true);
                            }
                        }
                    },
                    deletar: {
                        label: "Remover",
                        className: "btn-danger",
                        callback: function () {
                            var coAtividade = $('.modal select#coAtividadeModal:last option:selected').val();
                            if (coAtividade !== null) {
                                $.ajax({
                                    url: '/app_dev.php/user/horario/delete-json',
                                    data: {
                                        coHorario: date._id
                                    },
                                    type: 'POST',
                                    success: function (response) {
                                        if (response === 'Sucesso')
                                            $('#calendar').fullCalendar('removeEvents', function (ev) {
                                                return (ev._id === date._id);
                                            });
                                    },
                                    error: function () {
                                        bootbox.alert("Houve um erro ao Remover o evento!");
                                    }
                                });
                            }
                        }
                    }
                }
            });
        },
        eventResize: function (date) {
            var data = {
                coHorario: date._id,
                hrFim: date.end.format('HH:mm:ss'),
                hrInicio: date.start.format('HH:mm:ss'),
            };
            AjaxRequest('user/horario/edit-json', data, date._id, true);
        }
    });
    $('.fc-toolbar').remove();

    // Funcao de RequisicaoAjax
    AjaxRequest = function (url, data, id, booRemover, booExcluir) {
        $.ajax({
            url: '/app_dev.php/' + url,
            data: data,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if (booRemover === true) {
                    $('#calendar').fullCalendar('removeEvents', id);
                }

                $('#calendar').fullCalendar('renderEvent', response, false);
            },
            error: function () {
                bootbox.alert("Houve um erro ao alterar o evento!");
            }
        });
    };

    // Valida o Botão Duplicar
    $('#btn-duplicar').click(function () {
        bootbox.confirm("Você tem certeza?", function (result) {
            if (result === true) {
                $('#frmDuplicar').submit();
            }
        });
    });

    $('*[data-poload]').click(function () {
        var obj = $(this);
        $.post(obj.data('poload'), {coAtividade: obj.attr('coAtividade')}, function (d) {
            obj.popover({content: d, html: true}).popover('show');
        });
    });

    // Time modal
    $('.timepicker').timepicker();
});