@extends('layouts.app')

@section('content')

			{{-- Creating Tasks Form --}}
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						Images
					</div>

			<div class="panel-body">
			{{-- Displaying any validation errors --}}
			{{-- @include('common.errors') --}}



		{{-- Current Cast --}}
		@if(count($gallery_images)>0)

			<div class="panel panel-default" style="margin-top:-20px;">
				<div class="page-header" style="margin-left: 10px;">

				</div>

			<div class="panel-body">
				<table class="table table-striped task-table">

				{{-- table headings --}}
				<thead>
					<th>Actor</th>
					<th>Character</th>
				</thead>

				<tbody style="font-size:12px;font-weight:bold;">

					@foreach($gallery_images as $test_gallery)
						<tr>
							{{-- Name --}}
							<td class="table-text">
								<div> {{ $test_gallery->name }} </div>
							</td>
							<td class="table-text">
								<div> {{ $test_gallery->pic }} </div>
							</td>

								{{ method_field('DELETE') }}

							<td>
								<form action="/gallery/{{ $test_gallery->id }}" method="POST">

								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button class="btn btn-default" style="float:right;background-color:#99ccff;font-size:12px;font-weight:bold;">Click </button>
								</form>
							</td>
						</tr>
						@endforeach
						<tr><p class="btn" style="background-color:#99ccff;float:right;"><a style="font-size:14px;font-weight:bold;color:black;" href="{{ url('past-cast') }}">View Former Characters</a></p></tr>
					</tbody>
				</table>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
