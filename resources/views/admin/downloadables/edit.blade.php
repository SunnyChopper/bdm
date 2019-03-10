@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 col-sm-10 col-12">
				<form id="edit_downloadable_form" action="/admin/downloads/update" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="downloadable_id" value="{{ $download->id }}">
					<div class="gray-box">
						<div class="form-group">
							<label>Title:</label>
							<input type="text" name="title" value="{{ $download->title }}" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Description:</label>
							<textarea class="form-control" rows="6" name="description" form="edit_downloadable_form">{{ $download->description }}</textarea>
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