@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8 col-sm-10 col-12">
				<div class="gray-box">
					<form id="create_forum_form" action="/members/forums/create" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="course_id" value="{{ $course->id }}"> 
						<div class="form-group">
							<label>Title:</label>
							<input type="text" class="form-control" name="title" required>
						</div>

						<div class="form-group">
							<label>Description:</label>
							<textarea form="create_forum_form" name="description" class="form-control" rows="6" required></textarea>
						</div>

						<div class="form-group">
							<input type="submit" value="Post Forum" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection