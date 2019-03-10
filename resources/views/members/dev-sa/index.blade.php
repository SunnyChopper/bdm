@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-12">
				
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-10 col-12">
				<h3>Start Your Quiz</h3>
				<p>Answer the following questions. After you are content with your responses, click the 'Get Results' button to figure out which developer you are. On the results page, you'll get a list of resources that you can use to sharpen your skills.</p>
				<hr />
				<form id="quiz_form">
					<div class="gray-box">
						<div class="row question-row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<h6 class="mb-8-mobile">I enjoy using Photoshop or similar software.</h6>
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
								<h6 class="mb-8-mobile">Understanding how components fit together comes easy to me.</h6>
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
								<h6 class="mb-8-mobile">Categorizing information comes easy to me.</h6>
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
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<h6 class="mb-8-mobile">I believe that the ability to communicate is important.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_4" form="quiz_form">
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
								<h6 class="mb-8-mobile">I value collecting as much data as possible on the things I do.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_5" form="quiz_form">
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
								<h6 class="mb-8-mobile">I often enjoy drawing and painting.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_6" form="quiz_form">
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
								<h6 class="mb-8-mobile">I only buy a product if it does its job well.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_7" form="quiz_form">
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
								<h6 class="mb-8-mobile">It's important to keep track of everything I do.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_8" form="quiz_form">
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
								<h6 class="mb-8-mobile">I view the world as a huge connected web.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_9" form="quiz_form">
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
								<h6 class="mb-8-mobile">I believe that you cannot improve what you do not measure.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_10" form="quiz_form">
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
								<h6 class="mb-8-mobile">My Instagram pictures have to have the right lightning, filters, etc.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_11" form="quiz_form">
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
								<h6 class="mb-8-mobile">I prefer adding more features to a software.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_12" form="quiz_form">
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
								<h6 class="mb-8-mobile">Remembering everything important is crucial to do well in the future.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_13" form="quiz_form">
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
								<h6 class="mb-8-mobile">How the internet works fascinates me.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_14" form="quiz_form">
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
								<h6 class="mb-8-mobile">I believe that statistics is the most superior field of mathematics.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_15" form="quiz_form">
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
								<h6 class="mb-8-mobile">I care more about how something looks rather than how well it performs.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_16" form="quiz_form">
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
								<h6 class="mb-8-mobile">I truly enjoy languages such as Python, PHP, and Java.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_17" form="quiz_form">
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
								<h6 class="mb-8-mobile">I can break down an object into its components easily.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_18" form="quiz_form">
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
								<h6 class="mb-8-mobile">I enjoy setting up the router at home.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_19" form="quiz_form">
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
								<h6 class="mb-8-mobile">Given the correct feedback, I can improve myself.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_20" form="quiz_form">
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
								<h6 class="mb-8-mobile">If something isn't symmetrical in my room, I have to change it no matter what.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_21" form="quiz_form">
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
								<h6 class="mb-8-mobile">Creating algorithms to get a job done is easy to me.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_22" form="quiz_form">
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
								<h6 class="mb-8-mobile">I find the concept of CRUD intuitive and helpful.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_23" form="quiz_form">
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
								<h6 class="mb-8-mobile">I understand the difference between a LAN and WAN.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_24" form="quiz_form">
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
								<h6 class="mb-8-mobile">Quantatative data can be used to improve any computer system.</h6>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<select class="form-control" name="question_25" form="quiz_form">
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
							<input type="submit" value="Get Results" class="site-btn-small centered">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection