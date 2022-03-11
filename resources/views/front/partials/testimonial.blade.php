      <!-- Testimonial -->
      <div class="section">
        <div class="container">
           <div id="" class="Testimonial">
              <div class="row">
                 <div class="col-md-12">
                    <div class="titlepage">
                       <h2>{{ $titres[3]->titre }}</h2>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-3">
                    <div class="Testimonial_box">
                       <i><img src={{ $testimonials[0]->img }} alt="#"/></i>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="Testimonial_box">
                       <h4>{{ $testimonials[0]->name }}</h4>
                       <p>{{ $testimonials[0]->paragraph }}
                       </p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
     <!-- end Testimonial -->