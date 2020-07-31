@extends('layouts.app')

@section('title', 'Admin - KumanovoNews')

@section('content')

<div class="ui relaxed grid">


		<table class="ui very basic selectable table">
			<thead>
			<tr>
		    	<th class="one wide">Категорија</th>
				<th>Наслов</th>
		    	<th>Мал текст</th>
		    	<th class="one wide">Датум</th>
		    	<th class="one wide">Акција</th>
		    	<th class="one wide">Топ вест</th>
			</tr>
		  </thead>
		  <tbody>
		  	@foreach($horoskopi as $key => $value)
		    <tr>
		      <td>{{ $value->id }}</td>
		      <td>{{ $value->naslov }}</td>
		      <td>{{ $value->text }}</td>
		      <td><a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->slug) }}">Show this Nerd</a></td>
		      <td><a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a></td>
		      <td>top</td>
		    </tr>

		    @endforeach
		  </tbody>
		</table>



</div>

@endsection