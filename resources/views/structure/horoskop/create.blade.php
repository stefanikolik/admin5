@extends('layouts.app')

@section('title', 'Admin - KumanovoNews')

@section('content')

<form class="ui form" method="POST" action="/admin5/public/horoskop">
	{{csrf_field()}}
		<div class="ui relaxed grid">
			<div class="ten wide column">
					<div class="field">
						<label>Наслов</label>
						<input name="title" placeholder="Наслов" type="text">
					</div>
					<div class="field">
						<label>slug</label>
						<input name="slug" placeholder="slug" type="text">
					</div>
			</div>

			
			<div class="two wide column"></div>
			
			<div class="four wide column">
			

				<div class="field">
					<label>Датум</label>
						<div class="ui calendar" id="example1">
							<div class="ui input left icon">
								<i class="calendar icon"></i>
							<input type="text"  placeholder="{{date('Y-m-d H:i:s')}}">
							</div>
						</div>
				</div>

			</div>
		
<br><p>Date: <input type="text" name="date" id="datepicker-11"></p>


			<div class="row">
				<div class="sixteen wide column">
					<div class="field">
						<label>Вовед</label>
						<textarea name="text"></textarea>
					</div>
				</div>

				
			</div>
		</div>	
		<input type="submit" class="">
</form>

@endsection