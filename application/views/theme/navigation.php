
<div class="container-fluid header-lower">
  <div class="container">
    <div class="">
      <div class="auto-container">
        <div class="nav-outer clearfix"> 
          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-header"> 
              <!-- Toggle Button -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse clearfix">



                <?php $additional_item1 = '<li class="current dropdown"><a href="'.base_url().'"><p class="menu-top-h2">Home</p></a></li><li class="dropdown"><a href="'.base_url().'/about">About Us</a></li>'; ?>
  <?php  $additional_item3 = ' <li><a href="'.base_url().'/Frontend_controller/contact">Contact Us</a></li>'; ?>
        <?php


         echo $this->multi_menu
->inject_item($additional_item1, 'first')     
  ->inject_item($additional_item3)
         ->render(array(
            'nav_tag_open'        => '<ul class="nav navbar-nav">',            
            'parentl1_tag_open'   => '<li class="dropdown">',
            'parentl1_anchor'     => '<a tabindex="0" data-toggle="dropdown" href="%s">%s<span class="caret"></span></a>',
            'parent_tag_open'     => '<li class="dropdown-submenu">',
            'parent_anchor'       => '<a href="Frontend_controller/category/%s" data-toggle="dropdown">%s</a>',
            'children_tag_open'   => '<ul class="dropdown-menu">'
        )); 


        ?>
      </div>
    </nav>

          
        </div>
      </div>
    </div>
  </div>
</div>