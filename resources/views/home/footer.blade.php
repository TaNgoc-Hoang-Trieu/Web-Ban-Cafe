<section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              Giới thiệu
            </h6>
            <p>
              Bán cà phê online giúp tiếp cận khách hàng rộng khắp, vượt qua giới hạn địa lý, từ đó mở rộng quy mô kinh doanh.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Bản tin
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Cần giúp đỡ
            </h6>
            <p>
              Bán cà phê online giúp tiếp cận khách hàng rộng khắp, vượt qua giới hạn địa lý, từ đó mở rộng quy mô kinh doanh.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Liên hệ với chúng tôi
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Lớp DC21CTT01 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+84 567567765</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> trieu@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span>  Mọi quyền được bảo lưu bởi
          <a href="https://html.design/">Hoàng Triều</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>
    <!-- end info section -->

    <script type="text/javascript">
  
      function confirmation(ev)
      {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
          title:"Are You Sure To Delete This",
          text:"This delete will be parmanent",
          icon:"warning",
          buttons:true,
          dangerMode:true,
        })
        .then((willCancel)=>{
          if(willCancel){
            window.location.href=urlToRedirect; 
          }
        });
      }
  
    </script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="{{asset('js/custom.js')}}"></script>
  
