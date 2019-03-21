@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 col-sm-10 col-12">
				<form id="new_downloadable_form" action="/admin/downloads/create" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="gray-box">
						<div class="form-group">
							<label>Title:</label>
							<input type="text" name="title" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Description:</label>
							<textarea class="form-control" rows="6" name="description" form="new_downloadable_form"></textarea>
						</div>

						<div class="form-group mt-16">
							<input type="file" name="upload_file" id="upload_file">
						</div>

						<div class="form-group mt-32">
							<input type="submit" class="site-btn-small" value="Create Downloadable">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection