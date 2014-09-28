    <!-- left side start-->
    <?php include 'leftmenu.php';?>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >
        <!-- header section start-->
        <?php include 'header.php'; ?>
        <!-- header section end-->
        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    Cities
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <button id="editable-sample_new" class="btn btn-primary">
                            Add New <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="btn-group pull-right">
                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Points</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>Jonathan</td>
                    <td>Smith</td>
                    <td>3455</td>
                    <td class="center">Lorem ipsume</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Mojela</td>
                    <td>Firebox</td>
                    <td>567</td>
                    <td class="center">new user</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Akuman </td>
                    <td> Dareon</td>
                    <td>987</td>
                    <td class="center">ipsume dolor</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Theme</td>
                    <td>Bucket</td>
                    <td>342</td>
                    <td class="center">Good Org</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Jhone</td>
                    <td> Doe</td>
                    <td>345</td>
                    <td class="center">super user</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Margarita</td>
                    <td>Diar</td>
                    <td>456</td>
                    <td class="center">goolsd</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Jhon Doe</td>
                    <td>Jhon Doe </td>
                    <td>1234</td>
                    <td class="center"> user</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Helena</td>
                    <td>Fox</td>
                    <td>456</td>
                    <td class="center"> Admin</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Aishmen</td>
                    <td> Samuel</td>
                    <td>435</td>
                    <td class="center">super Admin</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>dream</td>
                    <td>Land</td>
                    <td>562</td>
                    <td class="center">normal user</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>babson</td>
                    <td> milan</td>
                    <td>567</td>
                    <td class="center">nothing</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>
        <!--body wrapper end-->
    <!--data table-->    
    <!--footer section start-->
    <?php include 'footer.php';?>
    <script type="text/javascript" src="<?php echo base_url();?>js/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/data-tables/DT_bootstrap.js"></script>
    <!--script for editable table-->
    <script src="<?php echo base_url();?>js/editable-table-city.js"></script>
    <!-- END JAVASCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });
    </script>
</html>