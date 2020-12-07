@extends('subview.master')
@section('title', 'List')
@section('content')
<style>
body {
  background-color: lightgrey;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: white;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<center><h2>List of e-books</h2>
<body>
<table>
  <tr>
    <th>No</th>
    <th>Title</th>
    <th>ISBN</th>
    <th>Category</th>
    <th>Pages</th>
  </tr>
  <tr>
    <td>1</td>
    <td>The Grass is Always Greener</td>
    <td>1-86092-049-7</td>
    <td>Modern Times</td>
    <td>60</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Murder!</td>
    <td>1-86092-012-8</td>
    <td>Crime</td>
    <td>100</td>
  </tr>
  <tr>
    <td>3</td>
    <td>The Higgler</td>
    <td>1-86092-010-1</td>
    <td>Romance</td>
    <td>85</td>
  </tr>
  <tr>
    <td>4</td>
    <td>The Open Boat</td>
    <td>1-86092-025-x</td>
    <td>Classic</td>
    <td>45</td>
  </tr>
  <tr>
    <td>5</td>
    <td>The Speckled Band</td>
    <td>1-86092-003-9</td>
    <td>Crime</td>
    <td>90</td>
  </tr>
  <tr>
    <td>6</td>
    <td>From a View to a Kill</td>
    <td>1-86092-055-1</td>
    <td>Adventure</td>
    <td>50</td>
  </tr>
</table>
</ul>
</center>
</body>
@endsection