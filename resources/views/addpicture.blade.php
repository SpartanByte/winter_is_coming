<!DOCTYPE html>
<html>
	<head>
		<title>Add Image</title>
	</head>

	<body>
		<h1>Add Image</h1>

		{!! Form::open(array('url' => 'add', 'files'=>true)) !!}
		<div>

			{!! Form::label('name', 'Name: ') !!}
			{!! Form::text('name') !!}

			{!! Form::label('category_name', 'Category: ') !!}
			{!! Form::text('category_name') !!}
		</div>
		<div>
			<p>
				{!! Form::label('Choose a Picture:') !!}
				{!! Form::file('pic') !!}
			</p>
		</div>
		<div> 
			{!! From::submit('Add Record') !!}
		</div>

	</body>
</html>
