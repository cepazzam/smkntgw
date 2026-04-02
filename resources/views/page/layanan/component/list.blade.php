<h3 class="p-3 border bg-warning">Bidang Layanan</h3>
<ul>
  @foreach ($list as $item)
  <li><a href="{{route('layanan.read',['kategori' => $item->kategori, 'slug' => $item->slug])}}">{{$item->title}}</a></li>
  @endforeach
</ul>