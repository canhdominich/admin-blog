@extends('layouts.master_admin') 

{{-- thay đổi nội dung phần content --}}
@section('content')
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Table With Post</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<a href="/new/post" data-toggle="modal" class="btn btn-success btn-add">New Post</a>
					<table id="example1" class="table table-bordered table-striped" style="margin-top : 10px;">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th class="col-sm-1">Title</th>
								<th class="col-sm-4">Description</th>
								<th class="col-sm-1">Slug</th>
								<th class="col-sm-1">View</th>
								<th class="col-sm-4">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($posts as $value)
							<tr>
								<td class="col-sm-1">{{$value->id}}</td>
								<td class="col-sm-1">{{$value->title}}</td>
								<td class="col-sm-4">{{$value->description}}</td>
								<td class="col-sm-1">{{$value->slug}}</td>
								<td class="col-sm-1">{{$value->view_count}}</td>
								<td class="col-sm-4">
									<button data-id="{{$value->id}}" type="button" class="btn btn-primary btn-show" >
										View
									</button>

									<button data-id="{{$value->id}}" type="button" class="btn btn-warning btn-edit" >
										Edit
									</button>

									<button data-id="{{$value->id}}" type="button" class="btn btn-danger btn-delete">
										Delete
									</button>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th class="col-sm-1">#</th>
								<th class="col-sm-1">Title</th>
								<th class="col-sm-4">Description</th>
								<th class="col-sm-1">Slug</th>
								<th class="col-sm-1">View</th>
								<th class="col-sm-4">Action</th>
							</tr>
						</tfoot>
					</table>

					{{$posts->links()}}
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<!-- modal view -->
	<div class="col-xs-12">
		<div class="modal fade" id="showTag" tabindex="-1" role="dialog" aria-labelledby="formTag" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Information : </h4>
					</div>
					<form action="" id="">
						@csrf
						<div class="modal-body">
							<input name="id" type="text" class="form-control" id="showId" placeholder="Id"><br>

							<input name="name" type="text" class="form-control" id="showName" placeholder="Name"><br>

							<input name="slug" type="text" class="form-control" id="showSlug" placeholder="Slug"><br>

							<input name="created_at" type="text" class="form-control" id="showCreatedAt" placeholder="Created At"><br>

							<input name="updated_at" type="text" class="form-control" id="showUpdatedAt" placeholder="Updated At"><br>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- modal edit -->
	<div class="col-xs-12">
		<div class="modal fade" id="editTag" tabindex="-1" role="dialog" aria-labelledby="formTag" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Update Information : </h4>
					</div>
					<form action="" id="formEditCategory">
						@csrf
						<div class="modal-body">
							<input name="id" type="text" class="form-control" id="editID" placeholder="ID"><br>

							<input name="name" type="text" class="form-control" id="editName" placeholder="Name"><br>

							<input name="slug" type="text" class="form-control" id="editSlug" placeholder="Slug"><br>
						</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-success btn-update" data-dismiss="modal">Update</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		// show
		$('.btn-show').click(function(){
			var id = $(this).attr('data-id');
			$.ajax({
				type : "get",
				url : "/admin/tag/" + id,
				data : {
					_token :$('[name="_token"]').val(),
				},
				success : function(response){
					$('#showId').val(response.id),
					$('#showName').val(response.name),
					$('#showSlug').val(response.slug),
					$('#showCreatedAt').val(response.created_at),
					$('#showUpdatedAt').val(response.updated_at)
				}
			});

			$('#showTag').modal('show');
		});

		$('.btn-edit').click(function(){
			var id = $(this).attr('data-id');
			$.ajax({
				type : "get",
				url : "/admin/tag/" + id,
				data : {
					_token :$('[name="_token"]').val(),
				},
				success : function(response){
					$('#editID').val(response.id),
					$('#editName').val(response.name),
					$('#editSlug').val(response.slug)
				}
			});

			$('#editTag').modal('show');
		});
		
		$('.btn-update').click(function(){
			var id = $(this).attr('data-id');
			$.ajax({
				type: 'put',
				url: '/admin/tag/' + id,
				data:{
					_token :$('[name="_token"]').val(),
					id : $('#editID').val(),
					name : $('#editName').val(),
					slug : $('#editSlug').val()
				},
				success: function(response){
					toastr.success('Update Successfully!');
				}
			});

			$('#editCategory').modal('hide');

			setTimeout(function () {
				window.location.href="/admin/tag/";
			},500);
		});

		// delete
		$('.btn-delete').click(function(){
			if(confirm('Bạn có muốn xóa không?')){
				var _this = $(this);
				var id = $(this).attr('data-id');
				$.ajax({
					type: 'delete',
					url: '/admin/tag/' + id,
					data:{
						_token : $('[name="_token"]').val(),
					},
					success: function(response){
						_this.parent().parent().remove();
					}
				})
			}
		});
	</script>

</section>
<!-- /.content -->
@endsection