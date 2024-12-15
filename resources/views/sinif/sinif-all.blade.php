@extends('giris')
@section('content')
	<h1>Sınıflar</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Sınıf Adı</th>
				<th scope="col">Sınıf Kategorisi</th>
				<th scope="col">İşlemler</th>
			</tr>
		</thead>
		@foreach($d as $k)
		<tbody>
			<tr>
				<th scope="row">{{$k->id}}</th>
				<td>{{@$k->sinif}}</td>
				<td>{{@$k->kategori->category}}</td>
				<td><a href="{{route('getDeleteSinif',array('id'=>$k->id))}}" class="btn btn-danger" onclick="return confirm('Silmek İstediğinize Emin misiniz?');">Sil</a>
					<a href="{{route('getEditSinif',array('id'=>$k->id))}}" class="btn btn-warning">Düzenle</a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
@endsection

