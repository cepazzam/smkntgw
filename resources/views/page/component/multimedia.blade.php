 <section class="padding-top-70 padding-bottom-50 border-bottom shadow">
     <div class="container">
         <div class="row equal-height-row">
             <div class="col-md-8">
                 <iframe src="https://www.youtube.com/embed/{{ App\Models\Video::orderBy('id', 'asc')->first()->embed }}"
                     class="w-100" height="360" frameborder="0" allowfullscreen></iframe>
             </div>

             <div class="col-md-4 hero-thumb equal-height-column">
                 <img src="{{ asset('storage/' . App\Models\Widget::where('kategori', 'skl')->first()->image) }}"
                     class="img-responsive w-100" alt="Image">
             </div>
         </div>
     </div><!-- /.container -->

 </section>
 <hr class="mt-15" />
