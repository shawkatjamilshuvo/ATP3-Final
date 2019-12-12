<div class="container">

<h2>Admin Panel</h2>

<p>Data of the Registered Users.</p> 

<table class="table table-bordered" border = "1">

<thead>

<tr >

<th>UserID</th>

<th>Email</th>

<th>Password</th>

<th>User_Type</th>

</tr>

</thead>

<tbody>



<tr>

<td>{{ $value->UserID }}</td> 

<td>{{ $value->Email }}</td>

<td>{{ $value->Password }}</td>

<td>{{ $value->User_Type}}</td>
</tr>

</tbody>

</table>

</div>