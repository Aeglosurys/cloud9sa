<!DOCTYPE html>
<html>
<head>

<link href="https://bootsnipp.com/j87klPolka/assets3/css/lib/bootstrap.min.css" rel="stylesheet">
<link href="https://bootsnipp.com/j87klPolka/assets3/css/custom.css" rel="stylesheet">
<form class="form-horizontal" id="recruteForm">

<fieldset>
<title>Recrutamento Cloud9</title>
<!-- Form Name -->
<legend>Recrutamento Cloud9</legend>

</head>
<body>
    <main class="container">
        <div class="card card-panel">
            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeFamilia">Nome de Família</label>  
              <div class="col-md-4">
              <input id="nomeFamilia" name= "familia" for="nomeFamilia" type="text" placeholder="" class="form-control input-md" required="">
            </div>
            </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="discordUser">Usuário Discord</label>  
          <div class="col-md-4">
          <input id="discordUser" for="discordUser" type="text" placeholder="!  'AzureNighty#6457" class="form-control input-md" required="">
            
          </div>
        </div> 
 
<div class="form-group">
  <label class="col-md-4 control-label" for="classe">Classe</label>
  <div class="col-md-4">
    <select id="classe" name="classe" class="form-control">
      <option value="Berserker">Berserker</option>
      <option value="Ranger">Ranger</option>
      <option value="Sorceress">Sorceress</option>
      <option value="Tamer">Tamer</option>
      <option value="Valkyrie">Valkyrie</option>
      <option value="Warrior">Warrior</option>
      <option value="Witch">Witch</option>
      <option value="Wizard">Wizard</option>
      <option value="Musa">Musa</option>
      <option value="Maehwa">Maehwa</option>
      <option value="Ninja">Ninja</option>
      <option value="Kunoichi">Kunoichi</option>
      <option value="Dark Knight">Dark Knight</option>
      <option value="Striker">Striker</option>
      <option value="Mystic">Mystic</option>
      <option value="Lahn">Lahn</option>
      <option value="Archer">Archer</option>
      <option value="Shai">Shai</option>
      <option value="Guardian">Guardian</option>
      <option value="Hassassin">Hassassin</option>
      <option value="Nova">Nova</option>
      <option value="Sage">Sage</option>	    
    </select>
  </div>
</div>   
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Tipoclass">Tipo</label>
  <div class="col-md-4">
    <select id="Tipoclass" name="Tipoclass" class="form-control">
      <option value="Despertado">Despertado</option>
      <option value="Sucessão">Sucessão</option>
    </select>
  </div>
</div> 

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pa">PA</label>  
  <div class="col-md-4">
  <input id="pa" name="pa" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pad">PA Despertado</label>  
  <div class="col-md-4">
  <input id="pad" name="pad" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dp">DP</label>  
  <div class="col-md-4">
  <input id="dp" name="dp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dias">Quais dias você poderá fazer NodeWar/SIEGE?</label>  
  <div class="col-md-4">
  <input id="dias" name="dias" type="text" placeholder="Segunda,Terça,Quarta,Quinta,Sexta,Sabado,Domingo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="printgs">Print do Gear</label>  
  <div class="col-md-4">
  <input id="printgs" name="printgs" type="text" placeholder="Link Discord / Imgur / Lightshot / Gyazo" class="form-control input-md" required="">

  </div>
</div>


<!--   <span class="help-block">link Discord / Imgur / Lightshot / Gyazo</span>   -->

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
	<a id="singlebutton" name="singlebutton" class="btn btn-success" href="#!">Enviar</a>
  </div>
 
</div>
<!-- Button -->

   </div>
    </main>
	</form>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type=
    "text/javascript">
    </script> 
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js">
    </script> 
    <script>
    $(function() {
        $('a').click(function(e) {
			
			if ($("#nomeFamilia").val().trim() == '' ) {
			  alert("Informe o nome de familia!");
			  return false;
			}
			
			if ($("#discordUser").val().trim() == '' ) {
			  alert("Informe o usuário do discord!");
			  return false;
			}
			
			if ($("#pa").val().trim() == '' ) {
			  alert("Informe o PA!");
			  return false;
			}
			
			if ($("#pad").val().trim() == '' ) {
			  alert("Informe o PA Despertado!");
			  return false;
			}                  

			if ($("#dp").val().trim() == '' ) {
			  alert("Informe o DP!");
			  return false;
			}       
			if ($("#dias").val().trim() == '' ) {
			  alert("Informe os dias que poderá fazer guerra!");
			  return false;
			}       
			if ($("#printgs").val().trim() == '' ) {
			  alert("Coloque um link válido contendo seu gs!");
			  return false;
			}     
        var data = new Date();        
        var url = "https://discord.com/api/webhooks/822585037492977706/_k2nALhTBFAjnlh7i91iD5INZSNDrKsozWQM01D_7KvcH9LdDZD1G5TRD3VaWzfSqx1D";
        var content = "================================================"+"\n"+data.toLocaleDateString()+"\n"+"**Nome de Familia:** "+$("#nomeFamilia").val()+"\n"+"**Usuário Discord:** "+$("#discordUser").val()+"\n"+"**Classe:** "+$("#classe").val()+"\n"+"**Tipo:** "+$("#Tipoclass").val()+"\n"+"**PA:** "+$("#pa").val()+"\n"+"**PA Despertado:** "+$("#pad").val()+"\n"+"**DP:** "+$("#dp").val()+"\n"+"**Quais dias você poderá fazer NodeWar/SIEGE:** "+$("#dias").val()+"\n"+"**Print do Gear:** "+$("#printgs").val();
        var username = "Recrutamento-Bot";
        var avatar_url = "https://data.apkhere.com/91/com.endgames.bdmpatch/2.7.2/icon.png!s";
        $.post(url,
    {"content": content, "username": username, "avatar_url": avatar_url},
        function(){
          alert("Recrutamento Enviado!\nEm breve entramentos em contato, Obrigado!");
            document.getElementById("recruteForm").reset();
        });
        });
    });
    </script>
</body>
</html>
