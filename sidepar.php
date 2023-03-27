<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="index.php"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span
              class="badge badge badge-info badge-pill float-right mr-2">
                <?php
                  include_once('connection.php');
                  $query= "SELECT * FROM category";
                  $result=mysqli_query($connection,$query);
                 echo mysqli_num_rows($result);
                ?>


            </span></a>
          
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>

            
              <ul class="menu-content">
                <li><a class="menu-item" href="newCategory.php" data-i18n="nav.templates.horz.classic">Add New Category</a>
                </li>
                <li><a class="menu-item" href="newStore.php" data-i18n="nav.templates.horz.classic">Add New Store</a>
                </li>
                <li><a class="menu-item" href="show.php" data-i18n="nav.templates.horz.top_icon">Show All Category
                    </a>
                </li>
                <li><a class="menu-item" href="showStore.php" data-i18n="nav.templates.horz.top_icon">Show All Store
                    </a>
                </li>
              </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Admins</span></a>  
<ul class="menu-content">
  <li><a class="menu-item" href="newAdmin.php" data-i18n="nav.templates.horz.classic">Add Admin</a>
  </li>
  <li><a class="menu-item" href="showAdmin.php" data-i18n="nav.templates.horz.classic">show Admins</a>
  </li>
 
</ul>
</li>



            <li class=" nav-item"><a href="Login/logout.php"><i class="la la-check-square"></i><span class="menu-title" data-i18n="nav.templates.main">Logout</span></a>
</li>
          </ul>
    </div>
  </div>
  