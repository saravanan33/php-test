<h1>hi this is saravanan </h1>
<body>
    <?php $user=array(1,2,3,4);?>
@foreach($users as $user)
  <li>{{ $user->name }}</li>
@endforeach
</body>