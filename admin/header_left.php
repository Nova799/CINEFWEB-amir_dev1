 <!-- partial:partials/_settings-panel.html -->
 <div class="theme-setting-wrapper">
     <div id="settings-trigger"><i class="ti-settings"></i></div>
     <div id="theme-settings" class="settings-panel">
         <i class="settings-close ti-close"></i>
         <p class="settings-heading">SIDEBAR SKINS</p>
         <div class="sidebar-bg-options" id="sidebar-light-theme bg-success">
             <div class="img-ss rounded-circle bg-light border me-3"></div>Light
         </div>
         <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
             <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
         </div>
         <p class="settings-heading mt-2">HEADER SKINS</p>
         <div class="color-tiles mx-0 px-4">
             <div class="tiles success"></div>
             <div class="tiles warning"></div>
             <div class="tiles danger"></div>
             <div class="tiles info"></div>
             <div class="tiles dark selected"></div>
             <div class="tiles default"></div>
         </div>
     </div>
 </div>

 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas bg-success" id="sidebar">
     <ul class="nav">
         <li class="nav-item active">
             <a class="nav-link" href="./">
                 <i class="mdi mdi-grid-large menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>


         <li class="nav-item nav-category">SECTIONS</li>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                 <i class="menu-icon mdi mdi-card-text-outline"></i>
                 <span class="menu-title">NOS SECTIONS</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="form-elements" style="">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="addFormation.php">Ajouter une formation</a></li>
                     <li class="nav-item"><a class="nav-link" href="addUser.php">Ajouter un utilisateur</a></li>
                     <li class="nav-item"><a class="nav-link " href="newsletter.php">Liste de diffusion</a></li>
                     <li class="nav-item"><a class="nav-link " href="#">Campagne</a></li>
                     <li class="nav-item d-none"><a class="nav-link " href="pages/forms/basic_elements.html">Nos newletters</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item d-none">
             <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                 <i class="menu-icon mdi mdi-chart-line"></i>
                 <span class="menu-title">Charts</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                 </ul>
             </div>
         </li>

         <li class="nav-item d-none">
             <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                 <i class="menu-icon mdi mdi-layers-outline"></i>
                 <span class="menu-title">Icons</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="icons">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                 </ul>
             </div>
         </li>
     </ul>
 </nav>