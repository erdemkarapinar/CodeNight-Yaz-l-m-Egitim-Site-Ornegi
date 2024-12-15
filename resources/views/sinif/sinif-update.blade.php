@extends('giris')
@section('content')
<h3>Sınıf Düzenleme Sayfası</h3>
<form action="{{route('postEditSinif')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="container">
		<div class="form-group">
			<label>Sınıf Adı</label>
			<input type="text" name="sinif" class="form-control" value="{{@$d->sinif}}">
		</div>
		<div class="form-group">
			<label>Sınıf Kategorisi</label>
			<select name="departman_id" class="form-control"  data-provide="selectpicker" data-live-search="true" data-size="5">
				@if($d)
					@foreach($d as $c)
					<option value="{{$c->id}}"> {{$c->sinif_category}}</option>
					@endforeach
				@else
					<option>Veri Bulunamadı</option>
				@endif		
			</select>	
		</div>
		<button class="btn btn-sm btn-success" type="submit">Ekleme</button>
	</div>
</form>
@endsection