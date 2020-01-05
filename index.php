<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
</head>
<body>
 
<h1>Form</h1>
 
<form id="form_id"  method="POST" enctype="multipart/form-data">
    <input type="text" name="title"/><br/><br/>
    <input type="file" name="files"/><br/><br/>
    <input type="submit" value="Submit" id="btnSubmit"/>
</form>
<span id="output"></span>
 
 
</body>
</html>

<script language="javascript">
$(document).ready(function () {
 
    $("#btnSubmit").click(function (event) {
 
        event.preventDefault();
		
		form = document.getElementById("form_id");
		data = new FormData(form);
		
		data.append("key","value");
		data.append("customField","CustomValue");
      
        $("#btnSubmit").prop("disabled", true);
 
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "api.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
 
                $("#output").text(data);
                console.log("SUCCESS : ", data);
                $("#btnSubmit").prop("disabled", false);
 
            },
            error: function (e) {
 
                $("#output").text(e.responseText);
                console.log("ERROR : ", e);
                $("#btnSubmit").prop("disabled", false);
 
            }
        });
 
    });
 
});
</script>