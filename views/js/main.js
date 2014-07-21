$(document).ready(function() {

        /* Ocultar Formularios */
            $('#opc_inser_bd').hide();
            

        /* Mostrar tablas a insertar */
            $('#btn_opc_inser_bd').click(
              function(){
                $('#opc_inser_bd').show('slow');
              }
            );
            
            $('#MostrarJugador').click(
              function(){
                $('#form_tipo_jugador').show('slow');
                $('#form_tipo_entrenador').hide();
              }
            );
            
            $('#MostrarEntrenador').click(
              function(){
                $('#form_tipo_entrenador').show('slow');  
                $('#form_tipo_jugador').hide();
              }
            );

        /* Fancybox */
            $('.various').fancybox({
              maxWidth  : 800,
              maxHeight : 600,
              fitToView : false,
              width   : '70%',
              height    : '70%',
              autoSize  : false,
              closeClick  : false,
              openEffect  : 'none',
              closeEffect : 'none'
            });

        /* Bootstrapvalidator */
            $('.registerForm').bootstrapValidator({
              message: 'Este valor no es valido',
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                idcontinente: {
                  message: 'Continente no válido',
                  validators: {
                    notEmpty: {
                      message: 'Seleccione un continente, campo necesario'
                    }
                  }
                },
                idciudad: {
                  message: 'Campo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                idpais:{
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    }
                  }
                },
                idequipo: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    }
                  }
                },
                bandera: {
                  message: 'Compo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                escudo: {
                  message: 'Compo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                titulo: {
                  message: 'El titulo no es valido',
                  validators: {
                    notEmpty: {
                      message: 'El titulo es requerido y no puede ser nulo'
                    },
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'El titulo solo acepta caracteres alfanumericos y guiones cortos'
                    }
                  }
                },
                subtitulo: {
                  message: 'El subtitulo no es valido',
                  validators: {
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'El subtitulo solo acepta caracteres alfanumericos y guiones cortos'
                    }
                  }
                },
                portada: {
                  message: 'Es necesario una portada',
                  validators:{
                    notEmpty:{
                      message:'Portada necesaria para continuar'
                    }
                  }
                },
                foto: {
                  message: 'Campo requerido para continuar',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    }
                  }
                },
                fecha: {
                  message: 'La fecha no es valida',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    }
                  }
                },
                numero: {
                  message: 'El formato de numero no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9]+$/,
                      message: 'Formato de numero no valido'
                    }
                  }
                },
                Edad: {
                  message: 'El formato de edad no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9]+$/,
                      message: 'Formato de numero no valido'
                    }
                  }
                },
                peso: {
                  message: 'El formato de peso no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9.]+$/,
                      message: 'Formato de peso no valido'
                    }
                  }
                },
                estatura: {
                  message: 'El formato de peso no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9.]+$/,
                      message: 'Formato de peso no valido'
                    }
                  }
                },
                volumen: {
                  message: 'El formato de volumen no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9-_]+$/,
                      message: 'Formato de volumen no valido'
                    }
                  }
                },
                clave: {
                  message: 'La clave no es valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 6,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9. -_]+$/,
                      message: 'Formato de clave no valido'
                    }
                  }
                },
                nombre: {
                  message: 'El nombre no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 1 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de nombre no valido'
                    }
                  }
                },
                abreviatura: {
                  message: 'La abreviatura no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 5,
                      message: 'Debe ser mayor a 1 caracteres y menor a 5'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de abreviatura no valido'
                    }
                  }
                },
                Nombre: {
                  message: 'El nombre no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 1 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de nombre no valido'
                    }
                  }
                },
                apellido: {
                  message: 'El apellido no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 50,
                      message: 'Debe ser mayor a 1 caracteres y menor a 50'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de apellido no valido'
                    }
                  }
                },
                editorial: {
                  message: 'La editorial no es valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 6,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'Formato de editorial no valido'
                    }
                  }
                },
                directorio: {
                  message: 'El directorio no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 6,
                      max: 30,
                      message: 'Debe ser mayor a 6 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9 -]+$/,
                      message: 'Formato de directorio no valido'
                    }
                  }
                }
              }
            });

/* Datetimepicker 
    Este solo es en caso de que el datepicker sea
    igual al del ejemplo num 6 de los de datepicker
*/
            $(function () {
                $('#datetimepicker6').datetimepicker();
            });
});    