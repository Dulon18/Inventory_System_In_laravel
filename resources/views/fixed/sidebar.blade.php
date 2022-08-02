<div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">CodiePie</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        
                    </li>

                    <li class="menu-header"></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i><span>Employees</span></a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="{{route('employeeAdd')}}">Add Employee</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('employeesList')}}">Manage Employees</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header">Starter</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Customer</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('customerAdd')}}">Add Customer</a></li>
                            <li><a class="nav-link" href="{{route('customerList')}}">Manage Customer</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Suppliers</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('supplierAdd')}}">Add Spplier</a></li>
                            <li><a class="nav-link" href="{{route('supplierList')}}">All Sppliers</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Salary(EMP)</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('salaryAdd')}}">Add Salary</a></li>
                            <li><a class="nav-link" href="{{route('salaryList')}}">All Salary</a></li>
                        </ul>
                    </li>

                </ul>
           
            </aside>
        </div>