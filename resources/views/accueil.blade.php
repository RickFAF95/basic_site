@extends('layouts.master')
@section('content')
    <h1>Accueil</h1>
    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non diam laoreet, eleifend sapien efficitur, porta
        purus. Pellentesque semper ultricies risus in ullamcorper. Vivamus vitae mauris sed enim bibendum fringilla ut sed
        erat. Donec sit amet arcu sit amet tellus aliquet consequat. Curabitur dapibus turpis lorem, in vulputate leo
        tempor ut. Sed luctus, ante venenatis porttitor maximus, diam quam rutrum ex, at consectetur ipsum elit at risus.
        Curabitur rhoncus mattis sem ut blandit. Duis ac nisl nunc. Integer congue ipsum eu aliquet pellentesque.
        Nullam pharetra sed dui in auctor. Pellentesque ut vehicula lacus. Nunc et mauris sed mauris hendrerit volutpat
        at sit amet tortor. Ut congue tristique condimentum. Duis ut neque vestibulum, condimentum tortor id, consectetur
        nunc.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection