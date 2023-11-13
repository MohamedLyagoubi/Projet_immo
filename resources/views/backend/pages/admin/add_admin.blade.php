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

              <h6 class="card-title">Ajouter un administrateur </h6>

  <form id="myForm" method="POST" action="{{ route('store.admin') }}" class="forms-sample">
				@csrf
 

				<div class="form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom de l'utilisateur administrateur </label>
	 <input type="text" name="username" class="form-control" > 
				</div>

                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de l'administrateur </label>
     <input type="text" name="name" class="form-control" > 
                </div>

                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Courriel de l'administrateur </label>

     <input type="email" name="email" class="form-control" > 
                </div>


                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Téléphone de l'administrateur</label>

     <input type="text" name="phone" class="form-control" > 
                </div>



                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse de l'administrateur</label>

     <input type="text" name="address" class="form-control" > 
                </div>

   <div class="form-group mb-3">
   <label for="exampleInputEmail1" class="form-label">Mot de passe de l'administrateur</label>

     <input type="password" name="password" class="form-control" > 
                </div>


                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom du rôle</label>
   <select name="roles" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Sélectionner un rôle</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
                </div>
			 
				 
	 <button type="submit" class="btn btn-primary me-2">Sauvegarde des modifications </button>
			 
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
 

 

@endsection