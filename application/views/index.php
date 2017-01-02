
<div class="container">
          <div class="section">
                    <div class="row">
                              <div class="col m12 s12 center">
                                        <h4><span class="red-text">*Beta Version</span></h4>
                                        <h6><span class="red-text">Assalamualaikum</span> <span class="yellow-text">Warahmatullahi </span> <span class="green-text">Wabarokatuh</span></h6>
                              </div>
                    </div>
                    <div class="row">
                              <div class="col m3 hide-on-small-only"></div>
                              <div class="col m6 s12 z-depth-1-half">
                                        <div class="row center" style="margin-bottom: 0px !important;">
                                                  <a href="<?= base_url() ?>" class="modal-trigger">
                                                            <div class="col m4 s6  box-home red waves-effect">
                                                                      <i class="material-icons font-material-home">home</i>
                                                                      <br>
                                                                      Home
                                                            </div>
                                                  </a>
                                                  <a href="#about" class="modal-trigger">
                                                            <div class="col m4 s6  box-home orange waves-effect">
                                                                      <i class="material-icons font-material-home">info</i>
                                                                      <br>
                                                                      About
                                                            </div>
                                                  </a>
                                                  <a href="<?= base_url('all-project') ?>">
                                                            <div class="col m4 s6  box-home blue waves-effect">
                                                                      <i class="material-icons font-material-home">work</i>
                                                                      <br>
                                                                      Project
                                                            </div>
                                                  </a>
                                                  <a href="<?= base_url('news') ?>">
                                                            <div class="col m4 s6  box-home green waves-effect">
                                                                      <i class="material-icons font-material-home">art_track</i>
                                                                      <br>
                                                                      News 

                                                            </div>
                                                  </a>
                                                  <div class="col m4 s6  box-home purple waves-effect">
                                                            <i class="material-icons font-material-home">shopping_cart</i>
                                                            <br>
                                                            Order
                                                  </div>
                                                  <div class="col m4 s6  box-home yellow waves-effect">
                                                            <i class="material-icons font-material-home">people</i>
                                                            <br>
                                                            Team
                                                  </div>
                                                  <a href="<?= base_url('tutorial') ?>">
                                                            <div class="col m4 s6  box-home pink waves-effect">
                                                                      <i class="material-icons font-material-home">build</i>
                                                                      <br>
                                                                      Tutorial
                                                            </div>
                                                  </a>
                                                  <div class="col m4 s6  box-home brown waves-effect">
                                                            <i class="material-icons font-material-home">next_week</i>
                                                            <br>
                                                            Open Project
                                                  </div>
                                                  <a href="#contact" class="modal-trigger">
                                                            <div class="col m4 s6  box-home teal waves-effect">
                                                                      <i class="material-icons font-material-home">contacts</i>
                                                                      <br>
                                                                      Contact
                                                            </div>
                                                  </a>
                                        </div>

                              </div>
                              <div class="col m3 hide-on-small-only"></div>
                    </div>
                    
                    <div class="row">
                              <div class="col m3 hide-on-small-only"></div>
                              <div class="col m6 s12 center">
                                        &COPY; <?= date('Y') ?> Lombok Innovation | load <strong>{elapsed_time}</strong> sec.
                              </div>
                              <div class="col m3 hide-on-small-only"></div>
                    </div>
          </div>
</div>

<!--MODAL ABOUT-->
<div id="about" class="modal">
          <?= form_open('login-member') ?>
          <div class="modal-content">
                    <div class="row">
                              <div class="col m12 s12 orange white-text">
                                        <h4 class="center">About Lombok Innovation</h4>
                              </div>
                    </div>
                    <div class="row">
                              <div class="col m12 s12">
                                        Lombok Innovation merupakan perusahaan yang didirikan untuk membangun inovasi inovasi yang bisa memberi dampak positif bagi masyarakat pulau Lombok.<br>
                                        Kami bergerak di lini bisnis Digital dimana kami membangun aplikasi dan produk digital seperti E-commerce, E-Learning, E-Holiday, dimana produk produk tersebut di khususkan untuk pulau Lombok.<br>
                                        Kami sengaja fokus untuk pulau Lombok karena kami ingin memajukan daerah kami.<br>
                                        Jadi silahkan bagi teman-teman Lombok yang mungkin ingin mengembangkan bisnisnya ke dunia Digital, bisa menghubungi kami pada menu Contact di bawah. terimakasih.<br>
                                        Salam Persahabatan. 
                                        <hr>
                                        CEO
                                        <br>
                                        <br>
                                        (Muhammad Habiburrahman)
                              </div>
                    </div>
                    
          </div>
          <?= form_close() ?>
</div>

<!-- CONTACT MODAL -->
<div id="contact" class="modal">
          <?= form_open('login-member') ?>
          <div class="modal-content">
                    <div class="row">
                              <div class="row">
                                        <div class="col m12 s12 teal white-text">
                                                  <h4 class="center">Contact</h4>
                                        </div>
                              </div>
                              <div class="col m7 s12">
                                        <div class="row">
                                                  <div class="input-field col s12">
                                                            <input id="your_email" type="text" name="your_email" class="validate">
                                                            <label for="your_email">Your email</label>
                                                  </div>
                                        </div>
                                        <div class="row">
                                                  <div class="input-field col s12">
                                                            <textarea id="your_message" class="materialize-textarea" name="your_message"></textarea>
                                                            <label for="your_message">Your Message</label>
                                                  </div>
                                        </div>
                                        <div class="row">
                                                  <div class="col s12">
                                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Send
                                                                      <i class="material-icons right">send</i>
                                                            </button>
                                                  </div>
                                        </div>
                              </div>
                              <div class="col m5 s12">
                                        <h6>Phone: +62 817 0371 2575</h6>
                                        <h6>Email: lombokinnovation@gmail.com</h6>
                                        <h6>FB: Lombok Innovation</h6>
                                        <h6>BBM: D0C73716</h6>
                              </div>
                    </div>
                    
          </div>
          <?= form_close() ?>
</div>
<script src="<?= base_url('assets/master_style/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/master_style//js/materialize.min.js') ?>"></script>
<script src="<?= base_url('assets/master_style//js/init.js') ?>"></script>
<script>
          $(document).ready(function () {
                    $('.modal-trigger').leanModal();
                    $('#your_message').trigger('autoresize');
          });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76381237-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>