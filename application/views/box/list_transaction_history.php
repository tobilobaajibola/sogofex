<?php
                  foreach ($transaction_history as $transaction_histories) {
                     ?>
                     <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <i class="ni ni-bold-up text-success"></i>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0 text-primary"><a href="#!"><?php echo $transaction_histories['transaction_amount'];?></a></h4>
                           <span class="text-success">●</span> <small>Deposit</small>
                        </div>
                        <div class="col-auto"><small>Today</small></div>
                     </div>
                  </li>
                  <?php
               }
                  ?>
                 <!--  -->