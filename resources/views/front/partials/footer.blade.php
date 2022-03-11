      <!--  footer -->
      <footer>
        <div class="footer">
           <div class="container">
              <div class="row">
                 <div class="col-md-12 ">
                    <div class="cont">
                       <h3> <strong class="multi"> Free Multipurpose Responsive</strong><br>
                          Landing Page 2019
                       </h3>
                    </div>
                 </div>
                 <div class="col-md-12">
                    <ul class="social_icon">
                       <li><a href="#"><i class="fa fa-{{ $footers[0] ->social1 }}" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-{{ $footers[0] ->social2 }}" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-{{ $footers[0] ->social3 }}" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
           <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                       <p>{!! str_replace(['(',')'],['<a href="https://html.design/">','</a>'], $footers[0]->copyright) !!}</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <!-- end footer -->