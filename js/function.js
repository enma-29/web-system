
console.log("El archivo function.js se ha cargado correctamente.");

	function saludame()
    {
         var nombre = document.getElementById("nombreInput").value; // Obtenemos el valor del input
      var parametros = 
      {
        "nombre" : nombre,
        "apellido" : "hurtado",
        "telefono" : "123456789"
      };
      alert(nombre);
      $.ajax({
        data: parametros,
        url: 'codigo_php.php',
        type: 'POST',
        
        beforeSend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
    
    //keyup
    $(document).ready(function(){
      $('#nombreInput').focus();
      function buscar() {
          var nombre = $('#nombreInput').val();
          var parametros = {
              "nombre": nombre
          };
  
          $.ajax({
              data: parametros,
              url: 'codigo_php.php',
              type: 'POST',
              beforeSend: function () {
                  $('#mostrar_mensaje').html("");
              },
              success: function (mensaje) {
                  $('#mostrar_mensaje').html(mensaje);
              }
          });
      }
  
      // Llamar a buscar al cargar la página
      buscar();
  
      // Llamar a buscar cuando se presiona una tecla en #nombreInput
      $('#nombreInput').keyup(function(){
          buscar();
      });
  });