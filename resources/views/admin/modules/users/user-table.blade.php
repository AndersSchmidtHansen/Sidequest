@if( count($users) )

<table class="table table-striped">
  
  <caption>Total users: {{ $total_users }}. Plan subscribers: {{ $total_active_subscribers }}. Non-subscribers: {{ $total_non_subscribers }}.</caption>
  
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Plan</th>
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

{!! $users->render() !!}

@else
<p>You currently don't have any users. Get out and get 'em!</p>

@endif