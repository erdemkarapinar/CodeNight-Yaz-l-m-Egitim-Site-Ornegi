@extends('giris')
@section('content')
<form action="{{route('postCreateCategory')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="form-group col-lg-8">
			<label>Kategori Adı</label>
			<input type="text" name="category" class="form-control" >
		</div>
		<button class="btn btn-sm btn-success col-lg-2" type="submit">Ekle</button>
	</div>
</form>
@endsection