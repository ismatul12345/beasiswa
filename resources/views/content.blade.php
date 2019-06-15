@extends('master')
@section('content')

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Content</h6>
            </div>
            <div class="card-body">
            	<div align="right">
            		<a href="{{route('addcontent')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; New</button></a>
            	</div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Syarat</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Syarat</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  @php $no = 1; @endphp
                  @foreach($data as $datas)      
                  <tbody>
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$datas->judul}}</td>
                      <td>{{$datas->deskripsi}}</td>
                      <td>{{$datas->syarat}}</td>
                      <td>{{$datas->tanggal}}</td>
                      <td> <center><a href="{{route('editcontent', [$datas->id])}}">
                      		<button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                      		<form method="POST" action="{{route('deletecontent', [$datas->id]) }}" style="display: inline-block;">
                      			{{csrf_field() }}
                      			<button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                      		</form>
                      	</center>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection