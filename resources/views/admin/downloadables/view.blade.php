@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	@include('admin.downloadables.modals.delete')

	<div class="container mt-64 mb-64">
		<div class="row justify-content-center">
			@if(count($downloads) > 0)
				<div class="col-12">
					<a href="/admin/downloads/new" class="site-btn mb-16">Create New Downloadable</a>
					<div style="overflow: auto;">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>File Type</th>
									<th>Title</th>
									<th>Description</th>
									<th>Downloads</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($downloads as $download)
									<tr>
										@if($download->file_type == 1)
											<td style="vertical-align: middle;">PDF</td>
										@elseif($download->file_type == 2)
											<td style="vertical-align: middle;">MP3</td>
										@endif

										<td style="vertical-align: middle;">{{ $download->title }}</td>
										<td style="vertical-align: middle;">{{ $download->description }}</td>
										<td style="vertical-align: middle;">{{ $download->downloads }}</td>
										<td style="vertical-align: middle;">
											<a href="/admin/downloads/edit/{{ $download->id }}" class="btn btn-warning">Edit</a>
											<button class="btn btn-danger" id="{{ $download->id }}" class="delete_download_button">Delete</button>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@else
				<div class="col-lg-7 col-md-8 col-sm-10 col-12">
					<div class="gray-box">
						<h5 class="text-center">No Downloadables</h5>
						<p class="text-center">Click the button below to get started on the first downloadable.</p>
						<a href="/admin/downloads/new" class="btn btn-primary centered">Create New</a>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection

@section('page_js')
	<script type="text/javascript">
		$(".delete_download_button").on('click', function() {
			// Get post ID
			var download_id = $(this).attr('id');

			// Set in modal
			$("#delete_download_id").val(post_id);

			// Show modal
			$("#delete_download_modal").modal();
		});
	</script>
@endsection