@extends('layouts.master_admin') 

{{-- thay đổi nội dung phần content --}}
@section('content')
<div class="container box box-body pad">
	<div class="row">
		<div class="col-xs-9">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Create a new post</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="" method="POST" role="form">
						<legend></legend>
						<div class="form-group">
							<label for="" style="margin-top: 0px;">Category</label>
							<input type="text" class="form-control" id="category" placeholder="Input field">

							<label for="" style="margin-top: 10px;">Title</label>
							<input type="text" class="form-control" id="title" placeholder="Input field">

							<label for="" style="margin-top: 10px;">Thumbnail</label>
							<input type="text" class="form-control" id="thumbnail" placeholder="Input field">

							<label for="" style="margin-top: 10px;">Description</label>
							<input type="text" class="form-control" id="description" placeholder="Input field">

							<label for="" style="margin-top: 10px;">Slug</label>
							<input type="text" class="form-control" id="slug" placeholder="Input field">

							<label for="" style="margin-top: 10px;">Content</label>
							<textarea name="content" id="content" rows="10" cols="80">
								Zent
							</textarea>
							<script>
								CKEDITOR.replace( 'content' );
							</script>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-9"> 
		</div>
	</div>
</div>
@endsection