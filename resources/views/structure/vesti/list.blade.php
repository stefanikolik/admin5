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
		    @foreach ($posts as $post)
			    <tr>
			    	

			      <td></td>

			      
			      <td>{{$post->naslov}}</td>
			      <td>{!! $post->story_short !!}</td> 
			      <td>{{$post->datum}}</td>
				<td>
			      	<button class="ui primary button">Објави</button>
					<button class="ui button">Промени</button>
				</td>
			    	<td>
			      		<div class="ui slider checkbox"><input type="radio" name="throughput" checked="checked"></div>
  					</td>
			    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
@endsection