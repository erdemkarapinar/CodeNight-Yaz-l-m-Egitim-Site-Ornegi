

@extends('giris')
@section('content')
<h1>Kategoriler</h1>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Sınıf Adı</th>
			<th scope="col">Kategori Adı</th>

		</tr>
	</thead>
	@foreach($c as $k)
	<tbody>
		<tr>
			<th scope="row">{{$k->id}}</th>
			<td>{{@$k->category}}</td>
		
			<td><a href="{{route('getDeleteCategory',array('id'=>$k->id))}}" class="btn btn-danger" onclick="return confirm('Silmek İstediğinize Emin misiniz?');">Sil</a>
				<a href="{{route('getEditCategory',array('id'=>$k->id))}}" class="btn btn-warning">Düzenle</a>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endsection