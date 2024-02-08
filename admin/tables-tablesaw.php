<?php 
  require_once "./template/admin_header.php"; 
?>

    <!-- Begin page -->
    <div id="wrapper">


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

    <?php 
        require_once "./template/admin_sidebar.php"; 
    ?>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Stack Table</h4>
                                <p class="sub-header">
                                    The Stack Table stacks the table headers to a two column layout with headers on the
                                    left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                                </p>

                                <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                            Movie Title
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                            data-tablesaw-priority="3">Rank
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>1</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>2</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Avengers</td>
                                        <td>3</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                        <td>4</td>
                                        <td>2011</td>
                                        <td>96%</td>
                                        <td>$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td>Frozen</td>
                                        <td>5</td>
                                        <td>2013</td>
                                        <td>89%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Man 3</td>
                                        <td>6</td>
                                        <td>2013</td>
                                        <td>78%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Dark of the Moon</td>
                                        <td>7</td>
                                        <td>2011</td>
                                        <td>36%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>8</td>
                                        <td>2003</td>
                                        <td>95%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Skyfall</td>
                                        <td>9</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Age of Extinction</td>
                                        <td>10</td>
                                        <td>2014</td>
                                        <td>18%</td>
                                        <td>$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sortable Table</h4>
                                <p class="sub-header">
                                    Default appearance (with optional sortable-switch)
                                </p>

                                <table class="tablesaw table mb-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                            Movie Title
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                            data-tablesaw-priority="3">Rank
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>1</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>2</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Avengers</td>
                                        <td>3</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                        <td>4</td>
                                        <td>2011</td>
                                        <td>96%</td>
                                        <td>$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td>Frozen</td>
                                        <td>5</td>
                                        <td>2013</td>
                                        <td>89%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Man 3</td>
                                        <td>6</td>
                                        <td>2013</td>
                                        <td>78%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Dark of the Moon</td>
                                        <td>7</td>
                                        <td>2011</td>
                                        <td>36%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>8</td>
                                        <td>2003</td>
                                        <td>95%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Skyfall</td>
                                        <td>9</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Age of Extinction</td>
                                        <td>10</td>
                                        <td>2014</td>
                                        <td>18%</td>
                                        <td>$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Swipe Table</h4>
                                <p class="sub-header mb-1">
                                    Your awesome text goes here.
                                </p>

                                <table class="tablesaw table mb-0" data-tablesaw-mode="swipe">
                                    <thead>
                                    <tr>
                                        <th class="title" scope="col" data-tablesaw-sortable-col
                                            data-tablesaw-priority="persist">Movie Title
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                            data-tablesaw-priority="3">Rank
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>1</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>2</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Avengers</td>
                                        <td>3</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                        <td>4</td>
                                        <td>2011</td>
                                        <td>96%</td>
                                        <td>$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td>Frozen</td>
                                        <td>5</td>
                                        <td>2013</td>
                                        <td>89%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Man 3</td>
                                        <td>6</td>
                                        <td>2013</td>
                                        <td>78%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Dark of the Moon</td>
                                        <td>7</td>
                                        <td>2011</td>
                                        <td>36%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>8</td>
                                        <td>2003</td>
                                        <td>95%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Skyfall</td>
                                        <td>9</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Age of Extinction</td>
                                        <td>10</td>
                                        <td>2014</td>
                                        <td>18%</td>
                                        <td>$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Swipe Table with Mini Map</h4>
                                <p class="sub-header mb-1">
                                    Your awesome text goes here.
                                </p>

                                <table class="tablesaw table mb-0" data-tablesaw-mode="swipe" data-tablesaw-minimap>
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                            Movie Title
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                            data-tablesaw-priority="3">Rank
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>1</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>2</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Avengers</td>
                                        <td>3</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                        <td>4</td>
                                        <td>2011</td>
                                        <td>96%</td>
                                        <td>$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td>Frozen</td>
                                        <td>5</td>
                                        <td>2013</td>
                                        <td>89%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Man 3</td>
                                        <td>6</td>
                                        <td>2013</td>
                                        <td>78%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Dark of the Moon</td>
                                        <td>7</td>
                                        <td>2011</td>
                                        <td>36%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>8</td>
                                        <td>2003</td>
                                        <td>95%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Skyfall</td>
                                        <td>9</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Age of Extinction</td>
                                        <td>10</td>
                                        <td>2014</td>
                                        <td>18%</td>
                                        <td>$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Column Toggle Table</h4>
                                <p class="sub-header mb-1">
                                    The Column Toggle Table allows the user to select which columns they want to be
                                    visible.
                                </p>

                                <div class="table-responsive">
                                    <table class="tablesaw table mb-0" data-tablesaw-mode="columntoggle">
                                        <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                                Movie Title
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col
                                                data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                Rating
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                Gross
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Avatar</td>
                                            <td>1</td>
                                            <td>2009</td>
                                            <td>83%</td>
                                            <td>$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td>Titanic</td>
                                            <td>2</td>
                                            <td>1997</td>
                                            <td>88%</td>
                                            <td>$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Avengers</td>
                                            <td>3</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                            <td>4</td>
                                            <td>2011</td>
                                            <td>96%</td>
                                            <td>$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td>Frozen</td>
                                            <td>5</td>
                                            <td>2013</td>
                                            <td>89%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Iron Man 3</td>
                                            <td>6</td>
                                            <td>2013</td>
                                            <td>78%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Dark of the Moon</td>
                                            <td>7</td>
                                            <td>2011</td>
                                            <td>36%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Lord of the Rings: The Return of the King</td>
                                            <td>8</td>
                                            <td>2003</td>
                                            <td>95%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Skyfall</td>
                                            <td>9</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Age of Extinction</td>
                                            <td>10</td>
                                            <td>2014</td>
                                            <td>18%</td>
                                            <td>$1.0B</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!--end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Column Toggle Table with Mini Map</h4>
                                <p class="sub-header mb-1">
                                    The Column Toggle Table allows the user to select which columns they want to be
                                    visible.
                                </p>

                                <div class="table-responsive">
                                    <table class="tablesaw table mb-0" data-tablesaw-mode="columntoggle"
                                           data-tablesaw-minimap>
                                        <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                                Movie Title
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col
                                                data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                Rating
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                Gross
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Avatar</td>
                                            <td>1</td>
                                            <td>2009</td>
                                            <td>83%</td>
                                            <td>$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td>Titanic</td>
                                            <td>2</td>
                                            <td>1997</td>
                                            <td>88%</td>
                                            <td>$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Avengers</td>
                                            <td>3</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                            <td>4</td>
                                            <td>2011</td>
                                            <td>96%</td>
                                            <td>$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td>Frozen</td>
                                            <td>5</td>
                                            <td>2013</td>
                                            <td>89%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Iron Man 3</td>
                                            <td>6</td>
                                            <td>2013</td>
                                            <td>78%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Dark of the Moon</td>
                                            <td>7</td>
                                            <td>2011</td>
                                            <td>36%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Lord of the Rings: The Return of the King</td>
                                            <td>8</td>
                                            <td>2003</td>
                                            <td>95%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Skyfall</td>
                                            <td>9</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Age of Extinction</td>
                                            <td>10</td>
                                            <td>2014</td>
                                            <td>18%</td>
                                            <td>$1.0B</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!--end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Mode Switch Table</h4>
                                <p class="sub-header">
                                    The mode switcher allows the user to select which tablesaw view to use.
                                </p>

                                <table class="tablesaw table mb-0" data-tablesaw-mode="swipe" data-tablesaw-mode-switch
                                       data-tablesaw-minimap>
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                            Movie Title
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                            data-tablesaw-priority="3">Rank
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rating
                                        </th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Avatar</td>
                                        <td>1</td>
                                        <td>2009</td>
                                        <td>83%</td>
                                        <td>$2.7B</td>
                                    </tr>
                                    <tr>
                                        <td>Titanic</td>
                                        <td>2</td>
                                        <td>1997</td>
                                        <td>88%</td>
                                        <td>$2.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Avengers</td>
                                        <td>3</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.5B</td>
                                    </tr>
                                    <tr>
                                        <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                        <td>4</td>
                                        <td>2011</td>
                                        <td>96%</td>
                                        <td>$1.3B</td>
                                    </tr>
                                    <tr>
                                        <td>Frozen</td>
                                        <td>5</td>
                                        <td>2013</td>
                                        <td>89%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Man 3</td>
                                        <td>6</td>
                                        <td>2013</td>
                                        <td>78%</td>
                                        <td>$1.2B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Dark of the Moon</td>
                                        <td>7</td>
                                        <td>2011</td>
                                        <td>36%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>8</td>
                                        <td>2003</td>
                                        <td>95%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Skyfall</td>
                                        <td>9</td>
                                        <td>2012</td>
                                        <td>92%</td>
                                        <td>$1.1B</td>
                                    </tr>
                                    <tr>
                                        <td>Transformers: Age of Extinction</td>
                                        <td>10</td>
                                        <td>2014</td>
                                        <td>18%</td>
                                        <td>$1.0B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bare Table</h4>
                                <p class="sub-header">
                                    Your awesome text goes here.
                                </p>

                                <div class="table-responsive">
                                    <table class="tablesaw table mb-0" data-tablesaw-mode="swipe" data-tablesaw-sortable
                                           data-tablesaw-sortable-switch data-tablesaw-minimap
                                           data-tablesaw-mode-switch>
                                        <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">
                                                Movie Title
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col
                                                data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                Rating
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                Gross
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Avatar</td>
                                            <td>1</td>
                                            <td>2009</td>
                                            <td>83%</td>
                                            <td>$2.7B</td>
                                        </tr>
                                        <tr>
                                            <td>Titanic</td>
                                            <td>2</td>
                                            <td>1997</td>
                                            <td>88%</td>
                                            <td>$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Avengers</td>
                                            <td>3</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td>Harry Potter and the Deathly Hallows—Part 2</td>
                                            <td>4</td>
                                            <td>2011</td>
                                            <td>96%</td>
                                            <td>$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td>Frozen</td>
                                            <td>5</td>
                                            <td>2013</td>
                                            <td>89%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Iron Man 3</td>
                                            <td>6</td>
                                            <td>2013</td>
                                            <td>78%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Dark of the Moon</td>
                                            <td>7</td>
                                            <td>2011</td>
                                            <td>36%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>The Lord of the Rings: The Return of the King</td>
                                            <td>8</td>
                                            <td>2003</td>
                                            <td>95%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Skyfall</td>
                                            <td>9</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td>Transformers: Age of Extinction</td>
                                            <td>10</td>
                                            <td>2014</td>
                                            <td>18%</td>
                                            <td>$1.0B</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!--end col-->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">

    <div data-simplebar class="h-100">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
        </div>
        
        <!-- Tab panes -->
        <div class="tab-content pt-0">  

            <div class="tab-pane active" id="settings-tab" role="tabpanel">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, Layout, etc.
                    </div>

                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                            checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                            id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                        <label class="form-check-label" for="brand-check">Brand</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                        <label class="form-check-label" for="gradient-check">Gradient</label>
                    </div>

                    <!-- size -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                            id="default-size-check" checked />
                        <label class="form-check-label" for="default-size-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                            id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                            id="compact-check" />
                        <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                        <label class="form-check-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                            checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->


<?php 
  require_once "./template/admin_footer.php"; 
?>