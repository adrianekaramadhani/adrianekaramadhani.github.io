<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Eye Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    /* Tambahkan CSS custom jika diperlukan */
  </style>
</head>
<body>
        <!--Jasa Mulai-->
        <section>
            <div class="section__container jasa__container" id="Jasa">
                <h2 class="section__headerJasa">Most Popular Service</h2>
                <div class="jasa__grid">
                    <div class="jasa__card">
                        <img src="../image/bay1.jpg" alt="jasa" class="gambar1" style="width:50%;height:50%;"/>
                        <p>CapturedMoments</p>
                        <h4>The Baby Season's</h4>
                        <div>    
                            <div class="rating">
                                <span><i data-feather="star"></i></span>
                                5.0 (623)
                            </div>
                            <div class="price">Start from: <span> Rp. 799.000,00</span></div>
                        </div>
                        <button class="cart-button">Cart</button>
                    </div>
                    <div class="jasa__card">
                        <img src="../image/graduation.jpg" alt="jasa" class="gambar2"/>
                        <p>CapturedMoments</p>
                        <h4>The Graduation</h4>
                        <div>    
                            <div class="rating">
                                <span><i data-feather="star"></i></span>
                                4.97 (878)
                            </div>
                            <div class="price">Start from: <span> Rp. 399.000,00</span></div>
                        </div>
                        <button class="cart-button">Cart</button>
                    </div>
                    <div class="jasa__card">
                        <img src="../image/fotoKeluarga.jpg" alt="jasa" class="gambar3"/>
                        <p>CapturedMoments</p>
                        <h4>Our Family</h4>
                        <div>    
                            <div class="rating">
                                <span><i data-feather="star"></i></span>
                                4.94 (1.5k+)
                            </div>
                            <div class="price">Start from: <span> Rp. 699.000,00</span></div>
                        </div>
                        <button class="cart-button">Cart</button>
                    </div>
                    <div class="jasa__card">
                        <img src="../image/personal.jpg" alt="jasa" class="gambar4"/>
                        <p>CapturedMoments</p>
                        <h4>The Personal</h4>
                        <div>    
                            <div class="rating">
                                <span><i data-feather="star"></i></span>
                                5.0 (373)
                            </div>
                            <div class="price">Start from: <span> Rp. 359.000,00</span></div>
                        </div>
                        <button class="cart-button">Cart</button>
                    </div>
                    <div class="jasa__card">
                        <img src="../image/prewed.jpg" alt="jasa" class="gambar5"/>
                        <p>CapturedMoments</p>
                        <h4>The Adventure Life</h4>
                        <div class="bintang">    
                            <div class="rating">
                                <span><i data-feather="star"></i></span>
                                5.0 (1.5k+)
                            </div>
                            <div class="price">Start from: <span> Rp. 1.299.000,00</span></div>
                        </div>
                        <button class="cart-button">Cart</button>
                    </div>
                </div>
            </div>
            
          </section>
          <!--Jasa End-->
          
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/js/main.js"></script>
<script>feather.replace();</script>
</body>
</html>