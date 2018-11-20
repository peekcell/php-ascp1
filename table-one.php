<!DOCTYPE html>
<html>
<head>
  <title>Try lang :)</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link  rel="stylesheet" href="assets/css/customh.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>
  <?php

    include 'header.php';

  ?>

  <?php

    include 'nav-links.php';

  ?>

      <main role="main" class="container content">
        <div class="container" style="padding-top: 40px;">
          <div class="row">
            <div class="col-md-12" style="text-align: center;">
              <h1>Table One</h1>

              <button class="btn btn-info" style="position: absolute; right: 0;" data-toggle="modal" data-target="#exampleModal">ADD +</button>

              <!-- Table Starts here -->
              <div class="container-fluid" style="padding-top: 100px;">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            <!-- end of table -->


            <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="index.html" method="post">
                <input class="form-control" type="text" placeholder="Default input">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- end of MODAL -->

            </div>
          </div>
        </div>

      </main><!-- /.container -->
</script>
</body>
</html>
