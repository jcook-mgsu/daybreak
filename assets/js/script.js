$(document).ready(function(){
    // Initialize Sidenavigation
    $('.sidenav').sidenav();

    // Initialize modals
    $('.modal').modal();

    // Turn Participants table into data table
    $('#all-participants-table').DataTable();
  });
