$(document).ready(function(){
    // Initialize Sidenavigation
    $('.sidenav').sidenav();

    // Initialize form selects
    $('select').formSelect();

    // Initialize modals
    $('.modal').modal();

    // Turn Participants table into data table
    $('#all-participants-table').DataTable();

    // Turn Activity Log table into a data table
    $('#all-activities-table').DataTable();
  });
