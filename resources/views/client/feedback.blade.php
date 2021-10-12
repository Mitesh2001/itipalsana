@extends('client-layouts.master')

@section('page_head')
@endsection

@section('content')
<br>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><h2>Feedback</h2></div>
		<div class="panel-body">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Your name:</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Your mobile:</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your mobile">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Your email:</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Your message:</label>
							<textarea  class="form-control" placeholder="Your message" name="" rows="3"></textarea>
							
						</div>
					</div>
				</div>
				<div class="row">
					<button class="btn btn-info">Send email</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('page_script')

@endsection