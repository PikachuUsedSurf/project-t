<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-meta-header></x-meta-header>

    <body class="antialiased mx-auto">
        <!-- Header -->
        <x-main-header></x-main-header>
        <!--  Auction Marquee  -->
        <x-auction-data></x-auction-data>
        <!--  nav bar -->
        <x-nav-bar></x-nav-bar>
        <!--  Main Content  -->
        <x-hero-content></x-hero-content>
        <!-- Footer -->
        <x-main-footer></x-main-footer>
    </body>
</html>
