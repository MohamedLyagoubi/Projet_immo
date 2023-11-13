@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
       
       <div class="card">
    <div class="card-body">
        <h6 class="card-title">Ajouter une propriété </h6>
            

            <form method="post" action="{{ route('store.property') }}" id="myForm" enctype="multipart/form-data">
                @csrf


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Nom de la propriété</label>
                <input type="text" name="property_name" class="form-control"  >
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Statut de la propriété</label>
               <select name="property_status" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Sélectionnez le statut</option>
                <option value="rent">À louer</option>
                <option value="buy">Pour acheter</option>
            </select>
            </div>
        </div><!-- Col -->


    <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Prix Min </label>
                <input type="text" name="lowest_price" class="form-control"  >
            </div>
        </div><!-- Col -->


            <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Prix Max  </label>
                <input type="text" name="max_price" class="form-control"  >
            </div>
        </div><!-- Col -->


         <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Vignette principale </label>
                <input type="file" name="property_thambnail" class="form-control" onChange="mainThamUrl(this)"  >

                <img src="" id="mainThmb">

            </div>
        </div><!-- Col -->



         <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Images multiples </label>
                <input type="file" name="multi_img[]" class="form-control" id="multiImg" multiple="" >
 
         <div class="row" id="preview_img"> </div>

            </div>
        </div><!-- Col -->





    </div><!-- Row -->



    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Chambres</label>
                <input type="text" name="bedrooms"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Salles de bains</label>
                <input type="text" name="bathrooms"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Garage</label>
                 <input type="text" name="garage"  class="form-control" >
            </div>
        </div><!-- Col -->

          <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Taille du garage</label>
                 <input type="text" name="garage_size"  class="form-control" >
            </div>
        </div><!-- Col --> 

    </div><!-- Row -->


    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="address"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="city"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Etat</label>
                 <input type="text" name="state"  class="form-control" >
            </div>
        </div><!-- Col -->

          <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Code Postal </label>
                 <input type="text" name="postal_code"  class="form-control" >
            </div>
        </div><!-- Col --> 

    </div><!-- Row -->


    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Taille de la propriété</label>
                <input type="text" name="property_size"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Vidéo de la propriété</label>
                <input type="text" name="property_video"  class="form-control" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Quartier</label>
                 <input type="text" name="neighborhood"  class="form-control" >
            </div>
        </div><!-- Col -->
 

    </div><!-- Row -->




    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Latitude</label>
                <input type="text" name="latitude" class="form-control" >
                <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Allez ici pour obtenir Latitude à partir de l'adresse</a>
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Longitude</label>
                <input type="text" name="longitude" class="form-control" >
                 <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Allez ici pour obtenir la longitude de l'adresse</a>
            </div>
        </div><!-- Col -->
    </div><!-- Row -->

        <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Type de propriété</label>
                <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Sélectionner le genre</option>
               @foreach($propertytype as $ptype)
                <option value="{{ $ptype->id }}">{{ $ptype->type_name }}</option>
               @endforeach
            </select>
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Équipements de la propriété</label>
     <select name="amenities_id[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">

                 @foreach($amenities as $ameni)
                <option value="{{ $ameni->amenitis_name }}">{{ $ameni->amenitis_name }}</option>
               @endforeach
                
            </select>
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label"> Agent </label>
                 <select name="agent_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Agent</option>
               @foreach($activeAgent as $agent)
                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
               @endforeach
            </select>
            </div>
        </div><!-- Col -->
 

    </div><!-- Row -->


      <div class="col-sm-12">
            <div class="mb-3">
                <label class="form-label">brève description</label>
          <textarea name="short_descp" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 
            </div>
        </div><!-- Col -->



      <div class="col-sm-12">
            <div class="mb-3">
                <label class="form-label">longue description</label>

                <textarea name="long_descp" class="form-control" name="tinymce" id="tinymceExample" rows="10"></textarea>
                 
            </div>
        </div><!-- Col -->


<hr>

 <div class="mb-3">
            <div class="form-check form-check-inline">
<input type="checkbox" name="featured" value="1" class="form-check-input" id="checkInline1">
                <label class="form-check-label" for="checkInline1">
                Caractéristiques Propriété
                </label>
            </div>
           

         <div class="form-check form-check-inline">
<input type="checkbox" name="hot" value="1" class="form-check-input" id="checkInline">
                <label class="form-check-label" for="checkInline">
                Propriété chaude
                </label>
            </div>
         
          
        </div>


<!--   //////////// Facilities Option /////////////// -->

        <div class="row add_item">
        <div class="col-md-4">
              <div class="mb-3">
                    <label for="facility_name" class="form-label">Installations </label>
                    <select name="facility_name[]" id="facility_name" class="form-control">
                          <option value="">Sélectionnez l'établissement</option>
                          <option value="Hôpital">Hôpital</option>
                          <option value="SuperMarché">Super Marché</option>
                          <option value="École">École</option>
                          <option value="Divertissement">Divertissement</option>
                          <option value="Pharmacie">Pharmacie</option>
                          <option value="Aéroport">Aéroport</option>
                          <option value="Chemins de fer">Chemins de fer</option>
                          <option value="Arrêt de bus">Arrêt de bus</option>
                          <option value="Plage">Plage</option>
                          <option value="Centre commercial">Centre commercial</option>
                          <option value="Banque">Banque</option>
                    </select>
              </div>
        </div>
        <div class="col-md-4">
              <div class="mb-3">
                    <label for="distance" class="form-label"> Distance </label>
                    <input type="text" name="distance[]" id="distance" class="form-control" placeholder="Distance (Km)">
              </div>
        </div>
        <div class="form-group col-md-4" style="padding-top: 30px;">
              <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Ajouter plus..</a>
        </div>
 </div> <!---end row-->



 <button type="submit" class="btn btn-primary">Sauvegarder les modifications </button>


            </form>
     
    </div>
</div>



            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
         
          <!-- right wrapper end -->
        </div>

			</div>
 





 <!--========== Start of add multiple class with ajax ==============-->
<div style="visibility: hidden">
   <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="whole_extra_item_delete" id="whole_extra_item_delete">
         <div class="container mt-2">
            <div class="row">
              
               <div class="form-group col-md-4">
                  <label for="facility_name">Installations</label>
                  <select name="facility_name[]" id="facility_name" class="form-control">
                        <option value="">Sélectionnez l'installation</option>
                        <option value="Hôpital">Hôpital</option>
                        <option value="SuperMarché">Super Marché</option>
                        <option value="École">École</option>
                        <option value="Divertissement">Divertissement</option>
                        <option value="Pharmacie">Pharmacie</option>
                        <option value="Aéroport">Aéroport</option>
                        <option value="Chemins de fer">Chemins de fer</option>
                        <option value="Arrêt de bus">Arrêt de bus</option>
                        <option value="Plage">Plage</option>
                        <option value="Centre commercial">Centre commercial</option>
                        <option value="Banque">Banque</option>
                  </select>
               </div>
               <div class="form-group col-md-4">
                  <label for="distance">Distance</label>
                  <input type="text" name="distance[]" id="distance" class="form-control" placeholder="Distance (Km)">
               </div>
               <div class="form-group col-md-4" style="padding-top: 20px">
                  <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Ajouter</i></span>
                  <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Retirer</i></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>      



            <!----For Section-------->
<script type="text/javascript">
   $(document).ready(function(){
      var counter = 0;
      $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
      });
      $(document).on("click",".removeeventmore",function(event){
            $(this).closest("#whole_extra_item_delete").remove();
            counter -= 1
      });
   });
</script>
<!--========== End of add multiple class with ajax ==============-->





<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                property_name: {
                    required : true,
                },
                 property_status: {
                    required : true,
                },
                 lowest_price: {
                    required : true,
                },
                 max_price: {
                    required : true,
                },
                 ptype_id: {
                    required : true,
                },
                 
                
            },
            messages :{
                property_name: {
                    required : 'Veuillez entrer le nom de la propriété',
                },
                 property_status: {
                    required : 'Veuillez sélectionner le statut de la propriété',
                },
                lowest_price: {
                    required : 'Veuillez entrer le prix min',
                },
                max_price: {
                    required : 'Veuillez entrer le prix maxi',
                },
                ptype_id: {
                    required : 'Veuillez sélectionner le type de propriété',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    } 
 </script>


 <script> 
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Votre navigateur ne prend pas en charge l'API de fichiers !"); //if File API is absent
      }
   });
  });
   
  </script>

@endsection