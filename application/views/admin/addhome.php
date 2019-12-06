<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" data-background-color="purple">
            <h4 class="card-title ">Data Home</h4>
          </div>
          <div class="card-body">
            <form method="post" action="<?= site_url('admincontroller/actaddHome') ?>" enctype="multipart/form-data"  accept-charset="utf-8">
              <div class="row">
                <div class="col-md-12">
                  <label>Foto Home</label>
                  <div class="controls-skpd">
                    <div class="forms-skpd row">
                      <div class="entry-skpd">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="well">
                                <input type="file" name="gambar">
                              </div>
                                <input type="hidden" name="oldFoto[]">
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Isi home</label>
                    <div class="form-group bmd-form-group">
                      <textarea class="form-control" id="editor" name="isi" rows="5"></textarea>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Tambah Berita</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>