@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

       
        <div class="row profile-body">
         
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Ajouter des équipements</h6>

			<form id="myForm" method="POST" action="{{ route('store.amenitie') }}" class="forms-sample">
				@csrf
 

				<div class="form-group mb-3">
 <label for="exampleInputEmail1" class="form-label">Nom de l'équipements </label>
					 <input type="text" name="amenitis_name" class="form-control" >
           
				</div>

			 
				 
	 <button type="submit" class="btn btn-primary me-2">Sauvegarder les modifications</button>
			 
			</form>

              </div>
            </div>

            </div>
          </div>
          
       
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
                    required : 'Veuillez saisir le nom des équipements',
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