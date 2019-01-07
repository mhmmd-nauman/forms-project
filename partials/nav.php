 <nav class = "navbar navbar-default" role = "navigation">
                    
                    <div>
                      <ul class = "nav navbar-nav">
                          <li class = "active">
                              <a href = "index.php">Home</a>
                          </li>
                         <?php if($_SESSION['admin_type_of_user'] == "Admin"){?>
                         <li >
                              <a href = "spot-prices.php">Spot Prices</a>
                          </li>
                          <li >
                              <a href = "other-expenses.php">Other Expenses</a>
                          </li>
                         <li class = "dropdown">
                            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                               Report 
                               <b class = "caret"></b>
                            </a>

                            <ul class = "dropdown-menu">
                               <li><a href = "#">Weekly</a></li>
                               <li><a href = "#">Monthly</a></li>
                            </ul>
                        </li>
                         <?php }?>
                      </ul>
                   </div>

                </nav>