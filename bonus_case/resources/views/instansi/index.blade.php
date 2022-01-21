<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instansi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Instansi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto down">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('logout')}}"><i class="fas fa-sign-in-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
      <div class="card c-size-2 c-color rounded-3 border-0 shadow-sm">
        <div class="card-body">
          <!-- Breadcrumb -->
          <div style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Referensi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Instansi</li>
            </ol>
          </div>
          <!-- End Breadcrumb -->

          <!-- Search Area -->
          <div class="search-bar rounded-3 border-0">
            <form>
              <div class="row">
                <div class="col-lg-3">
                  <label for="cari" class="col-form-label">Instansi</label>
                </div>
                <div class="col-lg-6">
                  <input type="text" id="cari" class="form-control mb-3" />
                  <button type="submit" class="btn btn-primary text-center">Cari</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Search Area -->

          <!-- Add Button -->
          <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i> Tambah</button>
          <!-- End Add Button -->

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Tambah Instansi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="clearfix">
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="instansi" class="form-label">Instansi</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="instansi" placeholder="Nama Instansi" name="instansi" />
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" style="height: 100px" name="deskripsi"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="float-end">
                      <button type="submit" class="btn btn-primary text-center">Simpan</button>
                      <button type="reset" class="btn btn-secondary text-center">Reset</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->

          <!-- Table -->
          <div class="search-bar rounded-3 border-0">
            <table class="table table-warning table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Instansi</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                  </td>
                  <td>jbbbhbub</td>
                  <td>j njnjnnn</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                  </td>
                  <td>jbbbhbub</td>
                  <td>j njnjnnn</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Table -->
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
