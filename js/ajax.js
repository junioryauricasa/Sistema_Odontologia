function datos_personales() 
{
  var reg        = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var name       = $("#nombre").val();
  var lastname_p = $("#paterno").val();
  var lastname_m = $("#materno").val();
  var sex        = $("#sexo").val();
  var email      = $("#email").val();
  var email_a    = $("#email_alterno").val();
  var dir        = $("#direccion").val();
  var col        = $("#colonia").val();
  var mun        = $("#municipio").val();
  var est        = $("#estado").val();
  var cp         = $("#cp").val();
  var phone_p    = $("#telefono_p").val();
  var phone_c    = $("#telefono_c").val();
  var phone_t    = $("#telefono_t").val();
  
  if(name == "")
  {
    $("#signup_status").html('<div class="info">El Nombre Es Obligatorio...</div>');
    $("#nombre").focus();
  }
  else if(lastname_p == "")
  {
    $("#signup_status").html('<div class="info">El Apellido Paterno Es Obligatorio...</div>');
    $("#paterno").focus();
  }
  else if(lastname_m == "")
  {
    $("#signup_status").html('<div class="info">El Apellido Materno Es Obligatorio...</div>');
    $("#materno").focus();
  }
  else if(email == "")
  {
    $("#signup_status").html('<div class="info">El Correo Es Obligatorio...</div>');
    $("#email").focus();
  }
  else if(reg.test(email) == false)
  {
    $("#signup_status").html('<div class="info">No Es Correo Valido...</div>');
    $("#email").focus();
  }
  else if(email_a == "")
  {
    $("#signup_status").html('<div class="info">El Correo Alterno Es Obligatorio...</div>');
    $("#email_alterno").focus();
  }
  else if(reg.test(email_a) == false)
  {
    $("#signup_status").html('<div class="info">No Es Correo Alterno Valido...</div>');
    $("#email_alterno").focus();
  }
  else if(sex == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio Elegir un Sexo</div>');
    $("#sexo").focus();
  }
  else if(dir == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner una Direccion</div>');
    $("#direccion").focus();
  }
  else if(col == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner una Colonia</div>');
    $("#colonia").focus();
  }
  else if(mun == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner un Municipio</div>');
    $("#municipio").focus();
  }
  else if(est == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner un Estado</div>');
    $("#estado").focus();
  }
  else if(cp == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio porner un Codigo Postal</div>');
    $("#cp").focus();
  }
  else if(phone_p == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner un Telefono Particular</div>');
    $("#telefono_p").focus();
  }
  else if(phone_c == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner un Telefono Celular</div>');
    $("#telefono_c").focus();
  }
  else if(phone_t == "")
  {
    $("#signup_status").html('<div class="info">Es Obligatorio poner un Telefono de Trabajo</div>');
    $("#telefono_t").focus();
  }
  else
  {
    var data = 'nombre='+ name + '&paterno=' + lastname_p + '&materno=' + lastname_m + '&email=' + email + '&email_a=' + email_a + '&sexo=' + sex + '&direccion=' + dir + '&colonia=' + col + '&municipio=' + mun + '&estado=' + est + '&cp=' + cp + '&tel_p=' + phone_p + '&tel_c=' + phone_c + '&tel_t=' + phone_t + '&page=datos_personales';
    $.ajax({
      type: "POST",
      url: "save.php",
      data: data,
      cache: false,
      beforeSend: function() 
      {
        $("#signup_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="images/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
      },
      success: function(response)
      {
        var response_brought = response.indexOf('registered_successfully=yes');
        if (response_brought != -1) 
        {
          $("#signup_status").html('');
          window.location.replace(response);
        }
        else
        {
          $("#signup_status").fadeIn(10000).html(response);
        }
      }
    });
  }
}