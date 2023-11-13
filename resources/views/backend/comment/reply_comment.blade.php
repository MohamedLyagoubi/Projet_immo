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

			<h6 class="card-title">Répondre au commentaire  </h6>

			<form method="POST" action="{{ route('reply.message') }}" class="forms-sample"  >
				@csrf

        <input type="hidden" name="id" value="{{ $comment->id }}">
        <input type="hidden" name="user_id" value="{{ $comment->user_id }}" >
        <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
 

        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur : </label>
    <code>{{ $comment['user']['name'] }}</code>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'article : </label>
    <code>{{ $comment['post']['post_title'] }}</code>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sujet : </label>
    <code>{{ $comment->subject }}</code>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Message : </label>
    <code>{{ $comment->message }}</code>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sujet </label>
    <input type="text" name="subject" class="form-control">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Message </label>
    <input type="text" name="message" class="form-control">
</div>

<button type="submit" class="btn btn-primary me-2">Répondre au commentaire</button>

			 
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