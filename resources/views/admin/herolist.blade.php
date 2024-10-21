<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h3><a href="{{ route('admin.heroform') }}">Add New</a></h3>
<h2>Hero List Table</h2>

<table>
  <tr>
    <th>Sl No :</th>
    <th>Person Name</th>
    <th>Person's Greetings</th>
    <th>Person's Designation</th>
    <th>Person's CV Download Text</th>
    <th>Person's CV Download Link</th>
    <th>Actions</th>
  </tr>


  @foreach ($hero_section as $key =>$hero_single_value  )
  <tr>
    <td>  {{ $loop->iteration }}</td>
    <td>{{ $hero_single_value->person_name }}</td>
    <td>{{ $hero_single_value->hello }}</td>
    <td>{!! $hero_single_value->designation !!}</td>
    <td>{{ $hero_single_value->btn_text }}</td>
    <td>{{ $hero_single_value->btn_url }}</td>
    <td><a href="{{ route('admin.heroedit',$hero_single_value->id) }}">Edit</a> || <a href="{{ route('admin.herodelete',$hero_single_value->id) }}">Delete</a></td>
  </tr>
  @endforeach


</table>

</body>
</html>

	