@extends('layouts.app')

@section('content')

			{{-- Creating Tasks Form --}}
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						Game Of Thrones: Characters :: Those Who Are No Longer With Us
					</div>

			<div class="panel-body">
			{{-- Displaying any validation errors --}}
			{{-- @include('common.errors') --}}

			{{-- New Past Cast Form --}}
			<form action="/past-cast" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				{{-- Past Cast Name --}}
				<div class="form-group">


					<div class="col-sm-4">
						<label style="text-align:center;width:100%;">Actor</label>
						<input type="text" name="actor" id="cast-name" class="form-control">
					</div>

					<div class="col-sm-4">
						<label style="text-align:center;width:100%;">Character Played</label>
						<input type="text" name="character_played" id="cast-character" class="form-control">
					</div>

					<div class="col-sm-4">
						<label style="text-align:center;width:100%;">Episode Deceased</label>
						<input type="text" name="episode_deceased" id="cast-episode" class="form-control">
					</div>
				</div>

				{{-- Add Past Cast Button --}}
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-3">
						<button style="width:100%;background-color:#99ccff;" type="submit" class="btn btn-default">
							<i class="fa fa-btn fa-plus"></i>Add To Former Characters
						</button>
					</div>
				</div>
			</form>
		</div>

		{{-- Total Past Cast --}}
		@if(count($past_casts)>0)

			<div class="panel panel-default" style="margin-top:-20px;">
				<div class="page-header" style="margin-left: 10px;">
					<!-- <h3><em>Game of Thrones:</em> Cast List</h3> -->
					<h2>Winter is Coming</h2>
				</div>

			<div class="panel-body">
				<table class="table table-striped task-table">

				{{-- table headings --}}
				<thead>
					<th>Actor</th>
					<th>Character</th>
					<th>Episode Character Deceased</th>
				</thead>

				<tbody style="font-size:12px;font-weight:bold;">

					@foreach($past_casts as $past_cast)
						<tr>
							{{-- Name --}}
							<td class="table-text">
								<div> {{ $past_cast->actor }} </div>
							</td>
							<td class="table-text">
								<div> {{ $past_cast->character_played }} </div>
							</td>
							<td class="table-text">
								<div> {{ $past_cast->episode_deceased }} </div>
							</td>

								{{ method_field('DELETE') }}

							<td>
								<form action="/past-cast/{{ $past_cast->id }}" method="POST">

								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button class="btn btn-default" style="float:right;background-color:#99ccff;font-size:12px;font-weight:bold;">Resurrect This Character</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
