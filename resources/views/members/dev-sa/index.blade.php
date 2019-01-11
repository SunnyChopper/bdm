@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-12">
				<h3>Start Your Quiz</h3>
				<p>Answer the following questions. After you are content with your responses, click the 'Get Results' button to figure out which developer you are. On the results page, you'll get a list of resources that you can use to sharpen your skills.</p>
				<hr />
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-10 col-12">
				<form id="quiz_form">
					<div class="gray-box">
						<div class="row question-row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<h6 class="mb-8-mobile">In school, I did better in math compared to other subjects.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_1" form="quiz_form">
									<option value="1">Strongly Disagree</option>
									<option value="2">Disagree</option>
									<option value="3" selected>Neutral</option>
									<option value="4">Agree</option>
									<option value="5">Strongly Agree</option>
								</select>
							</div>
						</div>

						<hr />

						<div class="row question-row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<h6 class="mb-8-mobile">I much rather open a physics book than an art book.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_2" form="quiz_form">
									<option value="1">Strongly Disagree</option>
									<option value="2">Disagree</option>
									<option value="3" selected>Neutral</option>
									<option value="4">Agree</option>
									<option value="5">Strongly Agree</option>
								</select>
							</div>
						</div>

						<hr />

						<div class="row question-row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<h6 class="mb-8-mobile">I find using Photoshop an enjoyable experience.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_3" form="quiz_form">
									<option value="1">Strongly Disagree</option>
									<option value="2">Disagree</option>
									<option value="3" selected>Neutral</option>
									<option value="4">Agree</option>
									<option value="5">Strongly Agree</option>
								</select>
							</div>
						</div>

						<hr />

						<div class="row question-row">
							<input type="submit" value="Get Results" class="site-btn-small center-button">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection