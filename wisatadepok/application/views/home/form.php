
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?=$judul?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php echo form_open('home/form_save');?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Tanggal</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="tgl" name="tgl" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-4 col-form-label">ISI</label> 
            <div class="col-8">
              <textarea id="isi" name="isi" cols="40" rows="2" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Rating</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="rating" id="rating_0" type="radio" class="custom-control-input" value="1" aria-describedby="ratingHelpBlock"> 
                <label for="rating_0" class="custom-control-label">Jelek</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="rating" id="rating_1" type="radio" class="custom-control-input" value="2" aria-describedby="ratingHelpBlock"> 
                <label for="rating_1" class="custom-control-label">Kurang Baik</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="rating" id="rating_2" type="radio" class="custom-control-input" value="3" aria-describedby="ratingHelpBlock"> 
                <label for="rating_2" class="custom-control-label">Cukup Baik</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="rating" id="rating_3" type="radio" class="custom-control-input" value="4" aria-describedby="ratingHelpBlock"> 
                <label for="rating_3" class="custom-control-label">Baik</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="rating" id="rating_4" type="radio" class="custom-control-input" value="5" aria-describedby="ratingHelpBlock"> 
                <label for="rating_4" class="custom-control-label">Sangat Baik</label>
              </div> 
              <span id="ratingHelpBlock" class="form-text text-muted">1 (Jelek) -> 5 (Sangat Bangus)</span>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        <?php echo form_close();?>
       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->