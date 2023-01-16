
    </div>
  
  </div>

  
<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/dataTables.bundle.js"></script> 

<!-- Plugin Js -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/plugin/jqueryuicalandar/jquery-ui.min.js"></script>
<script src="../assets/plugin/owlcarousel/owl.carousel.js"></script>
     


<!-- Jquery Page Js -->
<script src="../assets/js/template.js"></script>
<script src="../assets/js/page/index.js"></script>
<script>
    // project data table
    $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>

 
</body>

<!-- Mirrored from www.pixelwibes.com/template/ihealth/html/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 13:44:46 GMT -->
</html> 