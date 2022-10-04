<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php //$this->view("includes/dev/dev-nav", $data)?>
 
  
<div class="container-teeti">
    <?php $this->view("includes/dev/dev-aside")?>
    <!---End of side bar-->
    
        <h1>Dashboard</h1>
        <div class="date-teeti">
            <input type="date">
        </div>
        <div class="insights-teeti">
            <div class="sales-teeti">
                <i class="bx bx-money-withdraw"></i>  
                <div class="middle-teeti">
                <div class="left-teeti">
                    <h3>Total Sales</h3>
                    <h1>$25,024</h1>
                </div>
                <div class="progress-teeti">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
            </div>
            <!---End of Sale-->
            <div class="expenses-teeti">
                <i class="bx bx-bar-chart"></i>  
                <div class="middle-teeti">
                <div class="left-teeti">
                    <h3>Expenses</h3>
                    <h1>$25,024</h1>
                </div>
                <div class="progress-teeti">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="number">
                        <p>31%</p>
                    </div>
                </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
            </div>
            <!---End of Expenses-->
            <div class="profit-teeti">
                <i class="bx bx-line-chart"></i>  
                <div class="middle-teeti">
                    <div class="left-teeti">
                        <h3>Profits</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress-teeti">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>37%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted-teeti">last 24 HRS</small>
                </div>
                <!---End of Profit-->
        </div>
        <!---END OF INSIGHTS-->
        <div class="recent-orders-teeti">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th class="remove-item">Product Number</th>
                        <th class="remove-item">Payment</th>
                        <th class="remove-mob">Status</th>
                        <th>detail</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><img src="./assets/img/Nike_Air_Mag_2016_zj2x44.jpg" alt=""></td>
                        <td>Eccomerce site with Admin</td>
                        <td class="remove-item">85631</td>
                        <td class="remove-item">Paid</td>
                        <td class="success-teeti remove-mob">confirmed</td>
                        <td><div><i class="bx bx-chevron-right"></i></div></td>
                    </tr>
                    <tr>
                        <td><img src="./assets/img/Winter_Workwear____From_commute_to_desk_to_dinner_-_Extra_Petite_koe85i.jpg" alt=""></td>
                        <td>Eccomerce site with Admin</td>
                        <td class="remove-item">85631</td>
                        <td class="remove-item">Due</td>
                        <td class="warning-teeti remove-mob">Pending</td>
                        <td><div><i class="bx bx-chevron-right"></i></div></td>
                    </tr>
                    <tr>
                        <td><img src="./assets/img/Consiente_tu_rostro_con_estas_3_mascarillas_de_Nu_Skin_sdsadr.jpg" alt=""></td>
                        <td>Eccomerce site with Admin</td>
                        <td class="remove-item">85631</td>
                        <td class="remove-item">Due</td>
                        <td class="warning-teeti remove-mob">Pending</td>
                        <td><div><i class="bx bx-chevron-right"></i></div></td>
                    </tr>
                    <tr>
                        <td><img src="./assets/img/J_Crew_Fall_2016_Ready-to-Wear_Fashion_Show_rbbkgu.jpg" alt=""></td>
                        <td>Eccomerce site with Admin</td>
                        <td class="remove-item">85631</td>
                        <td class="remove-item">Due</td>
                        <td class="danger-teeti remove-mob">overdue</td>
                        <td><div><i class="bx bx-chevron-right"></i></div></td>
                    </tr>
                    <tr>
                        <td><img src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt=""></td>
                        <td>Eccomerce site with Admin</td>
                        <td class="remove-item">85631</td>
                        <td class="remove-item">Paid</td>
                        <td class="success-teeti remove-mob">confirmed</td>
                        <td><div><i class="bx bx-chevron-right"></i></div></td>
                    </tr>
                </tbody>
                
            </table>
            <a href="#">Show All</a>
        </div>
    
    <!--END OF MAIN-->
    <?php $this->view("includes/dev/right")?>
     
</div>
<?php $this->view("includes/dev/dev-footnote", $data)?>