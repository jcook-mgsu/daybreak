$(document).ready(function(){
    // Initialize Sidenavigation
    $('.sidenav').sidenav();

    // Initialize form selects
    $('select').formSelect();

    // Initialize modals
    $('.modal').modal();

    // Turn Participants table into data table
    $('#all-participants-table').DataTable();
  });
