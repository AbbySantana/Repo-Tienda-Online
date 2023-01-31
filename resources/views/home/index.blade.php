@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
	<div class="row">
		<div class="col-md-6 col-lg-4 mb-2">
			<img src={{asset('storage/game.png')}} class="img-fluid rounded">
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<img src={{asset('storage/safe.png')}} class="img-fluid rounded">
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<img src={{asset('storage/submarine.png')}} class="img-fluid rounded">
		</div>
	</div>
@endsection
