@extends('layouts.app')

@section('content')

			{{-- Creating Tasks Form --}}
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						Game Of Thrones: Characters
					</div>

			<div class="panel-body">
			{{-- Displaying any validation errors --}}
			{{-- @include('common.errors') --}}

			{{-- New Cast Form --}}
			<form action="/cast" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				{{-- Cast Name --}}
				<div class="form-group">

					<div class="col-sm-6">
						<label style="text-align:center;width:100%;">Actor</label>
						<input type="text" name="actor" id="cast-name" class="form-control">
					</div>

					<div class="col-sm-6">
						<label style="text-align:center;width:100%;">Character Played</label>
						<input type="text" name="character_played" id="cast-character" class="form-control">
					</div>
				</div>

				{{-- Add Cast Button --}}
				<div class="form-group">
					<div class="col-sm-offset-10 col-sm-2">
						<button style="width:100%;background-color:#99ccff;" type="submit" class="btn btn-default">
							<i class="fa fa-btn fa-plus"></i>Add Cast
						</button>
					</div>
				</div>
			</form>
		</div>

		{{-- Current Cast --}}
		@if(count($casts)>0)

			<div class="panel panel-default" style="margin-top:-20px;">
				<div class="page-header" style="margin-left: 10px;">
					<!-- <h3><em>Game of Thrones:</em> Cast List</h3> -->

				</div>

			<div class="panel-body">
				<table class="table table-striped task-table">

				{{-- table headings --}}
				<thead>
					<th>Actor</th>
					<th>Character</th>
				</thead>

				<tbody style="font-size:12px;font-weight:bold;">

					@foreach($casts as $cast)
						<tr>
							{{-- Name --}}
							<td class="table-text">
								<div> {{ $cast->actor }} </div>
							</td>
							<td class="table-text">
								<div> {{ $cast->character_played }} </div>
							</td>

								{{ method_field('DELETE') }}

							<td>
								<form action="/cast/{{ $cast->id }}" method="POST">

								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button class="btn btn-default" style="float:right;background-color:#99ccff;font-size:12px;font-weight:bold;">Click if Character is Now Deceased</button>
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
