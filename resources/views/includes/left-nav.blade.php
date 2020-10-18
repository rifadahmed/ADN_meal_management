
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.dashboard')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Meal Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('dashboard.dashboard')}}" class="nav-link " href="JavaScript:void(0)">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard
                  </p>
                </a>
            </li>


          {{--  <li class="nav-item @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='index' ||Request::segment(1) == 'disburshment' && Request::segment(2)=='create' ||Request::segment(1) == 'disburshment' && Request::segment(2)=='edit' ) menu-open @endif bold">
              <a href="#" class="nav-link " href="JavaScript:void(0)">
                <i class="nav-icon fas fa-dollar-sign"></i>
                <p>Disburshment
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('disburshment.index')}} " class="nav-link @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='index' ) active @endif bold" >
                    <i class="far fa-circle nav-icon"></i>
                    <p>Disburshment List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href=" {{route('disburshment.create')}} " class="nav-link @if(Request::segment(1) == 'disburshment' && Request::segment(2)=='create' ) active @endif bold">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Disburshment</p>
                  </a>
                </li>
              </ul>
          </li>  --}}

           {{--<li class="nav-item has-treeview ">
             <a href="#" class="nav-link ">
               <i class="nav-icon far fa-money-bill-alt"></i>
               <p>
                 Financial
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="{{route('financial.index')}} " class="nav-link ">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Financial List</p>
                 </a>
               </li>
             </ul>
         </li>--}}

          {{--  <li class="nav-item has-treeview @if(Request::segment(1) == 'project' && Request::segment(2)=='index' ||Request::segment(1) == 'project' && Request::segment(2)=='create' ||Request::segment(1) == 'project' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Meal Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('project.index')}} " class="nav-link @if(Request::segment(1) == 'project' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('project.create')}} " class="nav-link @if(Request::segment(1) == 'project' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Weekly Meal</p>
                </a>
              </li>
            </ul>
          </li>  --}}

          <li class="nav-item has-treeview @if(Request::segment(1) == 'desigantion' && Request::segment(2)=='index' ||Request::segment(1) == 'designation' && Request::segment(2)=='create' ||Request::segment(1) == 'designation' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Designation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('designation.index')}} " class="nav-link @if(Request::segment(1) == 'designation' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation List</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href=" {{route('designation.create')}} " class="nav-link @if(Request::segment(1) == 'designation' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Designation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @if(Request::segment(1) == 'desigantion' && Request::segment(2)=='index' ||Request::segment(1) == 'designation' && Request::segment(2)=='create' ||Request::segment(1) == 'designation' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Meal Rate
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mealrate.index')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meal Rate List</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href=" {{route('mealrate.create')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Meal Rate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @if(Request::segment(1) == 'desigantion' && Request::segment(2)=='index' ||Request::segment(1) == 'designation' && Request::segment(2)=='create' ||Request::segment(1) == 'designation' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Business Unit(SBU)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sbu.index')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SBU List</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href=" {{route('sbu.create')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add SBU</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @if(Request::segment(1) == 'desigantion' && Request::segment(2)=='index' ||Request::segment(1) == 'designation' && Request::segment(2)=='create' ||Request::segment(1) == 'designation' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Office Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('officelocation.index')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Office Location List</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href=" {{route('officelocation.create')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Office Location</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @if(Request::segment(1) == 'desigantion' && Request::segment(2)=='index' ||Request::segment(1) == 'designation' && Request::segment(2)=='create' ||Request::segment(1) == 'designation' && Request::segment(2)=='edit' ) menu-open @endif bold ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Unit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('unit.index')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='index' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit List</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href=" {{route('unit.create')}} " class="nav-link @if(Request::segment(1) == 'mealrate' && Request::segment(2)=='create' ) active @endif bold">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Unit</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
