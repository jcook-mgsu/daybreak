$(document).ready(function(){
    // Initialize Sidenavigation
    $('.sidenav').sidenav();

    // Initialize form selects
    $('select').formSelect();

    // Initialize modals
    $('.modal').modal();

    // Turn activities table into data table with filters & export options
    $('#all-participants-table thead tr').clone(true).appendTo('#all-participants-table thead');
    $('#all-participants-table thead tr:eq(1) th').each(function(i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search '+title+'" />');

        $('input', this).on( 'keyup change', function() {
            if (ptable.column(i).search() !== this.value) {
                ptable
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    // Init participants datatable
    var ptable = $('#all-participants-table').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      orderCellsTop: true,
      fixedHeader: true
    });

    // Turn activities table into data table with filters & export options
    $('#all-activities-table thead tr').clone(true).appendTo('#all-activities-table thead');
    $('#all-activities-table thead tr:eq(1) th').each(function(i) {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search '+title+'" />');

        $('input', this).on( 'keyup change', function() {
            if (atable.column(i).search() !== this.value) {
                atable
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });

    // Init activities datatable
    var atable = $('#all-activities-table').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      orderCellsTop: true,
      fixedHeader: true
    });

  });
