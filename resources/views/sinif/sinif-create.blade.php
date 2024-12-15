@extends('giris')
@section('content')
	<h2>Sınıf Ekleme</h2>
	<form action="{{route('postCreateSinif')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<div class="form-group">
				<label>Sınıf Adı</label>
				<input type="text" name="sinif" class="form-control">
			</div>
			<div class="form-group">
				<label>Sınıf Kategorisi</label>
				<select name="sinif_category" class="form-control" data-provide="selectpicker" data-live-search="true" data-size="5">
					@foreach($c as $k)
					<option>Seçiniz</option>
					<option value="{{$k->id}}">{{$k->category}}</option>
					@endforeach
				</select>
			</div>
			<button class="btn btn-sm btn-warning col-lg-4" style="margin-top: 10px;" type="submit">Ekle</button>
		</div>
	</form>
@endsection
