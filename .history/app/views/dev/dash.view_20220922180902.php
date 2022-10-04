<?php $this->view("includes/dev/dev-header", $data)?>

  <!-- ======= Header ======= -->
  <?php //$this->view("includes/dev/dev-nav", $data)?>
 
  
<div class="container-teeti">
    <?php $this->view("includes/dev/dev-aside", $row)?>
    <!---End of side bar-->
    <main>
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
    </main>
    <!--END OF MAIN-->
    <div class="right-teeti">
        <div class="top-teeti">
            <button id="menu-btn-teeti">
                <i class="bx bx-menu"></i>
            </button>
            <!--<div class="theme-toggler-teeti">
                <i class="bx bx-sun active"></i>
                <i class="bx bx-moon"></i>
            </div>-->
            <div class="profile-teeti">
                <div class="info-teeti">
                    <p>Hey, <b>Dennis</b></p>
                    <small class="text-muted-teeti">Developer</small>
                </div>
                <div class="profile-photo-teeti">
                    <img src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt="">
                </div>
            </div>
        </div>
        <!---END OF TOP-->
        <div class="recent-updates-teeti">
            <h2>Recent Updates</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo-teeti">
                        <img src="./assets/img/Winter_Workwear____From_commute_to_desk_to_dinner_-_Extra_Petite_koe85i.jpg" alt="">
                    </div>
                    <div class="message-teeti">
                        <p><b>Dennis Karani</b> received his order of a eccomerce delivery app.</p>
                        <small class="text-muted-teeti">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo-teeti">
                        <img src="./assets/img/Consiente_tu_rostro_con_estas_3_mascarillas_de_Nu_Skin_sdsadr.jpg" alt="">
                    </div>
                    <div class="message-teeti">
                        <p><b>Mary Jane</b> received her order for a landing page.</p>
                        <small class="text-muted-teeti">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo-teeti">
                        <img src="./assets/img/pexels-pixabay-60894_wsfqhk.jpg" alt="">
                    </div>
                    <div class="message-teeti">
                        <p><b>Cleopas Marara</b> received his order at data bank click <a href="#">here</a> to check it out?.</p>
                        <small class="text-muted-teeti">2 Minutes Ago</small>
                    </div>
                </div>
            </div>
        </div>
        <!---END OF RECENT UPDATES-->
        <div class="sales-analytics-teeti">
            <h2>Sales Analytics</h2>
            <div class="item online">
                <div class="icon">
                    <i class="bx bx-cart"></i>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>ONLINE ORDERS</h3>
                        <small class="text-muted-teeti">Last 24 Hours</small>
                    </div>
                    <h5 class="success-teeti">+39%</h5>
                    <h3>3849</h3>
                </div>
            </div>
            <div class="item offline">
                <div class="icon">
                    <i class="bx bxs-shopping-bags"></i>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>OFFLINE ORDERS</h3>
                        <small class="text-muted-teeti">Last 24 Hours</small>
                    </div>
                    <h5 class="danger-teeti">-17%</h5>
                    <h3>3849</h3>
                </div>
            </div>
            <div class="item customers">
                <div class="icon">
                    <i class="bx bx-user"></i>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>NEW CUSTOMERS</h3>
                        <small class="text-muted-teeti">Last 24 Hours</small>
                    </div>
                    <h5 class="success-teeti">+25%</h5>
                    <h3>849</h3>
                </div>
            </div>
            <div class="item add-product">
                <div>
                    <i class="bx bx-add-to-queue"></i>
                    <h3>Add Product</h3>
                </div>
            </div>
        </div>
    </div>
     
</div>
<?php $this->view("includes/dev/dev-footnote", $data)?>