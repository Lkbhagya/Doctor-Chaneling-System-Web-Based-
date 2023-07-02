 <!-- link navbar -->
 <nav class="navbar navbar-expand-lg " style=" background-color: rgba(31, 97, 141 )">
     <div class="container-fluid">
         <a class="navbar-brand" href="#" style="color:azure">DCPMS</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="doctor.php" style="color:azure">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#" style="color:azure">Online Medical Report</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:azure">
                         Medical Test
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="#" >Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li>
                             <hr class="dropdown-divider">
                         </li>
                         <li><a class="dropdown-item" href="#" style="color:azure">Online Medical Report</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link disabled" style="color:azure">Disabled</a>
                 </li>
             </ul>
             <form  method="post"  class="d-flex">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-dark" type="submit">Search</button>
             </form>

 <form action="../../../logout.php">
         <button class="btn btn-warning" type="submit">Logout</button>
      </form>

         </div>
     </div>

 </nav>
