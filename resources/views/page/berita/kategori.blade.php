

                       <div class="widget widget_categories">
                            <h3 class="widget-title">Kategori</h3>   
                            <ul>
                                @foreach (App\Models\Category::withCount('posts')->get() as $item)
                             <li>
                             <a href="{{route('kategori-berita',$item->id)}}" class="d-flex justify-content-between"><span>{{$item->name}} </span>
                             <h3 class="bg-info text-light rounded-pill p-1 fw-bold px-3">{{ $item->posts_count }}</h3></li>
                              </a>
                             @endforeach
                            </ul>
                       </div><!-- /.widget_categories -->