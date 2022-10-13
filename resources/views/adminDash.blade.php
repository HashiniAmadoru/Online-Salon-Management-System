@extends('layouts.app')

@section('sidebar')

<style type="text/css">

    .nav-pills .nav-link.active{

        color: #fff;
        background-color: #ccccb3;    
    }
    a:hover {
        background-color: #ffffff;
        opacity: .4;

        color: #000000 !important;
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
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <li class="nav-link">
            <a href="/adminDashboard" class="{!! classActivePath('adminDashboard') !!} nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminCustomer" class="{!! classActivePath('adminCustomer') !!} nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Customer
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminSalonOwner" class="{!! classActivePath('adminSalonOwner') !!} nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                    Salon owner
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminAppointment" class="{!! classActivePath('adminAppointment') !!} nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Appointment
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminAdvertisement" class="{!! classActivePath('adminAdvertisement') !!} nav-link">
                <i class="nav-icon fas fa-audio-description"></i>
                <p>
                    Advertisement
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminContactus" class="{!! classActivePath('adminContactus') !!} nav-link">
                <i class="nav-icon fas fa-envelope-open-text"></i>
                <p>
                    Customer Message
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminService" class="{!! classActivePath('adminService') !!} nav-link">
                <i class="nav-icon fas fa-stream"></i>
                <p>
                    Service
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminNewService" class="{!! classActivePath('adminNewService') !!} nav-link">
                <i class="nav-icon fas fa-allergies"></i>
                <p>
                    New Service
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminProduct" class="{!! classActivePath('adminProduct') !!} nav-link">
                <i class="nav-icon fab fa-battle-net"></i>
                <p>
                    Product
                </p>
            </a>
        </li>

        <li class="nav-link">
            <a href="/adminNewProduct" class="{!! classActivePath('adminNewProduct') !!} nav-link">
                <i class="nav-icon fas fa-allergies"></i>
                <p>
                    New Product
                </p>
            </a>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->





@endsection