$(document).ready(function($) {

    // Upload btn on change call function
    $(".uploadlogo").change(function() {

        var filename = readURL(this);
        $(this).parent().children('span').html(filename);
      
    });
  
    // Read File and return value  
    function readURL(input) {
      var url = input.value;
      var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      // if (input.files && input.files[0] && (
      //   ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf" ||  ext == "mp4"
      //   )) {

      if (input.files && input.files[0]) {
        var path = $(input).val();
        var filename = path.replace(/^.*\\/, "");
        // $('.fileUpload span').html('Uploaded Proof : ' + filename);
        // return "Uploaded file : "+filename;
        return ""+filename;
      } 
      // else {
      //   $(input).val("");
      //   return "Only mp4/image/pdf formats are allowed!";
      // }
    }
    // Upload btn end
  
  });

  $(".fa-bars").click(function(){
    $(".sidebar").css("left", "0"); 
  });


  // --------------------------------------- remplissage  select -----------------------------------------

  
  // $.ajax({
  //   type : 'GET',
  //   // url : 'https://www.ues.ma/api/modules',
  //   url : 'http://127.0.0.1:9000/api/modules/ADM-FMA_MG00003920',

  //   crossDomain: true,
  //   success : function(resultat){
  //       //  alert('ziko el mardi');
  //        console.log(resultat);
      

  //       for(i=1;i<resultat.length;i++){ 
  //           $('.select-module').append(new Option(resultat[i].designation ,resultat[i].id ));
  //       }
  //   },
  //   error: function() {
  //       alert('probleme')
  //   }
  // });


  // alert('Blocage d’une requête multiorigines (Cross-Origin Request)');


$(document).ready(function() {
    $('.js-example-basic-single').select2();
});


// -------------------------------------------------------------  ajax -------------------------------------------------------


  $.ajax({
      type : 'GET',
      // url : 'https://www.ues.ma/api/modules',
      url : 'https://www.ues.ma/api/etablissement',

      crossDomain: true,
      success : function(result){

          for(i=0;i<result.length;i++){ 
              $('#Etablissement').append(new Option(result[i].designation,result[i].id ));
          }
      },
      error: function() {
          alert('probleme')
      }
  });



  $('#Etablissement').change(function (e) {
   // alert("xx");
    if ($(this).val()) {

        $.ajax({
            url: 'https://www.ues.ma/api/formation/'+$(this).val(),
            success: function (result) {
               remove('Formation','Promotion','Semestre','Module','Element');
               $('#Formation').append(new Option('Choix Formation...','choix' ));
               for(i=0;i<result.length;i++){ 
                  $('#Formation').append(new Option(result[i].designation,result[i].id ));
               }
            }
        });
    }
    e.preventDefault();
  });


  $('#Formation').change(function (e) {
   // alert("xx");
    if ($(this).val()) {

        $.ajax({
            url: 'https://www.ues.ma/api/promotion/'+$(this).val(),
            success: function (result) {
               remove('','Promotion','Semestre','Module','Element');
               $('#Promotion').append(new Option('Choix Promotion...','choix' ));
               for(i=0;i<result.length;i++){ 
                  $('#Promotion').append(new Option(result[i].designation,result[i].id ));
               }
            }
        });
    }
    e.preventDefault();
  });


  $('#Promotion').change(function (e) {
   // alert("xx");
    if ($(this).val()) {

        $.ajax({
            url: 'https://www.ues.ma/api/semestre/'+$(this).val(),
            success: function (result) {
               remove('','','Semestre','Module','Element');
               $('#Semestre').append(new Option('Choix Semestre...','choix' ));
               for(i=0;i<result.length;i++){ 
                  $('#Semestre').append(new Option(result[i].designation,result[i].id ));
               }
            }
        });
    }
    e.preventDefault();
  });


  $('#Semestre').change(function (e) {
   // alert("xx");
    if ($(this).val()) {

        $.ajax({
            url: 'https://www.ues.ma/api/module/'+$(this).val(),
            success: function (result) {
               remove('','','','Module','Element');
               $('#Module').append(new Option('Choix Module...','choix' ));
               for(i=0;i<result.length;i++){ 
                  $('#Module').append(new Option(result[i].designation,result[i].id ));
               }
            }
        });
    }
    e.preventDefault();
  });

  $('#Module').change(function (e) {
   // alert("xx");
    if ($(this).val()) {

        $.ajax({
            url: 'https://www.ues.ma/api/element/'+$(this).val(),
            success: function (result) {
               remove('','','','','Element');
               $('#Element').append(new Option('Choix Element...','choix' ));
               for(i=0;i<result.length;i++){ 
                  $('#Element').append(new Option(result[i].designation,result[i].id ));
               }
            }
        });
    }
    e.preventDefault();
  });


  function remove(Formation = null,Promotion  = null,Semestre  = null,Module  = null,Element  = null){
    if(Formation)
     $("#"+Formation+" option").remove();
    if(Promotion)
     $("#"+Promotion+" option").remove();
   if(Semestre)
     $("#"+Semestre+" option").remove();
   if(Module)
     $("#"+Module+" option").remove();
   if(Element)
     $("#"+Element+" option").remove();
  }


$(".alert").hide();

$( ".submit-button" ).click(function() {
      var x = document.forms["myForm"];

      var errors = [];

      if (x["Etablissement"].value == "" || x["Etablissement"].value == "choix" ) {
            errors[0] = "Veuillez selectionner une <strong> établissement</strong> <br>";
      }
      if (x["Formation"].value == "" || x["Formation"].value == "choix" ) {
            errors[1] = "Veuillez selectionner une <strong> Formation </strong> <br>";
      }
      if (x["Promotion"].value == "" || x["Promotion"].value == "choix") {
            errors[2] = "Veuillez selectionner une <strong> Promotion</strong> <br>";
      }
      if (x["Semestre"].value == ""  || x["Semestre"].value == "choix") {
            errors[3] = "Veuillez selectionner une <strong> Semestre</strong> <br>";
      }
      if (x["Module"].value == "" || x["Module"].value == "choix") {
            errors[4] = "Veuillez selectionner une <strong> Module </strong> <br>";
      }
      if (x["Element"].value == "" || x["Element"].value == "choix") {
            errors[5] = "Veuillez selectionner une <strong> Element</strong> <br>";
      }
      // if (x["videoToUpload"].value.length == "") {
      //       errors[6] = "Veuillez selectionner une <strong>video</strong> <br>";
           
      // }
      // if (x["files[file][]"].value == "") {
      //       errors[7] = "Veuillez selectionner des <strong> Pieces jointes </strong> <br>";
           
      // }
      if (x["description"].value == "") {
            errors[6] = "Veuillez selectionner une <strong> description </strong> <br>";    
      }
      var str = '';
   
      for(i=0;i<errors.length;i++)
      {
         if( errors[i])
         str = str +  errors[i];
      }

       $(".alert").show();
       $(".alert").html(str);

      // document.getElementsByClassName(".alert-danger").style.display === "none";

      // alert('ziko');
      var a= 1;
      if(errors.length != 0){
          return false;

      }

      

      

});