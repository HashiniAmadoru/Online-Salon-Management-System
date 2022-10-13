@extends('layouts.app')

@section('sidebar')

<style type="text/css">

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active{

        color: #fff;
        background-color: #ccccb3;
    }

    @media screen and (min-width: 992px){

        .nav-link {
            display: block;
            padding: 5px;
        }
    }

</style>


<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="/myprofile" class="{!! classActivePath('myprofile') !!} nav-link">
                <i class="nav-icon fas fa-portrait"></i>
                <p>
                    My Profile
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/SOwnerAppointment" class="{!! classActivePath('SOwnerAppointment') !!} nav-link">
                <i class="nav-icon fas fa-atlas"></i>
                <p>
                    Appointment
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/SownerSeeProfile" class="{!! classActivePath('SownerSeeProfile') !!} nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Salon Profile
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/SalonOwnerGallery" class="{!! classActivePath('SalonOwnerGallery') !!} nav-link">
               <i class="nav-icon fas fa-book-reader"></i>
                <p>
                    Gallery
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/S_adminContactForm" class="{!! classActivePath('S_adminContactForm') !!} nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                    Contact
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/S_comments" class="{!! classActivePath('S_comments') !!} nav-link">
                <i class="nav-icon fas fa-comment-alt"></i>
                <p>
                    Comments
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/Service_request" class="{!! classActivePath('Service_request') !!} nav-link">
               <i class="nav-icon fab fa-asymmetrik"></i>
                <p>
                    Request Services
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/Add_yourService" class="{!! classActivePath('Add_yourService') !!} nav-link">
                <i class="nav-icon fab fa-battle-net"></i>
                <p>
                    Add Your Services
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/Product_request" class="{!! classActivePath('Product_request') !!} nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                    Request Products
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/Add_yourProduct" class="{!! classActivePath('Add_yourProduct') !!} nav-link">
                <i class="nav-icon fas fa-box-open"></i>
                <p>
                    Add Your Products
                </p>
            </a>
        </li>


    </ul>
</nav>
<!-- /.sidebar-menu -->

@endsection