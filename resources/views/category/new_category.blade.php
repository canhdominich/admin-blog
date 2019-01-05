@extends('layouts.master_admin') 

{{-- thay đổi nội dung phần content --}}
@section('content')
<div class="container box box-body pad">
	<div class="row">
		<div class="col-xs-9">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Create a new category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form>
						@csrf
						<div class="form-group">

							<input name="name" type="text" class="form-control" id="getName" placeholder="Name"><br>

							<input name="parent_id" type="text" class="form-control" id="getParentId" placeholder="Parent Id"><br>

							<input name="thumbnail" type="text" class="form-control" id="getThumbnail" placeholder="Thumbnail"><br>

							<input name="slug" type="text" class="form-control" id="getSlug" placeholder="Slug"><br>

							<textarea name="description" type="text" class="form-control" id="getDescription" placeholder="Description" rows="10" cols="80"></textarea><br>

							<script>
								CKEDITOR.replace('description');
							</script>

							<button type="button" class="btn btn-success btn-save" >Save</button>
							
							<a href="/admin/category" class="btn btn-danger">Back</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.btn-save').click(function(){
		$.ajax({
			type : 'post',
			url : '/admin/category',
			data : {
				_token : $('[name="_token"]').val(),
				name : $('#getName').val(),
				parent_id : $('#getParentId').val(),
				thumbnail : $('#getThumbnail').val(),
				slug : $('#getSlug').val(),
				description : $('#getDescription').val()
			},
			success : function(response){
				tosatr.success("Insert Successfully!");
			}
		});

		setTimeout(function () {
			window.location.href="/admin/category";
		},500);
	});
</script>
@endsection