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
		    <tr>
		      <td>John</td>
		      <td>Approved</td>
		      <td>None</td> <td>John</td>
		      <td>Approved</td>
		      <td>None</td>
		    </tr>
		    <tr>
		      <td>Jamie</td>
		      <td>Approved</td>
		      <td>Requires call</td><td>Jamie</td>
		      <td>Approved</td>
		      <td>Requires call</td>
		    </tr>
		    <tr>
		      <td>Jill</td>
		      <td>Denied</td>
		      <td>None</td> <td>Jill</td>
		      <td>Denied</td>
		      <td>None</td>
		    </tr>
		  </tbody>
		</table>
	</div>
@endsection