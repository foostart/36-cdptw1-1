   <?php
   $url_host = 'http://' . $_SERVER['HTTP_HOST'];
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

   preg_match_all($pattern_uri, __DIR__, $matches);
   $url_path = $url_host . $matches[1][0];
   $url_path = str_replace('\\', '/', $url_path);
   ?>
   <div class="type-1383">
    <div class="container">
      <h2 class="h2">Looking For Answers?</h2>
      <div class="row">
        <div class="col-md-12">
          <div class="panel-group faq-group" id="accordion_1" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="click" data-toggle="collapse" data-parent="#accordion_1" href="#accordion_1_collapseOne" aria-expanded="true" aria-controls="accordion_1_collapseOne">+</a>
                  <a class="active" href="#accordion_1_collapseOne" >
                    Food Delivery. Order online food delivery at RoomService
                  </a>
                </h4>
              </div>
              <div  id="accordion_1_collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,.</p>
                  <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua quasi architecto beatae vitae
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="click" data-toggle="collapse" data-parent="#accordion_1" href="#accordion_1_collapseTwo" aria-expanded="false" aria-controls="accordion_1_collapseTwo">+</a>
                  <a class="active" href="#accordion_1_collapseTwo">
                    Non equidem invideo, miror magis posuere velit aliquet.
                  </a>
                </h4>
              </div>
              <div id="accordion_1_collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,.</p>
                  <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua quasi architecto beatae vitae
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="click" data-toggle="collapse" data-parent="#accordion_1" href="#accordion_1_collapseThree" aria-expanded="false" aria-controls="accordion_1_collapseThree">+</a>
                  <a class="active" href="#accordion_1_collapseThree">
                    Subscribe to our monthly newsletter to get the latest scoop
                  </a>
                </h4>
              </div>
              <div id="accordion_1_collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,.</p>
                  <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua quasi architecto beatae vitae
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                  <a class="click" data-toggle="collapse" data-parent="#accordion_1" href="#accordion_1_collapseFour" aria-expanded="false" aria-controls="accordion_1_collapseFour">+</a>
                  <a class="active" href="#accordion_1_collapseFour">
                    CSS Powered Buttons with Hover Tooltips
                  </a>
                </h4>
              </div>
              <div id="accordion_1_collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,.</p>
                  <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua quasi architecto beatae vitae
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title">
                  <a class="click" data-toggle="collapse" data-parent="#accordion_1" href="#accordion_1_collapseFive" aria-expanded="false" aria-controls="accordion_1_collapseFive">+</a>
                  <a class="active" href="#accordion_1_collapseFive">
                    Smashicons: 100 Free Icons
                  </a>
                </h4>
              </div>
              <div id="accordion_1_collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,.</p>
                  <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua quasi architecto beatae vitae
                  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  




