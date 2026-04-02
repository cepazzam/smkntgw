<h3 class="p-3 border bg-warning">Profil</h3>
<ul>
  @foreach ($list as $item)
  <li><a href="{{route('read-profil',$item->slug)}}">{{$item->title}}</a></li>
  @endforeach
</ul>