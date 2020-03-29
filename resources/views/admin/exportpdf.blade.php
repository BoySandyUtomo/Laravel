<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
	
	<table class="table table-bodered">

          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Destination</th>
              <th scope="col">Categories</th>
              <th scope="col">Location</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $destination as $dst)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{$dst->name}}</td>
              <td>{{$dst->category}}</td>
              <td>{{$dst->location}}</td>
              <td>{{$dst->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
 
</body>
</html>
