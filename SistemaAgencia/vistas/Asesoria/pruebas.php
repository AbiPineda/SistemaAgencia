<html><head>

</head>
<body>
   <div class="form-group">
  <select name="estados" id="estados"></select>


</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
          $(document).ready(function() {

        $.ajax({
        type: "GET",
        url: 'http://localhost/API-REST-PHP/index.php/Cita/cita', 
        async: false,
        dataType: "json",
        success: function(data){
          var $select = $('#estados');
          $.each(data, function(id_cliente,name) {
          $select.append('<option value=' + name.id_cliente + '>' + name.descripcion + '</option>');
          });    
        },
        error: function(data) {
          alert('error');
        }
      });
   
  }); 
    </script>