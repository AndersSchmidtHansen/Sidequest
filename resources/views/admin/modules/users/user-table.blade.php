@if( count($users) )
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Subscription</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach( $users as $user )
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ ucfirst($user->getStripePlan()) }}</td>
    </tr>
  @endforeach

  </tbody>
</table>
@endif