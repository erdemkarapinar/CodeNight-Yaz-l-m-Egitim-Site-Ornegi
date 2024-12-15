
@extends('giris')
@section('content')
<form action="{{route('postEditCategory')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" value="{{$d->id}}"name="id">
	@csrf
	<div class="container">
		<div class="form-group">
			<label>Kategori Adı</label>
			<input type="text" name="category" class="form-control" value="{{@$c->category}}">
		</div>
		<button class="btn btn-sm btn-success" type="submit">Ekle</button>
	</div>	
</form>
@endsection