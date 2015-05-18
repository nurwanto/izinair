@extends('app')
@section('title')
	Manajemen Pegawai
@endsection
@section('script')
	<script>
		function confirmDelete(id) {
		    if (confirm("Apakah Anda yakin ingin menghapus data ini?") == true) {
		        location.href = "/izinair/admin/manajemen/hapus/"+id;
		    } else {
		        
		    }
		}
	</script>
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/admin') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/admin/manajemen') }}">manajemen</a></li>
    <li>{{session('username')}} | <a href="{{ URL::to('/izinair/super_logout')}}">Logout</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/admin')}}">Home</a></li>
	  <li class="active">manajemen</li>
	</ol>
@endsection
@section('content')
<div class="main"><!-- start main -->
<div class="container">
	<div class="row contact"><!-- start contact -->	
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pegawai</h1>
				<p><a href="{{ URL::to('izinair/admin/manajemen/tambah') }}" class="btn btn-primary" role="button">Tambah Pegawai Baru</a></p>
				<div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
	                    <tbody>
	                    @foreach($profiles as $value)
	                        <tr>
	                            <td>{{{ $value->NIP }}}</td>
	                            <td>{{{ $value->nama }}}</td>
	                            <td>{{{ $value->username }}}</td>
	                            <td>
	                            	<div class="btn-group">
										<a href="/izinair/admin/manajemen/ubah/{{$value->id}}">Ubah</a>
										<a href="javascript:confirmDelete({{$value->id}})">Hapus</a>
									</div>
	                            </td>
	                        </tr>
	                    @endforeach    
	                    </tbody>
	                </table>
				</div>
			</div>	
		</div> <!-- end contact -->
	</div>
</div>
</div>
@stop