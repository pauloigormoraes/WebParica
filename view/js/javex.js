$(window).ready(function(){

    function loading() {
        $("#MainFrame").html('<div class="row" style="text-align: center; margin-top: 15%; color: #999"><span style="font-size: 10em;margin:50px" class="glyphicon glyphicon-refresh" id="loading"></span><br><span style="font-size: 1.24em">Carregando, por favor aguarde...</span></div>');
    }

    function error(msg){
        $("#MainFrame").html("<div style='padding: 50px;'> <h1><b>Ajax Error</b></h1><br> <span style='font-size:1.4em'>" + msg + "</span> <br><br><br> Em caso de dúvidas, entre em contato com os desenvolvedores: <a href='http://www.allexlima.com'>Allex Lima - (92) 981914317</a> ou <a href='http://www.moraespaulo.com'>Paulo Moraes - (92) 994484599</a>.</div>");
    }

    function showPage(page, action){
        loading();
        $("#MainFrame").load( "view/" + page + ".php", action);
    }

    function table(element){

        $(element).DataTable({
            "bDestroy": true,
            "language": {
                "lengthMenu": "Mostrar _MENU_ itens por página",
                "zeroRecords": "Não há dados para serem listados!",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Sua busca não resultou dados para serem listados!",
                "infoFiltered": "(Busca realizada nos _MAX_ registros cadastrados)",
                "search": "Pesquisar: ",
                "paginate": {
                    "first":      "Início",
                    "last":       "Última",
                    "next":       "Próxima",
                    "previous":   "Previous"
                }
            }
        });
    }

    function ajaxCall(address, content){
        $.ajax({
            url: "./request/" + address,
            data: content,
            method: "POST",
            beforeSend: function(){
                loading();
            },
            success: function(result){
                if(result == "1") showPage("sucesso");
                else error(result);
            },
            error: function(){
                error("Operação não realizada com sucesso! Tente novamente.");
            }
        });
    }

    function menu(link){
        loading();
        switch(link){
            case 'cadastrogeral':
                showPage("cadastrogeral", function (){getLink();});
                break;

            case 'listagemgeral':
                showPage("listagemgeral", function (){getLink();});
                break;

            case 'aluno':
                showPage(link, function(){
                    $("#inserirAlunos").submit(function(){
                        ajaxCall("cadastrarAlunos", $(this).serialize());
                    });
                });
                break;

            case 'cargo':
                showPage(link, function(){
                    $("#inserirCargo").submit(function(){
                        ajaxCall("cadastrarCargo", $(this).serialize());
                    });
                });
                break;

            case 'colaborador':
                showPage(link, function(){
                    $.ajax({url: "request/listarCargo",
                        beforeSend: function(){
                            $('#sl_cargo_n').html("<option value='' disabled selected>Carregando...</option>");
                        }, success: function(result){
                            var model = "<option value='' disabled selected>Selecione</option>";
                            $(result).each(function(){
                                var json = $(this)[0];
                                model += "<option value='"+json.ca_id+"'>"+json.ca_nome+"</option>";
                            });
                            $('#sl_cargo_n').html(model);
                        }, error: function(){
                            $('#sl_cargo_n').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                        }
                    });

                    $("#inserirColaborador").submit(function(){
                        ajaxCall("cadastrarColaborador", $(this).serialize());
                    });
                });
                break;

            case 'turma':
                showPage(link, function(){
                    $("#inserirTurma").submit(function(){
                        ajaxCall("cadastrarTurma", $(this).serialize());
                    });
                });
                break;

            case 'materia':
                showPage(link, function(){
                    $.ajax({url: "request/listarColaborador",
                        beforeSend: function(){
                            $('select[name="ma_co_id"]').html("<option value='' disabled selected>Carregando...</option>");
                        }, success: function(result){
                            var model = "<option value='' disabled selected>Selecione</option>";
                            $(result).each(function(){
                                var json = $(this)[0];
                                model += "<option value='"+json.co_id+"'>"+json.co_nome+"</option>";
                            });
                            $('select[name="ma_co_id"]').html(model);
                        }, error: function(){
                            $('select[name="ma_co_id"]').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                        }
                    })
                    $.ajax({url: "request/listarTurma",
                        beforeSend: function(){
                            $('select[name="ma_tu_id"]').html("<option value='' disabled selected>Carregando...</option>");
                        }, success: function(result){
                            var model = "<option value='' disabled selected>Selecione</option>";
                            $(result).each(function(){
                                var json = $(this)[0];
                                model += "<option value='"+json.tu_id+"'>"+json.tu_nome+"</option>";
                            });
                            $('select[name="ma_tu_id"]').html(model);
                        }, error: function(){
                            $('select[name="ma_tu_id"]').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                        }
                    });
                    $("#inserirMateria").submit(function(){
                        ajaxCall("cadastrarMateria", $(this).serialize());
                    });
                });
                break;

            case 'listMaterias':
                showPage(link, function() {
                    $.ajax({
                        url: "request/listarMateria",
                        success: function (result) {
                            var model = "";
                            $(result).each(function (index) {
                                var json = $(this)[0];
                                model += "<tr i='" + index + "'><td>" + json.ma_id + "</td><td>" + json.ma_nome + "</td><td>" + json.co_nome + "</td><td>" + json.tu_nome + "</td></tr>";
                            });
                            $("table tbody").html(model);
                            table("table");
                            $("table tbody tr").click(function(){
                                var line = result[$(this).attr("i")];
                                showPage("materia", function(){

                                    $(".panel-heading").html("Atualizar Matéria");
                                    $(".btn").html("Salvar Alterações");
                                    $('input[name="id"]').val(line.ma_id);
                                    $('input[name="ma_nome"]').val(line.ma_nome);
                                    $.ajax({url: "request/listarColaborador",
                                        beforeSend: function(){
                                            $('select[name="ma_co_id"]').html("<option value='' disabled selected>Carregando...</option>");
                                        }, success: function(result){
                                            var model = "";
                                            $(result).each(function(){
                                                var json = $(this)[0]; //line.cargo_ca_id == json.ca_id
                                                if(line.ma_co_id == json.co_id)
                                                    model += "<option value='"+json.co_id+"' selected>"+json.co_nome+"</option>";
                                                else
                                                    model += "<option value='"+json.co_id+"'>"+json.co_nome+"</option>";
                                            });
                                            $('select[name="ma_co_id"]').html(model);
                                        }, error: function(){
                                            $('select[name="ma_co_id"]').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                                        }
                                    })
                                    $.ajax({url: "request/listarTurma",
                                        beforeSend: function(){
                                            $('select[name="ma_tu_id"]').html("<option value='' disabled selected>Carregando...</option>");
                                        }, success: function(result){
                                            var model = "";
                                            $(result).each(function(){
                                                var json = $(this)[0];
                                                if(json.tu_id == line.ma_tu_id)
                                                    model += "<option value='"+json.tu_id+"' selected>"+json.tu_nome+"</option>";
                                                else
                                                    model += "<option value='"+json.tu_id+"'>"+json.tu_nome+"</option>";
                                            });
                                            $('select[name="ma_tu_id"]').html(model);
                                        }, error: function(){
                                            $('select[name="ma_tu_id"]').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                                        }
                                    });

                                    $("#inserirMateria").submit(function(){
                                        ajaxCall("atualizarMateria", $(this).serialize());
                                    });
                                });
                            });
                        }
                    });
                });
                break;

            case 'listTurmas':
                showPage(link, function() {
                    $.ajax({
                        url: "request/listarTurma",
                        success: function (result) {
                            var model = "";
                            $(result).each(function (index) {
                                var json = $(this)[0];
                                var turno = ["Matutino", "Vespertino", "Noturno", "Diúrno"];
                                model += "<tr i='" + index + "'><td>" + json.tu_id + "</td><td>" + json.tu_nome + "</td><td>" + turno[json.tu_turno] + "</td><td>" + json.tu_ano + "</td></tr>";
                            });
                            $("table tbody").html(model);
                            table("table");
                            $("table tbody tr").click(function(){
                                var line = result[$(this).attr("i")];
                                showPage("turma", function(){
                                    $(".panel-heading").html("Atualizar Turma");
                                    $(".btn").html("Salvar Alterações");
                                    $('input[name="id"]').val(line.tu_id);
                                    $('input[name="turma_nome"]').val(line.tu_nome);
                                    $('input[name="turma_ano"]').val(line.tu_ano);
                                    $('select[name="turma_turno"] option').each(function(){
                                        if($(this).val() == line.tu_turno){
                                            $(this).attr("selected","selected");
                                        }
                                    });
                                    $("#inserirTurma").submit(function(){
                                        ajaxCall("atualizarTurma", $(this).serialize());
                                    });
                                });
                            });
                        }
                    });
                });
                break;            

            case 'listAluno':
                showPage(link, function(){
                    $.ajax({url: "request/listarAlunos",
                        success: function(result){
                            var model = "";
                            $(result).each(function(index){
                                var json = $(this)[0];
                                var turno = ["Matutino", "Vespertino", "Noturno", "Diúrno"];
                                model += "<tr i='"+index+"'><td>"+json.al_id+"</td><td>"+json.al_nome_aluno+"</td><td>"+json.al_nome_mae+"</td><td>"+json.tu_nome+"</td><td>"+turno[json.tu_turno]+"</td></tr>";
                            });
                            $("table tbody").html(model);
                            table("table");
                            $("table tbody tr").click(function(){
                                var line = result[$(this).attr("i")];
                                showPage("atualizarAluno", function(){
                                    $('input[name="id_al"]').val(line.al_id);
                                    $('input[name="id_ct"]').val(line.ct_id);
                                    $('input[name="nome_aluno"]').val(line.al_nome_aluno);
                                    $('input[name="naturalidade"]').val(line.al_naturalidade);
                                    $('input[name="nacionalidade"]').val(line.al_nacionalidade);
                                    $('input[name="cpf_aluno"]').val(line.al_cpf_aluno);
                                    $('input[name="rg_aluno"]').val(line.al_rg_aluno);
                                    $('input[name="orgExp"]').val(line.al_orgExp);
                                    $('input[name="dt_nasc"]').val(line.al_dt_nasc);
                                    $('select[name="estadoCivil"] option').each(function(){
                                        if($(this).val() == line.al_estadoCivil){
                                            $(this).attr("selected","selected");
                                        }
                                    });
                                    $('select[name="pcd"] option').each(function(){
                                        if($(this).val() == line.al_pcd){
                                            $(this).attr("selected","selected");
                                        }
                                    });
                                    $('input[name="cert_nasc"]').val(line.al_cert_nasc);
                                    $('input[name="nome_mae"]').val(line.al_nome_mae);
                                    $('input[name="cpf_mae"]').val(line.al_cpf_mae);
                                    $('input[name="rg_mae"]').val(line.al_rg_mae);
                                    $('input[name="nome_pai"]').val(line.al_nome_pai);
                                    $('input[name="cpf_pai"]').val(line.al_cpf_pai);
                                    $('input[name="rg_pai"]').val(line.al_rg_pai);
                                    $('select[name="situacao"] option').each(function(){
                                        if($(this).val() == line.al_situacao){
                                            $(this).attr("selected", "selected");
                                        }
                                    });
                                    
                                    $('textarea[name="obs"]').val(line.al_obs);

                                    $('input[name="lagradouro"]').val(line.ct_lagradouro);
                                    $('input[name="numero"]').val(line.ct_numero);
                                    $('input[name="bairro"]').val(line.ct_bairro);
                                    $('input[name="cidade"]').val(line.ct_cidade);
                                    $('select[name="estado"] option').each(function(){
                                        if($(this).val() == line.ct_estado.toUpperCase()){
                                            $(this).attr("selected", "selected");
                                        }
                                    });
                                    $('input[name="tel_1"]').val(line.ct_tel_1);
                                    $('input[name="tel_2"]').val(line.ct_tel_2);
                                    $('input[name="email"]').val(line.ct_email);

                                    $("#ddpessoais").submit(function(){
                                        ajaxCall("atualizarAlunos", $(this).serialize());
                                    });
                                    $("#endereco").submit(function(){
                                        ajaxCall("atualizarContato", $(this).serialize());
                                    });
                                    $("#turma").submit(function(){
                                        ajaxCall("atualizarAlunoTurma", $(this).serialize());
                                    });
                                });
                            });
                        }
                    });

                });
                break;

            case 'listCargos':
                showPage(link, function(){
                    $.ajax({url: "request/listarCargo",
                        success: function(result){
                            var model = "";
                            $(result).each(function(index){
                                var json = $(this)[0];
                                var turno = ["Matutino", "Vespertino", "Noturno", "Diúrno"];
                                model += "<tr i='"+index+"'><td>"+json.ca_id+"</td><td>"+json.ca_nome+"</td><td>"+json.ca_salario+"</td><td>"+turno[json.ca_turno]+"</td></tr>";
                            });
                            $("table tbody").html(model);
                            table("table");
                            $("table tbody tr").click(function(){
                                var line = result[$(this).attr("i")];
                                showPage("cargo", function(){
                                    $(".panel-heading").html("Atualizar Cargo");
                                    $(".btn").html("Salvar Alterações");
                                    $('input[name="id"]').val(line.ca_id);
                                    $('input[name="cargo_nome"]').val(line.ca_nome);
                                    $('input[name="cargo_salario"]').val(line.ca_salario);
                                    $('select[name="cargo_turno"] option').each(function(){
                                        if($(this).val() == line.ca_turno){
                                            $(this).attr("selected","selected");
                                        }
                                    });
                                    $("#inserirCargo").submit(function(){
                                        ajaxCall("atualizarCargo", $(this).serialize());
                                    });
                                });
                            });
                        }
                    });

                });
                break;

            case 'listColaboradores':
                showPage(link, function(){
                    $.ajax({url: "request/listarColaborador",
                        success: function(result){
                            $(result).each(function(index){
                                var model = "";
                                $(result).each(function(index){
                                    var json = $(this)[0];
                                    var turno = ["Matutino", "Vespertino", "Noturno", "Diúrno"];
                                    model += "<tr i='"+index+"'><td>"+json.co_id+"</td><td>"+json.co_nome+"</td><td>"+json.co_cpf+"</td><td>"+json.co_rg+"</td><td>"+json.ca_nome+"</td><td>"+json.ca_salario+"</td><td>"+turno[json.ca_turno]+"</td></tr>";
                                });
                                $("table tbody").html(model);
                                table("table");
                                $("table tbody tr").click(function(){
                                    var line = result[$(this).attr("i")];
                                    showPage("colaborador", function(){
                                        $(".panel-heading").html("Atualizar Colaborador");
                                        $(".btn").html("Salvar Alterações");
                                        $('input[name="id"]').val(line.co_id);
                                        $('input[name="nome"]').val(line.co_nome);
                                        $('input[name="cpf"]').val(line.co_cpf);
                                        $('input[name="rg"]').val(line.co_rg);
                                        $.ajax({url: "request/listarCargo",
                                            beforeSend: function(){
                                                $('#sl_cargo_n').html("<option value='' disabled selected>Carregando...</option>");
                                            }, success: function(result){
                                                var model = "";
                                                $(result).each(function(){
                                                    var json = $(this)[0];
                                                    if(line.cargo_ca_id == json.ca_id)
                                                        model += "<option value='"+json.ca_id+"' selected>"+json.ca_nome+"</option>";
                                                    else
                                                        model += "<option value='"+json.ca_id+"'>"+json.ca_nome+"</option>";
                                                });
                                                $('#sl_cargo_n').html(model);
                                            }, error: function(){
                                                $('#sl_cargo_n').html("<option value='' disabled selected>Erro ao carregar cargos</option>");
                                            }
                                        });
                                        $("#inserirColaborador").submit(function(){
                                            ajaxCall("atualizarColaborador", $(this).serialize());
                                        });
                                    });
                                });
                            });
                        }
                    });
                });
                break;            
            
            default:
                showPage(link);
                break;
        }
    }

    function getLink(){
        $('a').bind('click',function(event) {
            var anchor = $(this).attr('href');
            anchor = anchor.split("#");
            anchor = anchor[1];
            menu(anchor);
        });
    }

    showPage("home");
    getLink();
    

});