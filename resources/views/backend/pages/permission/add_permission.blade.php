@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
          <!-- left wrapper start -->
          
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Ajouter une autorisation   </h6>

	 <form id="myForm" method="POST" action="{{ route('store.permission') }}" class="forms-sample">
				@csrf
 

				<div class="form-group mb-3">
 <label for="exampleInputEmail1" class="form-label">Nom de l'autorisation  </label>
	 <input type="text" name="name" class="form-control" >
           
				</div>

                    <div class="form-group mb-3">
 <label for="exampleInputEmail1" class="form-label">Nom de groupe  </label>
               <select name="group_name" class="form-select" id="exampleFormControlSelect1">
               <option selected="" désactivé="">Sélectionner un groupe</option>
                <option value="type">Type de propriété</option>
                <option value="state">État</option>
                <option value="amenities">Commodités</option>
                <option value="property">Propriété</option>
                <option value="history">Historique des paquets </option>
                <option value="message">Message de propriété </option>
                <option value="testimonials">Témoignages</option>
                <option value="agent">Gérer l'agent</option>
                <option value="category">Catégorie de blog</option>
                <option value="post">Article de blog</option>
                <option value="comment">Commentaire du blog</option>
                <option value="smtp">Paramètre SMTP</option>
                <option value="site">Paramètre du site</option>
                <option value="role">Rôle et autorisation </option>
            </select>
           
                </div> 
			 
				 
	 <button type="submit" class="btn btn-primary me-2">Save Changes </button>
			 
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
 


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitis_name: {
                    required : true,
                },

                
            },
            messages :{
                amenitis_name: {
                    required : 'Please Enter Amenities Name',
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

@endsection