<div class="Wrapper" ng-app="myApp">
    <div class="Sidebar" ng-class="boolie ? 'is-collapsed' : ''">
        <header class="Sidebar-header">
            <div class="Sidebar-logo"></div>
        </header>
        <nav role="navigation">
            <ul>
                <li class="Sidebar-navItem">
                    <a href=""><?php echo $keywords ?></a>
                </li>

                <li class="Sidebar-navItem" data-toggle="modal" data-target="#myModal">
                    <a href="">Choose Graph </a>
                </li>
                <li class="Sidebar-navItem">
                    <a href="#">Export graph</a>
                </li>
                <li class="Sidebar-navItem">
                    <a href="#">Import graph</a>
                </li>
            </ul>
        </nav>

        <footer class="Sidebar-footer" ng-click="boolie = !boolie">
            <i class="Sidebar-toggleArrow Sidebar-menuIcon fa fa-arrow-left" ng-class="boolie ? 'rotate' : ''"></i>
            <span class="Sidebar-toggleText">Minimize menu</span>
        </footer>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Choose graph</h4>
                </div>
                <div class="modal-body">
                    <p style="color: #000000">Line Chart </p>
                    <p style="color: #000000">Area Chart </p>
                    <p style="color: #000000">Bar Chart  </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>