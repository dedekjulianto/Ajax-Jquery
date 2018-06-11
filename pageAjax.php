<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax</title>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  </head>

  <body>
    <button id="panggil_ajax">Panggil Ajax</button>
    <div id="tampil-data">
    </div>

    <script type="text/javascript">

      $(document).ready(function(){

        $("#panggil_ajax").click(function(){

          $.ajax({
            method: "POST",
            url: "resultData.php",
            data: "nama=Dedek&umur=17",
            success: function(data) {
              $("#tampil-data").html(data);
            }
          });

        });

      });

    </script>
  </body>
</html>
