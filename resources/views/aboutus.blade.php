@extends('layouts.layout')

@section('title', 'Quienes somos')


@section('content')
-Here’s what you need to know before getting started with the navbar:

Navbars require a wrapping .navbar with .navbar-expand{-sm|-md|-lg|-xl|-xxl} for responsive collapsing and color scheme classes.
Navbars and their contents are fluid by default. Change the container to limit their horizontal width in different ways.
Use our spacing and flex utility classes for controlling spacing and alignment within navbars.
Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.
Ensure accessibility by using a <nav> element or, if using a more generic element such as a <div>, add a role="navigation" to every navbar to explicitly identify it as a landmark region for users of assistive technologies.
Indicate the current item by using aria-current="page" for the current page or aria-current="true" for the current item in a set.
New in v5.2.0: Navbars can be themed with CSS variables that are scoped to the .navbar base class. .navbar-light has been deprecated and .navbar-dark has been rewritten to override CSS variables instead of adding additional styles.

@endsection

@section('pagetitle', 'Quienes somos')

